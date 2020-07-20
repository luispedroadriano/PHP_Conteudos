<?php

if (isset($_COOKIE["NOME_DO_COOCKIE"])) {
   $obj = json_decode($_COOKIE["NOME_DO_COOCKIE"]);

   echo $obj->empresa;
}

?>