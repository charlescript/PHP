<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);

        $sql = "DELETE FROM usuarios where id='$id'";
        $pdo->query($sql);
        echo "Usuário deletado com sucesso!";

    
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }

?>