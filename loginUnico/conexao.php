<?php 

try {
    $pdo = new PDO("mysql:dbname=loginunico;host=127.0.0.1", "root", "");
} catch(PDOException $e){
    echo "ERRRO: ".$e->getMessage();
    exit; 
}