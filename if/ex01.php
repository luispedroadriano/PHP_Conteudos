<?php
$idade = 17;

$idadeCrianca = 12;
$idadeAdolescente = 18;
$idadeAdulto = 35;
$idadeMelhor = 65;

if ($idade <= $idadeCrianca){
    echo "Criança";
} else if ($idade < $idadeAdolescente){
    echo "Adolescente";
} else if ($idade < $idadeMelhor){
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";
echo ($idade < $idadeAdolescente)?"Menor de idade":"Maior de idade";
?>