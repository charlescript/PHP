<?php
    session_start();
    require 'config.php';
    
    if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false ) {
        $id = $_SESSION['banco'];

        $sql = $pdo->prepare("SELECT * FROM contas WHERE ID = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();

        } else{
            header("Location: login.php");
            exit;
        }

    } else {
        header("Location: login.php");
        exit;
    }
?>


<html>
    <head>
        <title>Caixa eletrônico</title>
    </head>

    <body>
        <h1>Banco Zeta</h1>
        <h3>Seja bem vindo <?php echo $info['titular']; ?></h3>
        Agência: <?php echo $info['agencia']; ?> <br/>
        Conta: <?php echo $info['conta']; ?> <br/>
        Saldo: <?php echo $info['saldo'] ?> <br/>
        <a href="sair.php">Sair</a>
        <hr/>

        <h3>Movimentação/Extrato</h3>

        <a href="add-transacao.php">Efetuar Transação </a> <br/><br/>

        <table border="1" width="400px">
            <tr>
                <th>Data</th>
                <th>Valor</th>
            </tr>

            <?php
                $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta ORDER BY data_operacao DESC ");
                $sql->bindValue(":id_conta", $id);
                $sql->execute();

                if($sql->rowCount() > 0){
                    foreach($sql->fetchAll() as $item){
                        ?>
                            <tr>
                                <td>-> <?php echo date('d/m/y H:i:s', strtotime($item['data_operacao'])); ?> </td>
                                <td>
                                    <?php if($item['tipo'] == '0'): ?>
                                        <font color="green"> creditado -> R$ <?php echo $item['valor'] ?></font>
                                    <?php else: ?>
                                        <font color="red">debitado -> R$ <?php echo $item['valor'] ?></font>
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