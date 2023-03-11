<?php
session_start();

if(!empty($_POST['result'])){

    $result = intval($_POST['result']);

    if($_SESSION['verifica'] == $result ){
        echo "Humano confirmado!!";
        echo"<br/> <a href='verificar_humano.php'>Sair</a>";
    }
    else{
        echo "Fake não entra!";
        echo"<br/> <a href='verificar_humano.php'>Sair</a>";
    }
} else {
    echo "Não digitou nada!";
    
    echo"<br/> <a href='verificar_humano.php'>Sair</a>";
}
?>