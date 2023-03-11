<?php
    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass= "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        

    } catch (PDOExeption $e){
        echo "Falhou a conexão: " .$e->getMessage();
    }
?>