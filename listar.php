<?php 
	require_once "conexion.php";

	$sql = "SELECT * FROM registros";
	$stmt = $pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	echo"<pre>";
	$Usuarios=$stmt->fetchAll();
//while ($row =$smtm->fetch) {
	# code...
//}
echo"</pre>";

 ?>