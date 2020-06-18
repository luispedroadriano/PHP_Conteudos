<?php 

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
	echo "Error: " . $conn->connect_error;
	exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$date = array();

while ($row = $result->fetch_assoc()) {
	//var_dump($row);
	array_push($date, $row);
}

echo json_encode($date);

 ?>