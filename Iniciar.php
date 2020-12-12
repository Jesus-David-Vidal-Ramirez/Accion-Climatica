<?php 
	include "php/codigo.php";
 
	session_start();

	if(!isset($_SESSION["user"])){
		header("location:index.html");
	}
 ?>
<html lang="en">
	<head>
		<title>ACCION POR EL CLIMA...</title>
		<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/acciones.js"></script>

<link rel="stylesheet" type="text/css" href="css/newEstilos.css">
  <link rel="stylesheet" href="css/footer.css"></link>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

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

				
				<button type="button" class="btn btn-ligh" data-toggle="modal" data-target="#exampleModal">
    	<font size="5" color="#0080FF" face="Segoe UI">Pedidos</font>	
</button>
<h5><a class="nav-link" href = "Salir.php" /> Cerrar Sesion </a></h5>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content card card-image" style="background-image: url('');">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Solicitar pedidos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="POST" action="pedido.php" id="myForm">
      		<div class="col-md-12">
      			
      			<input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
      		</div>
      		<div class="col-md-12">
      			<br>
      			<textarea rows="5" cols="60" placeholder="Descripcion" name="Descripcion"></textarea> 
      			<!--<input type="password" name="password" class="form-control" placeholder="Contraseña" required>--><br><br>
            <input class="btn btn-primary" type="submit" value="Enviar">
      		</div>
      	</form>
      </div>
      <!--<div class="modal-footer">
        <button type="submit" name="login" value="Ingresar" class="btn btn-primary">Login</button>
      </div>-->
    </div>
  </div>
</div>


				<!-- <h5><a class="nav-link" href = "Contacto.php" /> <?php echo $menu6;?> </a></h5> -->
					

				 
			</div>
		
			<div id="imagenes" >

				<img src="imagenes/principal.png"/>
	

			</div>
				

			
			<div id="contenido" >

				<center>
				<br><br><br><font face="time new roman" size="10" > 
				 <p><i> <?php echo $contenido;?> </i> </p></font>
				 <br>
				 <center>
				 <font face="time new roman" size="7" >
				 	<p align="center"> <i><?php echo $contenido1;?> </i></p></font> </center>
				 <!-- <p align="center">"La tierra no es una herencia de nuestros padres,&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				 					&nbsp &nbsp &nbsp sino un préstamo de nuestros hijos" 
 						</p> <p>"No lo arruines. Los buenos planetas son difíciles de encontrar"</p></font> -->
				
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
 		</table>
		</center>	
 		
 	</tbody>
	
	
 
	

</html>
