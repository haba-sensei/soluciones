<?php
			
			$query = "SELECT * from perfil";

			$resultado = $mysqli->query($query);
			
			//$row_cnt = mysqli_num_rows($query);
			//Result set has %d rows.\n", $row_cnt
			
			$pdf = new  PDF_Invoice('P', 'mm', 'A4' );
			$pdf->AliasNbPages();
			$pdf->AddPage('P', 'Letter');
			
			$fecha_actual = date('d-m-Y');
			
			while($row = $resultado->fetch_array())
			{
			
			
			$pdf->Image('../../assets/img/logo2.png',8,8,30,30);
			$pdf->addSociete( utf8_decode($row['nombre_empresa']),
			utf8_decode("Dirección: ").utf8_decode($row['direccion'])."\n".
			"Web: ".$row['web']."\n".
			"Telefonos: ".utf8_decode($row['telefono'])."\n".
			"Cuentas Bancarias: ".utf8_decode($row['banco1'])." / ".utf8_decode($row['banco2'])
			);
			 
			 
				switch ($estado) {
					case 3:
						$estatus_operacion = "Aprobado";
						break;
					
					case 0:
						$estatus_operacion = "En Revision";
						break;
				}

				$tipo_operacion = "NOTA ";
				
				$pdf->fact_dev(utf8_decode( "RUC "), $row['ID'] );
				$pdf->fact_dev2(utf8_decode("COTIZACION ELECTRONICA") );
				$pdf->fact_dev2_1(utf8_decode($num_cotiza));
				$pdf->fact_dev3(utf8_decode( "SEÑOR(ES): "), $NombreEmpresa );
				$cantidad_num =  strlen($ID_cliente_2);
							
				switch ($cantidad_num) {
					case 8:
						$tipo_doc = "DNI :";
					break;
					case 11:
						$tipo_doc = "RUC :";
					break;
 
				}

				$pdf->fact_dev4(utf8_decode($tipo_doc), $ID_cliente_2 );
				$pdf->fact_dev5(utf8_decode( "DIRECCIÓN: "), $Direccion);
				$pdf->fact_dev6(utf8_decode( "DIRECCIÓN ENTREGA: "), "- - -");
				$pdf->fact_dev7(utf8_decode( "Emisión: "), $fecha_cotizacion);
				$pdf->fact_dev8(utf8_decode( "Forma de Pago: "), "En Revision");
				$pdf->fact_dev9(utf8_decode( "Medio de Pago: "), "Efectivo-Visa");
 
				$pdf->fact_dev10(utf8_decode( "Forma de Entrega: "), "En Revision");
				$pdf->fact_dev11(utf8_decode( "Estatus:"), $estatus_operacion);
				$pdf->fact_dev13(utf8_decode( "Vendedor: "), "Soluciones");
				
				
			}
			
			$pdf->SetFont('Arial','B',9);
			//$pdf->Cell(100,7,utf8_decode( "Me es grato dirigirnos a usted al fin de alcanzarle la presente propuesta de cotizaciòn"),0,1,'L',0);
			
			$pdf->SetFillColor(212,72,72);
			$pdf->SetFont('Arial','B',9);
			$cols=array( "Item"    => 11,
							"Cant."   => 11,
							"Codigo"   => 16,
							"Detalles" => 108,
							"Precio Unit"   => 25,
							"Total"     => 25);
			$pdf->addCols( $cols);
			$cols=array( "Item"    => "C",
							"Cant."   => "C",
							"Codigo"   => "C",
							"Detalles" => "L",
							"Precio Unit"    => "C",
							"Total"     => "C");
			$pdf->addLineFormat($cols);
			$pdf->addLineFormat($cols);
		
			$y    = 85;
			$pdf->SetFont('Arial','B',8);
			$i = 1;
			$subtotal=0;
			$total=0; 

			$num_cotiza = $_GET['num_cotiza']; 
			$ordenU =ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `producto`.`CodigoProd`, `detalle_cotizacion_online`.`id_cotizacion`, `producto`.`NombreProd`, `producto`.`Modelo`, `producto`.`Marca`, `producto`.`Precio` FROM `detalle_cotizacion_online` , `producto` WHERE `producto`.`CodigoProd` = `detalle_cotizacion_online`.`CodigoProd` AND `detalle_cotizacion_online`.`id_cotizacion` = '$num_cotiza'");
				
			while($ordenP=mysqli_fetch_array($ordenU)){
				$product_code = $ordenP['CodigoProd'];
				$product_name = $ordenP['NombreProd'];
				$product_modelo = $ordenP['Modelo'];
				$product_marca = $ordenP['Marca'];
				$product_price = $ordenP['Precio'];
				$product_cantidad = $ordenP['Cantidad'];
				$product_subtotal = $ordenP['SubTotal'];

				$pdf->SetFillColor(255,255,255);

				$product_price_f = number_format($product_price * $globalTasaCambio_dolar, 2) ;
				$product_subtotal_f = number_format($product_subtotal * $globalTasaCambio_dolar, 2) ;
				
				$line = array( 
							"Item"    => $i,
							"Cant."     => $product_cantidad,
							"Codigo"     => $product_code,
							"Detalles"  => $product_name." - ".$product_modelo." - ".$product_marca,
							"Precio Unit"      => $product_price_f,
							"Total"          => $product_subtotal_f );
					$size = $pdf->addLine( $y, $line );
					$y   += $size + 2;
					
				
				
				
					$i = $i + 1;
			
				
			}	 
					$monto_soles = $GranTotal * $globalTasaCambio_dolar;

					$monto_final = $monto_soles - $descuento;

			 
				


				$pdf->SetFont('Arial','B',12);
				$num_letra = strtoupper(numtoletras($monto_final));
				
				$pdf->fact_dev12(utf8_decode("Son: "), $num_letra );	
				$pdf->Code39(10,210, $num_cotiza);
				
				$pdf->SetY(220);
				$pdf->SetX(18);
				
				$pdf->Cell(12,8,"Codigo de Barra",0,0,'C',0);	
				
				$pdf->addCadreEurosFrancs2();
				$pdf->addCadreEurosFrancs3();
				$pdf->addCadreEurosFrancs4();
				 
				 	
		
				
 
