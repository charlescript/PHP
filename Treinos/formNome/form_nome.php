<!Doctype html>

<html>
    <head>
        <title>Form Nome</title>
    </head>

    <body>
        <form method="POST">
            <h4>Qual seu nome:</h4>
            <input type="text" name="nome">
            <input type="submit" value="Enviar" />

            <br/>

           <?php
                if(!empty($_POST['nome'])){
                    $nome = addslashes($_POST['nome']);
                    echo "Seja bem vindo(a) ".$nome;
                }
                else{
                    exit();
                }
            ?>

        </form>
    </body>
</html>