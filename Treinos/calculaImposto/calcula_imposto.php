

<!DOCTYPE html>
<html>
    <head>
        <title>Imposto</title>
    </head>

    <body>
        
        <h4>Calculadora de Imposto</h4>

        <form method="POST">
            Valor do produto: <br/>
            <input type="text" name="vl_produto" placeholder="$$" pattern="[0-9.,]{1,}" />

            <br/><br/>

            Taxa de imposto (em %):<br/>
            <input type="number" name="taxa_imposto" step="0.01" max="100" placeholder="%"/>

            <br/><br/>
            <input type="submit" value="Calcular">
        </form>

        <br/><br/>

        <?php 
        if(!empty($_POST['vl_produto']) && !empty($_POST['taxa_imposto']) ) {            
            $vl_produto = floatval(str_replace(',','.', $_POST['vl_produto']));
            $taxa_imposto = floatval(str_replace(',','.', $_POST['taxa_imposto']));
            $imposto = ($vl_produto / 100) * $taxa_imposto; 
            $vl_produto_liquido = $vl_produto - $imposto;
            
            echo "Valor do produto: R$ ".$vl_produto;
            echo "<br/>";
            echo "Taxa de imposto: R$ ".$taxa_imposto . "%";
            echo "<hr/>";

            echo "Imposto: R$ " .number_format($imposto, 2, ',','.');
            echo "<br/>";
            echo "Produto: R$ " .number_format($vl_produto_liquido, 2, ',','.');
        }
        ?>
    </body>
</html>