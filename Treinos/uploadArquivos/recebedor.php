<?php
    $arquivo = $_FILES['arquivo'];

    if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false) {

        $nomedoarquivo = md5(time().rand(0,99)).'.png';
        // move_uploaded_file($arquivo['tmp_name'], 'uploadArquivos'.$arquivo['name']);
        move_uploaded_file($arquivo['tmp_name'], 'uploadArquivos'.$nomedoarquivo);

        echo "Arquivo enviado com sucesso";
    }
?>