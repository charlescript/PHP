<?php

class Cachorro {  // Classe usuário 
    public $nome;
    public $sobreNome;
    private $idade;
      
    
    // public function latir() {
    //     echo "Au au na área</br>";
    // }
}

$dog1 = new Cachorro();
$dog1->nome = "Tigre";
$dog1->sobreNome = "Lobita";

echo "O nome do meu cachorro é: ".$dog1->nome;
echo "<br/>Seu sobrenome é: " .$dog1->sobreNome;



// $cachorro = new Cachorro();
// $cachorro->latir();


// $dudu = new Cachorro();
// $dudu->latir();

// $cachorro2 = new Cachorro();
// $cachorro2->latir();
// Cachorro::latir();  //Acessando o método publico diretamente o que não é recomendado.



class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    
}

?>