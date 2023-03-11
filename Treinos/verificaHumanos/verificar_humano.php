<?php
    session_start();

    $n1 = rand(0, 10);
    $n2 = rand(0, 10);

    $_SESSION['verifica'] = $n1 + $n2;
?>

<!Doctype html>
<html>
    <head>
        <title>Verifica humanos</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h1>Verificador de Humanos</h1>
        <form method="POST" action="verificador.php">
            <?php echo $n1; ?> + <?php echo $n2. " = ";?>
            <input type="number" name="result">
            <input type="submit" value="Verificar">
        </form>
    </body>
</html>