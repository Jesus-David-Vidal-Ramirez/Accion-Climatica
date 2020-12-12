	<?php

include 'conexion.php';

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$correo=$_POST["correo"];


$sql="SELECT  usuario from registros where usuario='$usuario' and correo='$correo' ";

//$stmt->setFetchMode(PDO::FETCH_ASSOC);

$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		'usuario'=>$usuario,
		'correo'=>$correo,

		]);

	$usuario=$stmt->fetch();


if ($usuario ) {
	$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$correo=$_POST["correo"];

	$sql="UPDATE registros SET clave='$clave'  WHERE usuario='$usuario' and correo='$correo'";
	$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		
		'clave'=>$clave

		]);

	$correo=$stmt->fetch();
	echo "<script> alert('Clave cambiada con exito!'); window.location.href='index.html'; </script>" ;
	//$_SESSION['usuario']=$usuario;

	//echo "<script> alert('Cambiemos el cambio climatico'); window.location.href='Index.html'; </script>" ;



}
	//header("location:login.html");
else{
	echo "<script> alert('usuario o correo incorrectos'); window.location.href='Recuperar.html'; </script>" ;
	echo "error";
}


?>