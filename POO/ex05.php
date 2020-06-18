<?php

class Pessoa{
	public $nome = "Luís Pedro Adriano";
	protected $idade = 20;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$budunha = new Pessoa;

//echo $budunha -> nome;
$budunha -> verDados();


?>