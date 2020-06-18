<?php

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		//var_dump("DESTRUIDO!");
	}

	public function __toString(){
		return $this->logradouro.", ".$this->numero ." e ".$this->cidade;
	}
}

$testando = new Endereco("Luís Pedro Adriano", "941042612", "Luanda-Angola");

echo $testando;



?>