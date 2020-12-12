<?php
	require_once'conexion.php';

	session_start();

	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
	
	 $sql="SELECT  usuario from registro where usuario='ADMIN' and clave='ADMIN' ";

	
$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		'usuario'=>$usuario,
		'clave'=>$clave,

		]);

	$usuario=$stmt->fetch();

	//Aquí debe consultar en la base de datos y verificar el SI son correctos los datos y crear la sesión
	if($usuario){
		$_SESSION['user'] = $usuario;
		header("location: Iniciar.php");
	} else {
		echo "<script> alert('Contraseña o usuario incorrecta'); window.location.href='index.html'; </script>" ;
		//echo "error";
		//header("location:index.html");
	}

?>