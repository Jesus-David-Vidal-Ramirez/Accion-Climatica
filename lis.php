<?php

require_once('Listado.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Listado de Usuarios</title>
</head>
<body>
	<table border="1" cellpadding="4">
	<thead>

		
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Telefono</th>
		<th>Usuario</th>
		<th>Contraseña</th>


	</thead>
	<tbody>
		<?php foreach ($estudiantes as  $estudiante): ?>
<tr>
	 
	<td> <?php echo $estudiante[ 'Nombre']  ?></td> 	
	<td> <?php echo $estudiante[ 'Apellido']  ?></td> 	
	<td> <?php echo $estudiante[ 'Telefono']  ?></td> 
	<td> <?php echo $estudiante[ 'Usuario']  ?></td> 
	<td> <?php echo $estudiante[ 'Clave']  ?></td> 	
	</tr>
	<?php endforeach; ?> 

	 </tbody>
	  </table>

</body>
</html>