<?php

try {
    throw new Exception("Houve um erro");
    
} catch (Exception $e) {
    
    echo json_encode([
        "message" => $e->getMessage(),
        "line" =>$e->getLine(),
        "file" =>$e->getFile(),
        "code" => $e->getCode()
    ]);
}

?>