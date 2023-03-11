<?php

    try{
        $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost", "root", "");
    }catch(PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        echo "<br/><br/>ERRO ao tentar conectar no banco de dados. ERRO(4578)";
        exit;
    }

?>