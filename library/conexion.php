<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'nvoavpfg_bd');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	} 
?>
