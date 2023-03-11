<!Doctype html>
<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <form method="POST" action="calc.php">
            <input type="number" name="n1">

            <select name="operacao">
                <option value="1">+</option>
                <option value="2">X</option>
                <option value="3">-</option>
                <option value="4">/</option>
            </select>       

            <input type="number" name="n2">

            <input type="submit" value="Calcular" />
        </form>
    </body>
</html>