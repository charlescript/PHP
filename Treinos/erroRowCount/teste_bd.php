<?php

    try{
        $pdo = new PDO("mysql:dbname=galeria;host=localhost","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "FALHA: ".$e->getMessage();
    }

    $sql = "SELECT * FROM fotos";
    $sql = $pdo->query($sql);

    echo "TOTAL DE FOTOS: ". $sql->rowCount();

?>