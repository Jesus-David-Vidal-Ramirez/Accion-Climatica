<?php 
	include "php/codigo.php";

 ?>
<html lang="en">
	<head>
		<title>ACCION POR EL CIMA</title>
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>
		<body>
			
			<div id="general" >
				<br>
				<center>
				<img src="imagenes/arbol.png"/>
				<br>
				<font size="5" face="arial" > <p align="center"> <b> CUIDEMOS EL <br> MEDIO <br>AMBIENTE </b> </p> </font>
				
				<font color="black" face="time new roman"> <h5><?php echo $nombre;?> </h5></font>
				
				<center>
					<br><br>
				<h5 ><a class="nav-link" href="pagina.php" ><?php echo $menu1; ?> </a>  </h5>
				<h5><a class="nav-link" href="Parque.php" /> <?php echo $menu2;?> </a>  </h5>
				<h5> <a  class="nav-link" href = "Paseos.php"  /> <?php echo $menu3;?></a></h5>
				<h5><a class="nav-link" href = "Fotografias.php"" /> <?php echo $menu4;?> </a></h5>
				<h5><a class="nav-link" href = "Login.php" /> <?php echo $menu5;?> </a></h5>
				<h5><a class="nav-link" href = "Contacto.php" /> <?php echo $menu6;?> </a></h5>
					</center>
				</center>
				 
			</div>



			<div id="informacion" >
				<center>
<table>
			<thead>
					<th><img src="imagenes/riklinsus.png"/></th>
					<th><img src="imagenes/producto.png"/></th>
					<th><img src="imagenes/contacto.png"/></th>
			</thead>

 	<tbody>
 		<tr>
 			<td><center><h1><?php echo $Riklinsús; ?> </h1> </center></td>
 			<td><center><h1><?php echo $producto; ?> </h1> </center></td>
 			<td><center><h1><?php echo $contacto; ?></h1> </center></td>
 			
 		</tr>
 		<tr>
 			<td><p align="center"><i> <font color="#A4A4A4" face="time new roman"> <h5><?php echo $Riklinsús1;?></i></p> </td>
 			<td><p align="up"><i> <font color="#A4A4A4" face="time new roman"> <h5><?php echo $producto1;?> </i></p> </td>
 			<td><p align="center"><i>  <font color="#A4A4A4" face="time new roman"> <h5><?php echo $contacto1;?> </i></p> </td></font>
 			
 		</tr>
 	</tbody>
</table>
		</center>	
</body>
</html>