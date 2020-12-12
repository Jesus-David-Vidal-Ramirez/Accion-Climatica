<?php
require_once'conexion.php';

$usuario=$_POST["usuario"];
$Descripcion=$_POST["Descripcion"];

$sql=" INSERT INTO `accion_climatica`.`informacion` (Descripcion, Usuario) VALUES (:usuario, :Descripcion);";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	
	':usuario'=>$usuario,
	':Descripcion'=>$Descripcion

	

]))
	

{
	echo "<script> alert('pedido enviado con exito ');
	window.location.href='Iniciar.php';
</script>" ;

	
	//header("location:Index.html");
}
else{
 	echo"";
 	echo "<script> alert('Enviado satisfactoriamente'); window.location.href='Iniciar.php'; </script>";
// 	//$_SESSION["Logueado"]=!true;
 	
 }
?>