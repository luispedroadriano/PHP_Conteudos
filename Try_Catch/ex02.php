<?php

function trataNome($name){
    if (!$name) {
        throw new Exception("Nenhum nome foi informado". "<br/>");
    }
    echo ucfirst($name). "<br/>";
}

try {
    trataNome("Budunha");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "executou o Try!";
}

?>