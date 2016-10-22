<?php
	session_start();
	//si entra sin estar logeado entonces lo envio al index y cierro el script
	if (!isset($_SESSION['correo'])) {
		header("location: index.php");
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Servicio de comida</title>
	<meta name="viewport" content="whidth-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
	<link rel="Stylesheet" type="text/css" href="css/Estilos.css">
    
     <title>Places Searchbox</title>
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
					<a href="pagActualizacionCliente.php">Gestionar Datos</a>
					<a href="pagConsultaEstablecimiento.php">Consultar Establecimiento</a>
					<a href="logout.php">Cerrar Sesion</a>
				</nav>
			</header>
 
		<section class="main">
			<div class="establecm">
				<h1>Buscar Establecimiento</h1>
				<br>
				<form>
					<label for ="buscarEstablecimiento">Buscar: </label>
					<input id ="buscarEstablecimiento" type ="text" placeholder="buscar nombre establecimiento";>
					<br><br>
					<input class="myButton" type="submit" value=" Consultar ">
				</form>
				<br><br>
			</div>
		</section>
 
		<footer>
			<section class="links">
				<a href="index.php">Inicio</a>
				<a href="pagActualizacionCliente.php">Gestionar Datos</a>
				<a href="pagConsultaEstablecimiento.php">Consultar Establecimiento</a>
				<a href="logout.php">Cerrar Sesion</a>
			</section>
 
		</footer>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3XGEKF7brx1x6yCHaZQubPPA4dIB1n8E&libraries=places&callback=initAutocomplete"
         			async defer></script>
	</body>
</html>