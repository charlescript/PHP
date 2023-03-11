
<?php

include 'contato.class.php';
$contato = new Contato();


    if(!empty($_POST['nome']) && !empty($_POST['email'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $contato->adicionar($email,$nome);
        header("Location: index.php");
    } else {
        echo "Está faltando dados";
    }

?>