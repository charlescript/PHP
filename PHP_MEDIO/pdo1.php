<?php

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);

        if($sql -> rowCount()>0){
            
            foreach($sql->fetchAll() as $usuario){
                echo"Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br>" ;
            }

        } else{
            echo "Não há usuários cadastrados";
        }

    } catch(PDOException $e) {
        echo "Falhou: conexão não estabelecida. ".$e->getMessage();
    }

?>