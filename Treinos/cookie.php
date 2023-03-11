<?php
    session_start();

    //GERAR UMA SESSÃO
    $_SESSION['teste'] = "Charles Rocha";
    echo "Minha sessão é de: " .$_SESSION['teste'];

?>

   <br/>

<?php
    // Gerar um cookie
    setcookie("meuteste", "Fulano de tal", time()+3600);
    // echo"Cookie setado com sucesso";
    
    echo "Meu cookie é de: ".$_COOKIE["meuteste"];
?>