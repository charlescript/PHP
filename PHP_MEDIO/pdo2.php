<?php

    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";


    try{    
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        
        //$sql = "SELECT * FROM usuarios";
        $sql = "SELECT * FROM usuarios where email = 'siclano@gmail.com'";
        
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0) {
            
            foreach($sql->fetchAll() as $usuario){
                echo "Nome: ". $usuario["nome"]." - Email: ".$usuario["email"]." - Senha: ".$usuario["senha"]."<br/>";
            }

        } else{
            echo "Não há usuários cadastrados";
        }

    } catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();
    }

?>