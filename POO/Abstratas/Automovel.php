<?php 

interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
	public function acelerar($velocidade){
		echo "O veiculo acelerou até ". $velocidade . " km/h";
	}
	public function frenar($frenar){
		echo "O veiculo frenou " . $velocidade . " km/h";
	}
	public function trocarMarcha($marcha){
		echo "O veiculo engatinhou a marcha de " . $marcha;
	}
}

 ?>