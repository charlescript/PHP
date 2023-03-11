<?php
class Animal {
        
    public function getNome() {
        echo "<h3>getNome da classe Animal</h3> <br/>";
    }

    public function testar() {
        echo "Testando!<br/>";
    }

}


class Cachorro extends Animal {
        
    public function getNome(){
        echo "<h4>getNome da classe Cachorro!</h4>";

        $this->testar();
    }

}


$animal = new Animal();
$animal->getNome();

$cachorro = new Cachorro();
$cachorro->getNome();

?>