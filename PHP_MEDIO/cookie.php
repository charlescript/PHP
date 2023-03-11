<?php
    session_start();
    
    // Gerar uma sessão
    $_SESSION['teste'] = "Charles Rocha";
    echo "Minha sessão é de: " .$_SESSION['teste'];

    //Gerar um cookie
    setcookie("meuteste", "Fulano de tal", time()+3600);
    // echo "Cookie setado com sucesso!";
    echo "<br/>";
    echo "Meu cookie é de: ".$_COOKIE["meuteste"];


?>