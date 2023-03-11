<?php

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";


    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $novasenha = md5("alteracao2");
        //$sql = "UPDATE usuarios SET email = 'abx@hotmail.com' where id = 6";
        $sql = "UPDATE usuarios SET senha = '$novasenha' where id = 6";
        $sql = $pdo->query($sql);

        echo "Usuário alterado com sucesso!";

    }catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();
    }


?>