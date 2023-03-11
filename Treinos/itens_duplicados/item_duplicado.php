<?php
    $array = array(9,8,7,4,5,5,1,3,2,8,9,7,4);

    echo '$array = array(9,8,7,4,5,5,1,3,2,8,9,7,4);';


        // for($i=0; $i<=13; $i++){
        //     for($y=0; $y>=13; $y++){
        //         // echo $i."-º I =".$array[$i]."  //  ";
        //         // echo $y."º Y = ".$array[$y];
        //         // echo "<br/>";
        //         }
        // }

        $novoArray = array();
        foreach($array as $n){
            if(in_array($n, $novoArray) == false){
                $novoArray[] = $n;
            }
        } 
?>

<!Doctype html>
<html>
    <head>
        <title>Numeros duplicados</title>
    </head>

    <body>
        
    <pre>
        <?php
            //print_r($array);
            var_dump($array);

            var_dump($novoArray);
        ?>
    </pre>
    </body>
</html>