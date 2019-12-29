<?php
	$db_host="localhost:3307";//Nombre del host
	$db_user="briandb";//Usuario de la base de datos
	$db_pass="briandb";//Contraseña de usuario de base de datos
	$db_name="test_chartjs";//Nombre de la base de datos
	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
 
	if ($conn->connect_error) {
	    die("Conexión falló: " . $conn->connect_error);
	}
?>	
	