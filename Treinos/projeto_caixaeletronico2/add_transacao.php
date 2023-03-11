<?php
    session_start();
    require 'conexao.php';

    if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false) {
        $id = $_SESSION['banco'];
    }

    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $valor = str_replace(",",".", $_POST['valor']);
        $valor = floatval($valor);

        $sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao ) VALUES (:id_conta, :tipo, :valor, NOW())");
        $sql->bindValue(":id_conta", $_SESSION['banco']);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":valor", $valor);
        $sql->execute();

        if($tipo == '0'){
            //Depósito
            $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":id", $_SESSION['banco']);
            $sql->execute();
        } else{
            //Saque
            $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":id", $_SESSION['banco']);
            $sql->execute();
        }

        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Transação</title>
        <link rel="stylesheet" href="css/style.css"/>  
    </head>

    <body>
        <form method="POST" >
            Tipo de transação: <br/>
            <select name="tipo">
                <option value="0">Depósito</option>
                <option value="1">Retirada</option>
            </select><br/><br/>

            Valor: <br>
            <input type="text" name="valor" pattern="[0-9.,]{1,}" /> 
            <br/><br/>

            <input type="submit" value="Transacionar" />
            <br/><br/>
        </form>


        <table class="tb_transaction" border="1" width="400">
                <tr>
                    <th>Data</th>
                    <th>Valor</th>
                </tr>

                <?php
                    $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta ORDER BY data_operacao DESC");
                    $sql->bindValue(":id_conta", $id);
                    $sql->execute();

                    if($sql->rowCount() > 0){
                        foreach($sql->fetchAll() as $item){
                            ?>
                            <tr>
                                <td> <?php echo date('d/m/Y H:m', strtotime($item['data_operacao'])); ?> </td>
                                <td class="valor">
                                    <?php if($item['tipo'] == '0'): ?>
                                        <font color="green">R$ depósito: <?php echo $item['valor'] ?> </font>
                                    <?php else: ?>
                                        <font color="red">R$ retirada:  <?php echo $item['valor'] ?> </font>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </table>   
    </body>
</html>