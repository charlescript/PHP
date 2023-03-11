<?php

include 'contato.class.php';
$contato = new Contato();


if(!empty($_POST['novo_nome']) && !empty($_POST['id'])){
    $novo_nome = $_POST['novo_nome'];
    $id = $_POST['id'];
    $email = $_POST['email'];

    $contato->editar2($id, $novo_nome, $email);

    header("Location: index.php");
    exit;
} else {
    echo "Falhou";

  
}

