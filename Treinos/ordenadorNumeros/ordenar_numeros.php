<?php
    if(!empty($_POST['nums'])){
        $num = $_POST['nums'];

        $vetor = explode(",",$num);

        for($j=0; $j<count($vetor); $j++){
            for($k=0; $k<count($vetor); $k++){
                if($vetor[$k] > $vetor[$j]) {
                    $aux = $vetor[$j];
                    $vetor[$j] = $vetor[$k];
                    $vetor[$k] = $aux; 
                }
            }   
        }
    }
?>



<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Ordenar números</title>
    </head>

    <body>
        <form method="POST">
            Digite os números:<br/>
            <input type="text" name="nums" pattern="[0-99.,]{1,}"/>
            <input type="submit" value="Enivar" />
        </form>

        <?php 
            if(!empty($vetor)){
                echo var_dump($vetor);
            }
        ?>
    </body>
</html>