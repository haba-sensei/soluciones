<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$f=$_POST['num_factura'];
	$b1=$_POST['num_boleta'];
	$a=$_POST['anulado'];
	$b2=$_POST['bajas'];
	$d=$_POST['date'];
	$r1=$_POST['ruc'];
	$r2=$_POST['r_social'];
	$m=$_POST['monto'];

	$dato = explode("/", $d); 
	$year = $dato[0];
	$mes = $dato[1];
	$dia = $dato[2];



	$sql="UPDATE compras set num_factura='$f',
								num_boleta='$b1',
								anulado='$a',
								bajas='$b2',
								dia='$dia',
								mes='$mes',
								year='$year',
								ruc='$r1',
								r_social='$r2',
								monto='$m'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>