<?php
    session_start();
    require 'conexao.php';

    if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false) {
        $id = $_SESSION['banco'];

        $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();
        } else {
            header("Location: login.php");
            exit;
        }
    }
    else { // Se não houver retorno válido do banco de dados, retornará acesso negado por credencial errada.
        header("Location: login.php");
        exit;
    }
?>

<html>
    <head>
        <title>Caixa eletrônico</title>
        <link rel="stylesheet" href="css/style.css"/>  
    </head>

    <body>
        <div class="cabecalho">
            <h1>Banco Charbyte</h1>
            Titular: <?php echo $info['titular']; ?> <br/>
            Agência: <?php echo $info['agencia']; ?>  <br/>
            Conta: <?php echo $info['conta']; ?> <br/>
            Saldo: <?php echo $info['saldo']; ?> <br/>
            <a href="sair.php">Sair</a>
        </div>
        <hr/>
        
        <div class="movimentacao">
            <h3>Movimentação / extrato</h3>
            
            <div class="btn_transacao">
                <a href="add_transacao.php">Fazer transação</a> 
            </div>
            
            <table border="1" width="400">
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
        </div>

    </body>
</html>