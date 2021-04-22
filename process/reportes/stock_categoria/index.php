<?php
	include 'plantilla.php';
	require 'conexion.php';
	$codigoCat = $_GET['codigo'];
	$query = "SELECT `producto`.*, `producto`.`Stock`
	FROM `producto`
	WHERE `producto`.`CodigoCat` = '$codigoCat' ORDER BY `CodigoProd` ASC";
	$resultado = $mysqli->query($query);
	 
	$taza_dia_query = "SELECT `taza_cambio`.*, `taza_cambio`.`id` FROM `taza_cambio` WHERE `taza_cambio`.`id` = '1';";
	$res = $mysqli->query($taza_dia_query); 
       
	while($fila = $res->fetch_array()){
	$compra_dolar=$fila['taza'];        
	}

	$globalTasaCambio_dolar = number_format($compra_dolar, 2);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(5,6,'N',1,0,'C',1);
	$pdf->Cell(15,6,'CodigoP',1,0,'C',1);
	$pdf->Cell(57,6,'Articulo',1,0,'C',1);
	$pdf->Cell(35,6,'Modelo',1,0,'C',1);
	$pdf->Cell(30,6,'Marca',1,0,'C',1);
	$pdf->Cell(20,6,'Precio ',1,0,'C',1);
	$pdf->Cell(20,6,'Categoria',1,1,'C',1);
	
	
	
	
	
	$pdf->SetFont('Arial','',8);
	
	 $i = 0;
	
	while($row = $resultado->fetch_array())
	{
		$precio_dolar = $row['Precio'];
		$precio_sol = number_format( $row['Precio'] * $globalTasaCambio_dolar, 2);
		$i = $i + 1;
		$pdf->Cell(5,8,$i,1,0,'C',1);
		$pdf->Cell(15,8,utf8_decode($row['CodigoProd']),1,0,'C');
		$pdf->Cell(57,8,$row['NombreProd'],1,0,'L');
		$pdf->Cell(35,8,$row['Modelo'],1,0,'L');
		$pdf->Cell(30,8,$row['Marca'],1,0,'L');
		$y = $pdf->GetY();
		$x = $pdf->GetX();
		$width = 20;
		$pdf->Multicell($width,4,utf8_decode("$ ".$precio_dolar)."\n".utf8_decode("S/ ".$precio_sol),1,'C');
		$pdf->SetXY($x + $width, $y);
		$pdf->Cell(20,8,utf8_decode($row['CodigoCat']),1,1,'C');
		
		
		
	}
	$total= $i++;
	$pdf->SetFont('Arial','B',15);
	   $pdf->Ln(10);
	   $pdf->Cell(190,6,'Total de productos en almacen = '.$total.'',1,0,'C',1);
	   $pdf->SetFont('Arial','B',14);
	   $pdf->Ln(10);
	   $pdf->Cell(190,6,'Taza de cambio = S/ '.$globalTasaCambio_dolar.'',1,0,'C',1);
	    
	
	   
	
	
	
	$pdf->Output();
?>
