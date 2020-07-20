<?php

$dir = "images";

if (!is_dir($dir)) {
    mkdir($dir);
    echo "Pasta {$dir} criada com sucesso";
} else {
    rmdir($dir);
    echo "Já removida a pasta nos arquivos";
}

?>