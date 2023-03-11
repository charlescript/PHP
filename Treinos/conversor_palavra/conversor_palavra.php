<!DOCTYPE html>

<html>
    <head>
        <title>Conversor de palavra</title>
    </head>

    <body>
        Conversor de Palavra em Dígito
        <form method="POST">
            <input type="text" name="texto">
            <input type="submit" value="Enviar">
        </form>

        <?php
            if(!empty($_POST['texto'])){

                $texto = $_POST['texto'];
                $array = explode(',',$texto);

                foreach($array as $valores){
                    echo $valores;

                    switch($valores){
                        case "zero":
                            echo " -> 0 <br/>";
                        break;

                        case "um":
                            echo " -> 1 <br/>";
                        break;

                        case 'dois':
                            echo " -> 2 <br/>";
                        break;

                        case 'tres':
                            echo " -> 3 <br/>";
                        break;

                        case 'quatro':
                            echo " -> 4 <br/>";
                        break;

                        case 'cinco':
                            echo " -> 5 <br/>";
                        break;

                        case 'seis':
                            echo " -> 6 <br/>";
                        break;

                        case 'sete':
                            echo " -> 7 <br/>";
                        break;

                        case 'oito':
                            echo " -> 8 <br/>";
                        break;

                        case 'nove':
                            echo " -> 9 <br/>";
                        break;

                        case 0:
                            echo " -> zero <br/>";
                        break;

                        case 1:
                            echo " -> um <br/>";
                        break;

                        case 2:
                            echo " -> dois <br/>";
                        break;

                        case 3:
                            echo " -> tres <br/>";
                        break;

                        case 4:
                            echo " -> quatro <br/>";
                        break;

                        case 5:
                            echo " -> cinco <br/>";
                        break;

                        case 6:
                            echo " -> seis <br/>";
                        break;

                        case 7:
                            echo " -> sete <br/>";
                        break;

                        case 8:
                            echo " -> oito <br/>";
                        break;

                        case 9:
                            echo " -> nove <br/>";
                        break;
                    } // Fim do switch

                } // Fim do foreach
            }
        ?>
    </body>
</html>