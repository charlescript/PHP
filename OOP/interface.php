<?php

interface Animal {
    public function andar();
    public function correr();
    public function comer();
}


class Cachorro implements Animal {

    public function andar() {
        echo "Cachorro andou! <br/>";
    }

    public function correr(){
        echo "Cachorro correu! <br/>";
    }

    public function comer() {
        echo "Cachorro está comendo! <br/>";
    }
}


$cachorro = new Cachorro();
$cachorro->andar();
$cachorro->correr();
$cachorro->comer();


?>