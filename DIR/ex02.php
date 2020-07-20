<?php

$images = scandir("images");

$data = [];

foreach ($images as $img) {
    if (!in_array($img, [".", ".."])) {
       
        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        $info["size"] = filesize($filename) . " KB";
        $info["modified"] = date("d/m/Y H:m", filemtime($filename));
        $info["url"] = "http://localhost/Hcode/DIR/" . str_replace("\\", "/", $filename) ;

        array_push($data, $info);
    }
}

echo json_encode($data);






?>