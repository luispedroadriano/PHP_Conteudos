<?php

class Pessoa {
    public $nome; // Atributo
    public function falar(){ // Método
        return "Meu nome é ".$this -> nome;
    }
}

$Budunha = new Pessoa();
$Budunha -> nome = "Budunha";
echo $Budunha -> falar();

?>