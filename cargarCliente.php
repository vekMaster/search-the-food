<?php
	
 	require_once('config.php'); 	
 	$consulta = "Select * from cliente";
 	$respuesta = mysql_query($consulta) or die ("consulta no exitosa");
	

	while($resultado = mysql_fetch_array($respuesta)){
		echo '<option value ="'.$resultado[0].'">'.$resultado[0].'</option>';
	}



?>