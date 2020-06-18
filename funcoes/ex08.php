<?php

function soma(int ... $valores):string{
    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(22, 2);
echo "<br>";
var_dump( soma(2.3, 2.2));
echo "<br>";

?>