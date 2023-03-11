<?php

   abstract class Animal {
        private $nome;
        private $idade;

        abstract protected function andar();

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }
    }


    class Cavalo extends Animal {
        private $quantidad_de_patas;
        private $tipo_de_pelo;
        private $peso_cavalo;

        public function andar(){
            return "<br/>O cavalo andou!";
        }

        public function setTipoPelo($pelo){
            if(!empty($pelo)){
                $this->tipo_de_pelo = $pelo;
            }
        }

        public function getTipoPelo(){
            return "<br/>Tipo pelo: ".$this->tipo_de_pelo;
        }


        public function setPeso($peso){
            $this->peso_cavalo = $peso;
        }

        public function getPeso(){
            return "<br/>Peso do cavalo: ".$this->peso_cavalo;
        }
    }


    $cavalo = new Cavalo();

    $cavalo->setNome("Folk");

    echo "O nome do cavalo é: ". $cavalo->getNome();
    
        $cavalo->setTipoPelo("Dourado");
    echo $cavalo->getTipoPelo();

        $cavalo->setPeso(420);
    echo $cavalo->getPeso();


    echo $cavalo->andar();  

?>