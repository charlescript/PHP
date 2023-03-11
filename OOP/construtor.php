<?php

Class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function __construct($title, $corpo){
        $this->setTitulo($title);
        $this->setCorpo($corpo);
    }

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
    //--------------------------------------------------------------------

    public function getCorpo(){  // Função para retornar o corpo do post.
        return $this->corpo;
    }

    public function setCorpo($c){ // Função para inserir(setar) o corpo do post;
        if( !empty($c) ){
            $this->corpo = $c;
        }
    }

}


$post = new Post("Game of Thrones","Essa série foi marcante por ter obtido público record em 1 década de trajetória, com muitos titulos!");
echo "Titulo do post: <b>".$post->getTitulo()."</b>";
echo "<br/>Corpo do post: ".$post->getCorpo();


?>