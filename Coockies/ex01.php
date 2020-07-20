<?php

$data = ["empresa" => "Hcode Treinamentos"];

setcookie("NOME_DO_COOCKIE", json_encode($data), time() + 3600);

echo "Ok! o coockie foi criado.";

?>