<?php

$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";
$sq = strpos($frase, $palavra);
//var_dump($sq);
$texto = substr($frase, 0, $sq);

var_dump($texto);

$texto = substr($frase, $sq + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto);
?>