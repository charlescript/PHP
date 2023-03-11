<?php

    $dsn = "mysql:dbname=blog; host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";

    try {     
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        
        $sql = "SELECT * FROM usuarios where email = 'inexistente@gmail.com' ";  
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            echo "Existem usuários <hr/>";

            foreach($sql->fetchAll() as $usuario){
                echo "Nome: ".$usuario["nome"]." <br/>Email: ".$usuario["email"]."<br/>Senha:".$usuario["senha"]."<hr/>";
            }

        }  else{
            echo "Não há usuários cadastrados!";
        }     

    } catch(PDOException $e) {
        echo "Falha na tentativa de conexão do banco de dados: " .$e->getMessage();
    }

?>