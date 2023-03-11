<?php

    if(!empty($_POST['num'])){
        $num = addslashes($_POST['num']);
        
            echo "<table border='1px'>";
            echo '<thead>Tabuada do '.$num.'<thead/>';
            for($x=1; $x<=10;$x++){
                echo "<tr>";
                    echo "<td>";
                        echo $num.' x '.$x. ' = '.($num*$x);
                    echo "<td/>";
                echo "<tr/>";
            }

            echo "<table/>";
            echo "</br>";
            echo "<a href='index.php'>Voltar</a>";
             
        }
        else{
            echo "Número não digitado <br/>" ;
            echo "A primeira caixa de texto não foi preenchida!";
            echo "<br/> <a href='index.php'>Voltar</a>";
        }

        echo "<hr/>";
     //------------------------------------------------------------------------------
        
        if(!empty($_POST['num1'])){
            $num1 = addslashes($_POST['num1']);
            
                echo "<table border='1px'>";
                echo '<thead>Tabuada do '.$num1.'<thead/>';
                for($x=1; $x<=10;$x++){
                    echo "<tr>";
                        echo "<td>";
                            echo $num1.' x '.$x. ' = '.($num1*$x);
                        echo "<td/>";
                    echo "<tr/>";
                }
    
                echo "<table/>";
                echo "</br>";
                echo "<a href='index.php'>Voltar</a>";
                 
            }
            else{
                echo "Número não digitado <br/>" ;
                echo "A segunda caixa de texto não foi preenchida!";
                echo "<br/> <a href='index.php'>Voltar</a>";
            }
            echo "<hr/>";
        //--------------------------------------------------------------

        if(!empty($_POST['num2'])){
            $num2 = addslashes($_POST['num2']);
            
                echo "<table border='1px'>";
                echo '<thead>Tabuada do '.$num2.'<thead/>';
                for($x=1; $x<=10;$x++){
                    echo "<tr>";
                        echo "<td>";
                            echo $num2.' x '.$x. ' = '.($num2*$x);
                        echo "<td/>";
                    echo "<tr/>";
                }
    
                echo "<table/>";
                echo "</br>";
                echo "<a href='index.php'>Voltar</a>";
                 
            }
            else{
                echo "Número não digitado <br/>" ;
                echo "A terceira caixa de texto não foi preenchida!";
                echo "<br/> <a href='index.php'>Voltar</a>";
            }
    
            echo "<hr/>";
         //------------------------------------------------------------------------------

         if(!empty($_POST['num3'])){
            $num3 = addslashes($_POST['num3']);
            
                echo "<table border='1px'>";
                echo '<thead>Tabuada do '.$num3.'<thead/>';
                for($x=1; $x<=10;$x++){
                    echo "<tr>";
                        echo "<td>";
                            echo $num3.' x '.$x. ' = '.($num3*$x);
                        echo "<td/>";
                    echo "<tr/>";
                }
    
                echo "<table/>";
                echo "</br>";
                echo "<a href='index.php'>Voltar</a>";
                 
            }
            else{
                echo "Número não digitado <br/>" ;
                echo "A quarta caixa de texto não foi preenchida!";
                echo "<br/> <a href='index.php'>Voltar</a>";
            }
    
            echo "<hr/>";
         //------------------------------------------------------------------------------


         //------------------------------------------------------------------------------



         if(!empty($_POST['num4'])){
            $num4 = addslashes($_POST['num4']);
            
                echo "<table border='1px'>";
                echo '<thead>Tabuada do '.$num4.'<thead/>';
                for($x=1; $x<=10;$x++){
                    echo "<tr>";
                        echo "<td>";
                            echo $num4.' x '.$x. ' = '.($num4*$x);
                        echo "<td/>";
                    echo "<tr/>";
                }
    
                echo "<table/>";
                echo "</br>";
                echo "<a href='index.php'>Voltar</a>";
                 
            }
            else{
                echo "Número não digitado <br/>" ;
                echo "A quarta caixa de texto não foi preenchida!";
                echo "<br/> <a href='index.php'>Voltar</a>";
            }
    
            echo "<hr/>";
         //------------------------------------------------------------------------------
?>

