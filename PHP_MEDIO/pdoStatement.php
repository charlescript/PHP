<?php

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $nome = 'Bonieky';
        $id = 5;

        $sql = "UPDATE usuarios set nome = :nome where id = :id";
       

        $sql = $pdo->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':id', $id);
        $sql->execute();
       
        echo "Usuário atualizado com sucesso: ";

    } catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
    }


?>