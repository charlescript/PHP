<?php
    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";



    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $senha = md5(77457732177777);
        //$sql = "UPDATE usuarios SET nome = 'Belarmino' WHERE id = 7" ;
        //$sql = "UPDATE usuarios SET email = 'belarmino@gmail.com' WHERE id = 7";
        $sql = "UPDATE usuarios SET senha = '$senha' WHERE id = 1 ";
        $sql = $pdo->query($sql);

        echo "Usuário alterado com sucesso!";
    } catch(PDOException $e){
        echo "Falhou: " .$e->getMessage();
    }

?>