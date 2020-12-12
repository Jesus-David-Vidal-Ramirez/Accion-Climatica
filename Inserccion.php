<?php

require_once ('conexion.php');

//$sql = "SELECT * FROM registro";

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$correo=$_POST["correo"];


	$sql = " INSERT INTO registros (nombre, apellido, telefono, usuario, clave, correo ) VALUES (:nombre, :apellido, :telefono, :usuario, :clave, :correo)";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':nombre'=>$nombre,
	':apellido'=>$apellido,
	':telefono'=>$telefono,
	':usuario'=>$usuario,
	':clave'=>$clave,
	
	':correo'=>$correo,
	

]))
	

{
	echo "<script> alert('Registro terminado con exito ');
	window.location.href='index.html';
</script>" ;

	
	//header("location:Index.html");
}
else{
 	echo"";
 	echo "<script> alert('Usuario ya definido Ingrese otro usuario'); window.location.href='Registrarse.html'; </script>";
// 	//$_SESSION["Logueado"]=!true;
 	
 }






/////////





?>
<!--
// try{

// 	$stmt->execute();
// 	echo"Registro guardado";

// }catch(PDOException $e){
// 	echo $e->getMessage();
// }

// $stmt->setFetchMode(PDO::FETCH_ASSOC);
// $stmt->execute();
// echo"<pre>";
// $estudiantes=$stmt->fetchAll();
//while ($row =$smtm->fetch()) {
	# code...
//}

//echo"</pre>";

 <!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		console.log("Registro guardado con exito")
	</script>
	<title></title>
</head>
<body>
	
	
	<form method ="POST" action="login.php">
<input type="submit" value="OK!">

	</form>
</body>
</html> -->