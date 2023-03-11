<?php

if(!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['operacao'])){
    $n1 = addslashes(floatval($_POST['n1']));
    $n2 = addslashes(floatval($_POST['n2']));
    $operacao = addslashes($_POST['operacao']);

    switch($operacao) {
        case 1:
            echo "Resultado da soma: -> ";
            echo $n1. " + ". $n2 . " = ".($n1+$n2);
            break;
        
        case 2:
            echo "Resultado da multiplicação -> ";
            echo $n1. " x ". $n2 . " = ".$n1*$n2;
            break;

        case 3:
            echo "Resultado da subração: -> ";
            echo $n1. " - ". $n2 . " = ".($n1-$n2);
            break;
            
        case 4:
            echo "Resultado da divisão: -> ";
            echo $n1. " / ". $n2 . " = ".$n1/$n2;
            break;
        
        default:
            echo "Não determinado";
    }
    
} else {
    echo "Algo deu errado!";
}

?>

<br/>
<a href="calculadora_basica.php" > Sair</a>
