<?php

try {
    $pdo = new PDO("mysql:dbname=usuariosonline;host=127.0.0.1", "root", "");
    
} catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit; 
}