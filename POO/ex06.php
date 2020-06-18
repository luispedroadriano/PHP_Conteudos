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
class Programador extends Pessoa{
	public function verDados(){
		echo "<b>".get_class($this)."</b><br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$budunha = new Programador;

//echo $budunha -> nome; 
$budunha -> verDados();


?>