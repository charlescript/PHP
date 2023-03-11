<?php

    $vetorNomes = array("Amanda","Bruna","Boniecky","Charles","Danilo","Elineuza","Gabriel","Larissa");
    $qtNomes = sizeof($vetorNomes);

    $chances = ((1/$qtNomes)*100);
    $porcent = number_format($chances, 2,'.',',');
    echo "Cada nome tem ".$porcent. " % de chance para ganhar! <br/>";

?>


<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Sorteio</title>
    </head>

    <body>
        
        <h3>Sorteio selecione um nome:</h3>
            <form method="POST">
                <select name="names">
                    <option value="Amanda">Amanda</option>
                    <option value="Bruna">Bruna</option>
                    <option value="Boniecky">Boniecky</option>
                    <option value="Charles">Charles</option>
                    <option value="Danilo">Danilo</option>
                    <option value="Elineuza">Elineuza</option>
                    <option value="Gabriel">Gabriel</option>
                    <option value="Larissa">Larissa</option>
                </select>
                
                &nbsp;
                <input type="submit" value="Verificar">
            </form>

            <?php
                if(isset($_POST['names'])){
                    echo "Sorteando <br/>";
                    $nomeSelecionado = $_POST['names'];
                    $sorteado[1] = $vetorNomes[rand(0, $qtNomes - 1)];

                    if($nomeSelecionado == $sorteado[1]){
                        echo "<br/> Você selecionou: ".$nomeSelecionado;
                        echo "<br/><b>Parabéns você acertou, o nome sorteado foi: <b/>".$sorteado[1];
                    }
                    else{
                        echo "<br/> Você selecionou: ".$nomeSelecionado;
                        echo "<br/><b>Infelizmente você errou, o nome sorteado foi: <b/>".$sorteado[1];
                    }
                }
                else {
                    echo "Nome não selecionado";
                }
            ?>
    </body>
</html>