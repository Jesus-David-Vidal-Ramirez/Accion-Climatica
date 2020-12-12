<?php

require_once'conexion.php';
//require_once'listarDescripciones.php';
require_once'listar.php';
//require_once'listarDescripciones.php';

//require_once'Eliminar.php';

session_start();

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$usu=$usuario;
$sql="SELECT  usuario from administrador where usuario='$usuario' and clave='$clave' ";

$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		'usuario'=>$usuario,
		'clave'=>$clave,

		]);

	$usuario=$stmt->fetch();

if ($usuario) {
	$_SESSION['usuario']=$usuario;
	

	//echo "<script> alert('Cambiemos el cambio climatico'); window.location.href='#'; </script>" ;

	echo "<script> alert('Bienvenido Riklinsús'); </script>";
	echo "<center> BIENVENIDO " ;
	echo $usu;
	echo "</center> ";

	
	//header("location:Salir.php");
	// $sql = "SELECT * FROM registros";

	// $stmt = $conexion->prepare($sql);

	// $stmt->setFetchMode(PDO::FETCH_ASSOC);

	// $stmt->execute();

	// $registros = $stmt->fetchAll();
	//echo "<script> alert('Contraseña incorrecta'); window.location.href='Administrador.php'; </script>";
}
	
else{
	echo "<script> alert('Contraseña incorrecta'); window.location.href='administrador.html'; </script>";
	
	//header("location:administrador.html");
}


?>

<form action="Salir.php">
<BUTTON>Cerrar Sesion</BUTTON>
</form>
<br>
<h3>Eliminar</h3>
<form action="Eliminar.php" method="POST">
	
	<input type="text" name="usuario" placeholder="Usuario">
	<BUTTON>ELIMINAR</BUTTON>
</form>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de Usuarios</title>
</head>
<body>
	<center>
	<table border="1" cellpadding="5">
		<THEAD>
			<TH colspan="5">Usuarios </TH>
		</THEAD>
	<thead>

		
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Telefono</th>
		<th>Usuario</th>
		<th>Contraseña</th>


	</thead>
	<tbody>
		<?php foreach ($Usuarios as  $usuario): ?>
<tr>
	 
	<td> <?php echo $usuario[ 'Nombre']  ?></td> 	
	<td> <?php echo $usuario[ 'Apellido']  ?></td> 	
	<td> <?php echo $usuario[ 'Telefono']  ?></td> 
	<td> <?php echo $usuario[ 'Usuario']  ?></td> 
	<td> <?php echo $usuario[ 'Clave']  ?></td> 	
	</tr>
	<?php endforeach; ?> 

	 </tbody>
	  </table>
</center>

</body>
</html>