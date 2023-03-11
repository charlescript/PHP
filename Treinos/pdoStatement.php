<?php
    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass= "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        // // $novoNome = "Pedro";
        // // $id = 5;
        // $novoNome = $_GET['nome'];
        // $ = $_GET['id'];
        // $sql = "UPDATE usuarios set nome = '$novoNome' WHERE id = '$id' ";
        // //$sql = "DELETE FROM usuarios WHERE id = '$id' ";
        // $pdo->query($sql);

        $nome = 'Larissa';
        $id = 3;

        $sql = "UPDATE USUARIOS SET nome = :novonome WHERE id = :id  ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':novonome', $nome);
        $sql->bindValue(':id', $id);
        $sql->execute();

        echo "Usuário alterado com sucesso!";

    } catch(PDOException $e) {
        echo "Falhou: " .$e->getMessage();
    }


?>