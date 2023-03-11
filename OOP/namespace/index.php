<?php

require 'namespace.php';
require 'namespace2.php';

$sobre = new \aplicacao\v1\Sobre(); // Instanciou na váriável $sobre a classe Sobre na versão 1.0 

$sobre2 = new \aplicacao\v2\Sobre();    // Instanciou na váriave $sobre2 a classe Sobre na versão 2.0

echo "Versão: ".$sobre->getVersao();

echo "<br/>Versão: ".$sobre2->getVersao();

?>