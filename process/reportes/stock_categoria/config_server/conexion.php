<?php
	
	$mysqli = new mysqli('localhost', 'nvoavpfg_user', 'GI{O8d^S@{G6', 'nvoavpfg_bd');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>
