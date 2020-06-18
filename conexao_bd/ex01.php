<?php 

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt -> bind_param("ss", $login, $pass);

$login = "Budunha";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "123123";

$stmt->execute();


 ?>