<?php

Class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($t){  // Método para receber e válidar o titulo inserido pelo usuário
        if(strlen($t) > 5 && is_string($t)){
            $this->titulo = $t;
        } 
        else{
            echo "Valor inserido com menos de 5 caracteres ou numero(s) inválido";
        }
    }

}


$post = new Post();
$post->setTitulo("Dança dos dragões!");

echo "<br/>Titulo: ".$post->getTitulo();



?>