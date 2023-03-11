<?php
    try{
        $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=127.0.0.1" ,"root" ,"");
    } catch(PDOException $e){
        echo "Erro ao conectar no banco de dados: " .$e->getMessage();
        exit;
    }
?>