<?php
    if(!empty($_POST['frase']) && !empty($_POST['retirar']) && !empty($_POST['inserir']) ){
        $frase = addslashes($_POST['frase']);
        $retirar = addslashes($_POST['retirar']);
        $inserir = addslashes($_POST['inserir']);


        $novaFrase = str_replace($retirar,$inserir,$frase);
    } 
    else {
        $frase = "Não foi digitado";
        $novaFrase = "Não recebemos frase de alteração!";
    }



?>

<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Troca palavras</title>
    </head>

    <body>
        <h2>Substituidor</h2>
        
        <form method="POST">
            Frase: <br/>
            <input type="text" name="frase"><br/><br/>

            Procura por: <br/>
            <input type="text" name="retirar"><br/><br/>

            Trocar por: <br/>
            <input type="text" name="inserir">
            <br/><br/>

            <input type="submit" value="Alterar" />
        </form>

        <?php
            echo "<br/>";
            echo "Frase: ".$frase;
            echo "<br/>";
            echo "Nova frase: ".$novaFrase;
        ?>
    </body>

</html>