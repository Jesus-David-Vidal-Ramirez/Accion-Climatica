


<?php 
	include "php/codigo.php";

 ?>
<html lang="en">
	<head>
		<title>ACCION POR EL CIMA</title>
		<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/portafolio.css">
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/acciones.js"></script>


 

 </head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light navmenu">
				<button id="showmenu" class="navbar-toggler float-right" type="button">
				    <span class="navbar-toggler-icon"></span>
				 </button>
			</nav>
				
			<div class="general">
				<br>
				<center>
				<img src="imagenes/arbol.png"/>
				<br>
				<font size="5" face="arial" > <p align="center"> <b> CUIDEMOS EL <br> MEDIO <br>AMBIENTE </b> </p> </font>
				
				<font color="black" face="time new roman"> <h5><?php echo $nombre;?> </h5></font>
				
				<center>
					<br><br>
				
				<h5 ><a class="nav-link" href="Pagina.php"><?php echo $menu1; ?> </a>  </h5> 
				<!-- <h5><a class="nav-link" href="parque.php" /> <?php echo $menu2;?> </a>  </h5> -->
				<h5> <a  class="nav-link" href = "Paseos.php"  /> <?php echo $menu3;?></a></h5>
				<h5><a class="nav-link" href = "Fotografias.php" /> <?php echo $menu4;?> </a></h5>
				<h5><a class="nav-link" href = "index.html" /> <?php echo $menu5;?> </a></h5>
				<!-- <h5><a class="nav-link" href = "Contacto.php" /> <?php echo $menu6;?> </a></h5> -->
					</center>
				</center>
				 
			</div>
			<center><br>
			<h1> Productos que ofrece Riklinsús</h1>
			</center>
			<br>
			<div id="contenido" >
				
				<center>
				<section class="portafolio">

		<div class="portafolio-container">
			<section class="portafolio-item">
				<img src="imagenes/producto1.jpeg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Alcancia puerquito</h2>
					<p>Alcancia hechas de botellas reciclables con un valor de 5000 pesos ayuda el medio ambiente.</p>
				</section>
			</section>
			<section class="portafolio-item">
				<img src="imagenes/producto1.1.jpeg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Alcancia puerquito</h2>
					<p>Alcancia hechas de botellas reciclables con un valor de 5000 pesos ayuda el medio ambiente.</p>
				</section>
			</section>
			<section class="portafolio-item">
				<img src="imagenes/producto1.2.jpeg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Alcancia puerquito</h2>
					<p>Alcancia hechas de botellas reciclables con un valor de 5000 pesos ayuda el medio ambiente.</p>
				</section>

			</section>
		</div>
	</section>
	<section class="portafolio">
		<BR>
		<div class="portafolio-container">
			<section class="portafolio-item">
				<img src="imagenes/producto2.jpeg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Puerquito alcancia</h2>
					<p>Alcancia hechas de botellas reciclables con un valor de 3500 pesos ayuda el medio ambiente.</p>
				</section>
			</section>
			<section class="portafolio-item">
				<img src="imagenes/producto2.1.jpeg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Puerquito alcancia</h2>
					<p>Alcancia hechas de botellas reciclables con un valor de 3500 pesos ayuda el medio ambiente.</p>
				</section>
			</section>
			<section class="portafolio-item">
				<img src="imagenes/producto2.2.jpeg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Puerquito alcancia</h2>
					<p>Alcancia hechas de botellas reciclables con un valor de 3500 pesos ayuda el medio ambiente.</p>
				</section>

			</section>
		</div>
	</section>
<br>
<section class="portafolio">

		<div class="portafolio-container">
			<section class="portafolio-item">
				<img src="imagenes/producto3.png" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Carrito tesla de Juguete</h2>
					<p>Auto, por un mejor futuro con un valor de tan solo 3500.</p>
				</section>
			</section>
			<section class="portafolio-item">
				<img src="imagenes/producto3.1.png" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Carrito tesla de Juguete</h2>
					<p>Auto, por un mejor futuro con un valor de tan solo 3500.</p>
				</section>
			</section>
			<section class="portafolio-item">
				<img src="imagenes/producto3.2.png" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Carrito tesla de Juguete</h2><p>Auto, por un mejor futuro con un valor de tan solo 3500.</p>
				</section>

			</section>
		</div>
	</section>
<hr>
				</center>
				
		<br><br><br>
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
 		</table>
		</center>	
 		
 	</tbody>
		</div>		


			<br><br><br>

	

</html>
