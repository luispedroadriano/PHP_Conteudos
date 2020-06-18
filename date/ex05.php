<?php
$entrada = new DateTime();
$periodo = new DateInterval("P15D");

$entrada -> add($periodo);

echo $entrada -> format("d/m/Y H:i:s");
?>