<?php
    if(!empty($_POST['codigo'])) {
        $codigo = $_POST['codigo'];

        if($codigo == 'charles'){

            header("Location: pagina2.php");
        } else {
            echo "Acesso negado";
        }
    }
?>


<h1>Página 1</h1>

<form method="POST">
    Digite "charles" para passar:
    <br/><br/>

    <input type="text" name="codigo" />
    <br/><br/>

    <input type="submit" value="Enviar" />
</form>

