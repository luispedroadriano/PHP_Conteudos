<?php 

spl_autoload_register(function($nameClass){
	$dir = "Conseguiste";
	if (file_exists($dir.DIRECTORY_SEPARATOR.$nameClass.".php") === true ) {
		require_once($dir.DIRECTORY_SEPARATOR.$nameClass.".php");
	}
});

$budunha = new Conseguiste();
$budunha -> ver();

 ?>