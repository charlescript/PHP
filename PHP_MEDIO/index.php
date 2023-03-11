<?php
    //Variáveis
    $vnome = "Charles Rocha";

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title> Aula 2 PHP Constantes e Variáveis </title>
    </head>

    <body>
        <?php
            echo $vnome;

            $x = 1;

            while($x <= 10){
                echo "X é igual a ".$x."<br/>";
                $x++;
            }
        ?>
    </body>

</html>