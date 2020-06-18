<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		echo "<b>".$key.":</b> ".$value."<br/>";
	}
	echo "==========================================<br/>";
}


 ?>