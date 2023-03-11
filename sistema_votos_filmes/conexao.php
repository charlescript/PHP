<?php

try {
    $pdo = new PDO("mysql:dbname=projeto_rating;host=127.0.0.1", "root" , "");
} catch(PDOException $e) {
    echo "ERRR: ". $e->getMessage();
    exit;
}