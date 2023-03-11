<?php

    // $array = array(
    //     "nome" => "Charles",
    //     "idade" => 26,
    //     "cidade" => "São Vicente",
    //     "pais" => "Brasil"
    // );


    // $array2 = array_values($array);
    // print_r($array2);

    // array_pop($array);
    // array_shift($array);

    $array = array(
        "José",
        "Alexandre",
        "Zefinha",
        "Bonieky",
        "Charles"
    );

    // asort($array);
    // print_r($array);

    echo "Total de alunos: ". count($array);
    
    if(in_array("Tereza", $array)) {
        echo"<br/>";
        echo "Vencedor foi Charles";
    }
    else{
        echo"<br/>";
        echo "Nome não encontrado";
    }


?>