<?php 

	require_once "conexion.php";
	$conexion=conexion();
	
	$d=$_POST['date'];
	$r1=$_POST['ruc'];
	$r2=$_POST['r_social'];
	$m=$_POST['monto'];

	//consulta sin datos factura
	if (empty($_POST['num_factura'])){

		$f="Sin Datos";
	
	}else {
		$f=$_POST['num_factura'];
	}
	//consulta sin datos boleta
	if (empty($_POST['num_boleta'])){

		$b1="Sin Datos";
	
	}else {
		$b1=$_POST['num_boleta'];
	}
	//consulta sin datos Anulado
	if (empty($_POST['anulado'])){

		$a="Sin Datos";
	
	}else {
		$a=$_POST['anulado'];
	}
	//consulta bajas 
	if (empty($_POST['bajas'])){

		$b2="Sin Datos";
	
	}else {
		$b2=$_POST['bajas'];
	}
	 
	$dato = explode("/", $d); 
	$year = $dato[0];
	$mes = $dato[1];
	$dia = $dato[2];



	$sql="INSERT into compras (num_factura,num_boleta,anulado,bajas,dia, mes, year,ruc,r_social,monto)
								values ('$f','$b1','$a','$b2','$dia','$mes','$year','$r1','$r2','$m')";
	echo $result=mysqli_query($conexion,$sql);

 ?>