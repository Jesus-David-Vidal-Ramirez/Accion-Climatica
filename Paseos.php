<?php 
	include "php/codigo.php";

 ?>
<html lang="en">
	<head>
		<title>ACCION POR EL CIMA</title>
		<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
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

		<div id="contenido">
			<center><h1> sitios turisticos mas importantes </h1></center>

<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
    <!--  <img id="logo" src="imagenes/arboles.png"/>-->
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio1.jpeg" style="height: 235px; width: 100%;" />
        </div>
        <div class="card-body">
          <h1>Club Nautico Mar Adentro De Tolu </h1>
        </div>
          <i>Club Naútico Mar Adentro de Tolú, sitio turísticos con un compromiso Ecologico respetando los ambientes naturales de la región del golfo de Morrosquillo, ecopaseos a las islas de San Bernardo, la ruta del caiman alegre, volcan de lodo, Cienaga de la Caimanera, y todo el entorno del Golfo, Brindandole al Turísta seguridad y confianza.</i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio15.jpeg" style="height: 235px; width: 100%; />
        </div>
        <div class="card-body">
          <h1>Parque Nacional Natural Tayrona</h1>
        </div>
          <i>Las deslumbrantes playas y el mar azul de este lugar es uno de los destinos turísticos más famosos del país y en la antigüedad este parque fue un sitio sagrado de pagamento a la tierra para los indígenas de la región. Sus antiguos senderos conforman una red de caminos que comunicaba a las cuatro diferentes etnias nativas de la Sierra y entre sus límites se encuentran diversos sitios sagrados y devocionales. </i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio15.jpg" style="height: 235px; width: 100%;/>
        </div>
        <div class="card-body">
          <h1>Parque Nacional Los Katios</h1>
        </div>
          <i>Los paisajes del Parque los Katíos presentan gran variedad y belleza. Las estribaciones de la Serranía del Darién forman montañas y colinas al norte y centro del área protegida. En estos sectores hay grandes caídas y saltos de agua de imponente hermosura como El Tilupo con cerca de 100 metros de cascada. El parque también posee extensas planicies, algunas de las cuales se inundan durante los periodos de lluvias.</i>
        

      </div>
    </div>
  </div>
</div>

<br>
<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
    <!--  <img id="logo" src="imagenes/arboles.png"/>-->
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio4.jpg" style="height: 235px; width: 100%;" />
        </div>
        <div class="card-body">
          <h1>Parque Nacional Natural Puracé</h1>
        </div>
          <i>el parque ofrece una experiencia increíble a los viajeros que buscan desconexión y aventura, y ofrece actividades como senderismo, observación de fauna y flora silvestre y la oportunidad de conocer de cerca los resguardos indígenas de Puracé y Paletará. Para llegar al Parque se debe ir hasta Popayán por tierra o avión y de ahí tomar transporte terrestre hasta el parque.</i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio11.jpg" style="height: 235px; width: 100%; />
        </div>
        <div class="card-body">
           <h1>Psrque natural de camboya</h1>
        </div>
          <i>esconde auténticos tesoros de la naturaleza. Bordeada por montañas, valles, ríos y lagos, Camboya nos ofrece una riqueza natural increíble, lo que hace que años tras años sean más los visitantes que se deciden conocer los principales joyas naturales del país</i>

         
        </i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio14.jpg" style="height: 235px; width: 100%;/>
        </div>
        <div class="card-body">
           <h1>Parque natural chingaza</h1>
        </div>
          <i>La zona presenta una flora singular propia de los páramos y una fauna muy variada que puede observarse y fotografiarse a gusto durante los recorridos por los senderos de interpretación ambiental.</i>
        

      </div>
    </div>
  </div>
</div>
<br>
<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
    <!--  <img id="logo" src="imagenes/arboles.png"/>-->
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio12.jpg" style="height: 235px; width: 100%;" />
        </div>
        <div class="card-body">
          <h1> Parque Nacional Natural El Cocuy
</h1>
        </div>
          <i> El Parque Nacional Natural El Cocuy, con su sierra nevada, es el sitio ideal para los amantes de los escaladores y de los deportes de montaña. Está ubicado entre los departamentos de Boyacá y de Arauca, al centro-oriente del país.</i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio16.jpg" style="height: 235px; width: 100%; />
        </div>
        <div class="card-body">
          <h1>Parque Natural San Bernardo </h1>
        </div>
          <i>El parque constituye un conjunto submarino de ecosistemas y comunidades habitado principalmente por corales que albergan cientos de animales microscópicos, peces de distintas formas y colores, crustáceos, moluscos, anémonas, erizos y estrellas de mar y una amplia gama de aves marinas entre ellas el pelicano, el ave lobo, entre otras.

         
        </i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/sitio17.jpg" style="height: 235px; width: 100%;/>
        </div>
        <div class="card-body">
          <h1>Parque Nacional Las Hermosas</h1>
        </div>
          <i>El Parque Nacional Natural Las Hermosas es un área de incomparable belleza. Allí nacen cientos de ríos que, desde cumbres y lagunas, bajan por entre valles boscosos y sabanas hasta las poblaciones de Tulúa, Palmira, Buga y Chaparral.</i>
        

      </div>
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
    <!--  <img id="logo" src="imagenes/arboles.png"/>-->
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/riklinsus.png" style="height: 235px; width: 100%;" />
        </div>
        <div class="card-body">
         <h1>RIKLINSUS</h1>
        </div>
          <i> Desarrollamos y aplicamos <br> soluciones integrales para la <br> prevención, control y gestión <br> medioambiental, que contribuyen a <br> la mejora de este</i>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/producto.png"" style="height: 235px; width: 100%; />
        </div>
        <div class="card-body">
          <h1>PRODUCTOS </h1>
        </div>
          <i>Brindamos productos echos con objetos reciclados, brindamos informacion sobre sitios turisticos naturales y comopoder contribuir con el clambio climatico</i>

      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-heading">
          <img src="imagenes/contacto.png" style="height: 235px; width: 100%;/>
        </div>
        <div class="card-body">
          <h1>CONTACTOS?></h1>
        </div>
          <i>elefonos: 3017870492 <br> Facebook: Riklinsus Reciclable <br> Instagra:@riklinsus_reciclable <br> Gmail, Hotmail</i>
        

      </div>
    </div>
  </div>
</div>

			

</div>


 	</tbody>
	
	
 
	

</html>
