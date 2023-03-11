<?php

    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";


    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $nome ="Blablabla";
        $email = "blabla@gmail.com";
        $senha = md5("1235");

        $sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha' ";
        $sql = $pdo->query($sql);

        echo "Usuário inserido: ".$pdo->lastInsertId();

    }catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();
    }


?>