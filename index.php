<?php
	require_once('config.php');
	session_start();
	//verifico si entra a la página principal estando ya logeado
	if (isset($_SESSION['correo'])) {
	
		//verifico si entró siendo un administrador o un cliente
		$consulta = "SELECT esAdmin FROM cliente where correo ='".$_SESSION['correo']."';";
		$resultado = mysql_query($consulta);
		$verificacion = mysql_fetch_array($resultado);
		
		if($verificacion['esAdmin']==1)
		{
			//entró siendo un administrador
			header("location: inicioLogeadoAdmin.php");
			exit();
		}else{
			//entró siendo un cliente
			header("location: inicioLogeado.php");
			exit();
		}
		
		
	}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Servicio de comida</title>
	<link rel="Stylesheet" type="text/css" href="css/Estilos.css">
</head>
	<body>
		<div class="contenedor">
			<header>
				<div class="logo">
					<img src="images/food-network.png" width="150" alt="">
					<a href="index.php">Servicios de Comidas</a>
				</div>

				<nav>
					<a href="index.php">Inicio</a>
					<a href="pagLogin.php">Login</a>
					<a href="#">Proyectos</a>
					<a href="#">Contacto</a>
				</nav>
			</header>
 
		<section class="main">
			<article>
			<h2 class="titulo">Establecimientos e informacion sobre servicios de domicilio </h2>
				<p>
					Somos una empresa llamada searchthefood encargada de promocionar 
					lugares de comida adecuados para ti, segun criterios como gustos particulares para distintos tipos de comida,
					e informacion acerca del servicio a domicilio de los diferentes establecimientos.
					
				<p>
				<img src="images/takeeat.png">
			</article>
		</section>
 
		<aside>
			<div class="widget">
				<div class="imagen"></div>
				<img src="images/holaFood.png">
			</div>
 
			<div class="widget">
				<div class="imagen"></div>
				<img src="images/imagesAdom.png">
			</div>
		</aside>
 
		<footer>
			<section class="links">
					<a href="index.php">Inicio</a>
					<a href="pagLogin.php">Login</a>
					<a href="#">Proyectos</a>
					<a href="#">Contacto</a>
			</section>
 
		</footer>
	</div>
	</body>
</html>