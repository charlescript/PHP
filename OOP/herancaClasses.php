<?php

    

    class Animal {
        public $nome;
        private $idade;
    }

    class Cavalo  extends Animal {
        private $quantidade_patas;
        private $cor_pelo;
    }

    class Gato extends Animal{
        private $quantidade_patas;
        private $miado;
    }


    $cavalo = new Cavalo();

    $cavalo->nome = "Horse 1";

    echo "Nome do meu cavalo: " .$cavalo->nome;
?>