<?php 

abstract class Animal{
	public function falar(){
		return "Som.";
	}
	public function mover(){
		return "Anda.";
	}
}

class Cao extends Animal{
	public function falar(){
		return "Late!";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Mia!";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "Canta!";
	}
	public function mover(){
		return "Voa e " . parent::mover();
	}
}


$boby = new Cao;
echo $boby -> falar() . "<br/>";
echo $boby -> mover();
echo "<br/>-----------------<br/>";

$Garfield = new Gato;
echo $Garfield -> falar() . "<br/>";
echo $boby -> mover();
echo "<br/>-----------------<br/>";

$Rio = new Passaro;
echo $Rio -> falar() . "<br/>";
echo $Rio -> mover();
echo "<br/>-----------------<br/>";


 ?>