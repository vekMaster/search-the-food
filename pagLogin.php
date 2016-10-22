<?php
	require_once('config.php');
	session_start();
	//verifico si entra al login estando ya logeado
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
	<meta name="viewport" content="whidth-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
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
			<div class = "logeo">
				<h1>Login</h1>
				<br>
				<form id ="formLogin" method = "POST" action ="verificarLogin.php" >
					<input id ="correo" name ="correo" type ="email" placeholder="Ingrese su email">
					<br><br>
					<input id="clave" name ="clave" type ="password" placeholder="Ingrese la clave">
					<br><br>
					<input class="myButton" type="submit" value=" Entrar ">
				</form>
				<br><br>
 				<a id ="registroUsuario"href="pagRegistroCliente.php">Nuevo Usuario</a>
			</div>
		</section>
 
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