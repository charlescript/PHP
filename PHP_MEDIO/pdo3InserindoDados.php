<?php

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass= "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        
        $nome = "Testador 2";
        $email = "testador2@hotmail.com";
        $senha = md5("graphquel");

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";
        $sql = $pdo->query($sql);

        echo "Usuário inserido: ". $pdo->lastInsertId();


    } catch(PDOException $e){
        echo "Falhou: ". $e->getMessage();
    }


?>