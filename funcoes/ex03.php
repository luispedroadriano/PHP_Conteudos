<?php
function ola($texto, $periodo = "Bom dia"){
    return "Olá $texto ! $periodo !" . "<br>";
}

echo ola("Mundo");
echo ola("");
echo ola("Luís", "Boa tarde");
echo ola("Budunha", "");

?>