<?php

Class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;

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

    //-----------------------------------------------------------

    public function addComentario($msg){
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }

    public function getQuantosComentarios(){
        return $this->qtComentarios;
    }

    //-----------------------------------------------------------

    private function contarComentarios(){
        $this->qtComentarios = count($this->comentarios);
    }

}


$post = new Post();

$post->addComentario("Teste 1");
$post->addComentario("Teste 2");
$post->addComentario("Teste 3");
$post->addComentario("Teste 4");
$post->addComentario("Teste 5");
$post->addComentario("Teste 6");
$post->addComentario("Teste 7");

echo "Quantidade de comentários: ".$post->getQuantosComentarios();

?>