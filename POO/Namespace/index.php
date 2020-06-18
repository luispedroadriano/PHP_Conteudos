<?php 
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("Luis Pedro Adriano");
$cad -> setEmail("luispedroadriano@gmail.com");
$cad -> setSenha("12345689");

$cad->registrarVenda() ;
echo "<br>";
var_dump($cad);
 ?>