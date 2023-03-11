<?php
    require 'conexao.php';

    $id = 0;
    if(isset($_GET['id']) && empty($_GET['id']) == false){
        $id = addslashes($_GET['id']);
    }

    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $sql = "UPDATE usuarios SET nome ='$nome', email = '$email' where id = '$id'";
        $pdo->query($sql);

        header("Location: controleUsuario.php");
    }
        $sql = "SELECT * FROM usuarios where id = '$id' ";
        $sql = $pdo->query($sql);
        if($sql->rowCount()>0) {
            $dado = $sql->fetch();
        } else {
            header("Location: controleUsuario.php");
        }
?>

<form method="POST">
Nome: 
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /><br/><br/>

    E-mail:
    <input type="email" name="email" value="<?php echo $dado['email']; ?>" /><br/><br/>

    <input type="submit" value="Alterar"/>
</form>