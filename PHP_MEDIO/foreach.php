<?php

$nomes = array("Charles","Bonieky","André","Fulano","Lucas");

$dados = array(
        array("nome"=>"Charles", "idade"=>26),
        array("nome"=>"Bonieky", "idade"=> 35),
        array("nome"=>"André", "idade"=> 40),
        array("nome"=>"Fulano", "idade"=> 12),
        array("nome"=>"Lucas", "idade"=> 29)
);

$estudante = array(
    "nome" => "Charles",
    "idade" => 26,
    "cidade" => "Santos",
    "estado" => "SP",
    "pais" => "Brasil"
);

    foreach($nomes as $aluno) {
        echo "Aluno: ".$aluno."<br/>";
    }

    echo "<hr/>";

    foreach($dados as $aluno){
        echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"];
        echo"<br/>";
    }

    echo "<hr/>";

    foreach($estudante as $chave => $dado){
        echo $chave ." = ". $dado."<br/>";
    }
?>


   

