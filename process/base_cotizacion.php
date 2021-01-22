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
			
			
			$pdf->Image('../assets/img/logo2.png',8,8,30,30);
			$pdf->addSociete( utf8_decode($row['nombre_empresa']),
				utf8_decode("Dirección: ").utf8_decode($row['direccion'])."\n".
							"Web: ".$row['web']."\n".
							"Telefonos: ".utf8_decode($row['telefono'])."\n".
							"Cuentas Bancarias: ".utf8_decode($row['banco1'])." / ".utf8_decode($row['banco2'])
							);
				
							switch ($estado) {
								case 0:
									$tipo_operacion = "COTIZACION";
									$medio_pago = "Efectivo-Visa";
									$estatus_operacion = "En Revision";
									break;
								case 1:
									$tipo_operacion = "COMPRA";
									$medio_pago = $F_pago;
									$estatus_operacion = "En Revision";
									break;
								 
							}
							
				$pdf->fact_dev(utf8_decode( "RUC "), $row['ID'] );
				$pdf->fact_dev2(utf8_decode( $tipo_operacion." ELECTRONICA ") );
				$pdf->fact_dev2_1(utf8_decode($cod)  );
				$pdf->fact_dev3(utf8_decode( "Ruc / Dni: "), $ID );
				$pdf->fact_dev4(utf8_decode( "Razón Social: "), $nombEmpresa );
				$pdf->fact_dev5(utf8_decode( "Dir-Fiscal: "), $dir);
				$pdf->fact_dev6(utf8_decode( "Emisión: "), $fecha_actual);
				$pdf->fact_dev6_5(utf8_decode("|  Despacho: "), $F_entrega);
				$pdf->fact_dev6_6(utf8_decode("|  Entrega: "), $F_despacho." - ".$H_entrega);
				$pdf->fact_dev7(utf8_decode( "Medio de Pago: "), $medio_pago);
				$pdf->fact_dev8(utf8_decode( "Estatus Cotizado:"), $estatus_operacion);
				$pdf->fact_dev9(utf8_decode( "Validez: "), "5 Dias Habiles");
				$pdf->fact_dev10(utf8_decode( "Vendedor: "), "Soluciones");
				
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
		
			$y    = 73;
			$pdf->SetFont('Arial','',8);
			$i = 1;
			$subtotal=0;
			$total=0;
			$sql=ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.*, `producto`.`nro_cot` FROM `producto`	, `perfil`;");
			$_cotizacion_ = ejecutarSQL::consultar("select * from detalle_cotizacion_online where id_cotizacion='" . $cod . "'");
		
			while($codProductosP=mysqli_fetch_array($_cotizacion_)){
				$product_code = $codProductosP['CodigoProd'];	
				$product_qty = $codProductosP['Cantidad'];				
				$product_price = $codProductosP['SubTotal'];	
							
					$ordenU=  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.*, `producto`.`nro_cot`, `producto`.`CodigoProd`
					FROM `producto`
						, `perfil`
					WHERE `producto`.`CodigoProd` = '$product_code';");
								
					while($ordenP=mysqli_fetch_array($ordenU)){
						$product_name = $ordenP['NombreProd'];
						$modelo_producto = $ordenP['Modelo'];
						$marca_producto = $ordenP['Marca'];
						$product_ganancia=$ordenP['ganancia'];
						$product_medio=$ordenP['medio'];
						$igv_final=$ordenP['impuesto'];
						$product_price_total=($product_price);

						$subtotal = ($product_price_total * $product_qty) / 1.18;
						$subtotal_2 = number_format($product_price_total * $product_qty, 2);
						$total = $subtotal + $total;
						
						$igv_format= ($total * 1.18);
						$igv = number_format($igv_format - $total, 2);
						$total_final = $total + $igv;
						}
						
						
						
						
			$pdf->SetFillColor(255,255,255);
			//." ".$modelo_producto."  ".$marca_producto." "."( ".$serial_producto." )"
			$line = array( 
						"Item"    => $i,
						"Cant."     => $product_qty,
						"Codigo"     => $product_code,
						"Detalles"  => $product_name." - ".$modelo_producto." - ".$marca_producto,
						"Precio Unit"      => $product_price_total,
						"Total"          => $subtotal_2 );
				$size = $pdf->addLine( $y, $line );
				$y   += $size + 2;
				
			
			
			
				$i = $i + 1;
			
				
				}				
			
				switch ($F_entrega) {
					case 'Lima':
						$total_delivery = number_format(15, 2);
					break;
					case 'Provincia':
						$total_delivery = number_format(35, 2);
					break;
					case 'Tienda':
						$total_delivery = number_format(0, 2);
					break;
					default:
						$total_delivery = number_format(0, 2);
					break;
				}

				$total_final = ($total_final + $total_delivery);
			
				$pdf->SetFont('Arial','B',12);
				$num_letra = strtoupper(numtoletras($total_final));
				
				$pdf->fact_dev12(utf8_decode("Son: "), $num_letra );	
				$pdf->Code39(10,210, $cod);
				
				$pdf->SetY(220);
				$pdf->SetX(18);
				
				$pdf->Cell(12,8,"Codigo de Barra",0,0,'C',0);	
				
				$pdf->addCadreEurosFrancs2();
				$pdf->addCadreEurosFrancs3();
				$pdf->addCadreEurosFrancs4();
				
				unset($_SESSION["products"]);
				 	
		
				
 
