<?php 

class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($n){
		$this->numero = $n;
	}
}
class CPF extends Documento{
	public function validar():bool{
		return true;
	}
}

$budunha = new CPF;
$budunha -> setNumero("941042612");

var_dump($budunha-> validar());
echo "<br>";
echo $budunha-> getNumero();

 ?>