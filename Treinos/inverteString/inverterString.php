<Doctype html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Inverte String</title>
    </head>

    <body>
        <h1>Inverter String</h1>

        <form method="POST">
            Palavra/Frase: <br/>
            <input type="text" name="texto"> &nbsp;
            <input type="submit" value="Reverter" >
        <form>

        <?php
            if(!empty($_POST['texto'])){
                $texto = $_POST['texto'];
                $qtCaracter = strlen($texto);
                
                echo "<br/>". $texto."<br/>";
                for($i=$qtCaracter-1; $i>=0; $i--){
                    echo $texto[$i];
                }
            }
        ?>
    </body>
</html>