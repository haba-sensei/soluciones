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
			$aSubmitVal = $_POST['operacion'];
			
			
				switch ($aSubmitVal) {
					case 'cotizacion':
						$Moneda_pago = "soles";
						$tipo_operacion = "COTIZACION";
						$medio_pago = "Al Contado";
						$estatus_operacion = "En Revision";
						$M_pago = "Efectivo-Visa";
						$F_entrega = "Tienda";
						$distritos_ = "-";
						$costo_adicional = 0.00;
						$direccion_envio = "-";
						$referencia = "-";
						break;
					case 'compra':
						$Moneda_pago = $_POST['Moneda_pago'];
						$M_pago = $_POST['M_pago'];
						$tipo_operacion = "COMPRA";
						$medio_pago = $F_pago;
						$estatus_operacion = "En Revision";
						switch ($Moneda_pago) {
							case 'soles':
								$costo_adicional = $_POST['costo_adicional'];
								break;
							
								case 'dolares':
								$costo_adicional = number_format($_POST['costo_adicional'] / $globalTasaCambio_dolar, 2);
									break;
						}
						
						break;
						
				}
							$hora_actual_ =  date('d/m/Y h:i A');
							$fecha_actual;
				$pdf->fact_dev(utf8_decode( "RUC "), $row['ID'] );
				$pdf->fact_dev2(utf8_decode( $tipo_operacion." ELECTRONICA ") );
				$pdf->fact_dev2_1(utf8_decode($cod));
				$pdf->fact_dev3(utf8_decode( "SEÑOR(ES): "), $nombEmpresa );
				$cantidad_num =  strlen($ID);
							
				switch ($cantidad_num) {
					case 8:
						$tipo_doc = "DNI :";
					break;
					case 11:
						$tipo_doc = "RUC :";
					break;
 
				}

				$pdf->fact_dev4(utf8_decode($tipo_doc), $ID );
				$pdf->fact_dev5(utf8_decode( "DIRECCIÓN: "), $dir);
				$pdf->fact_dev6(utf8_decode( "DIRECCIÓN ENTREGA: "), $distritos_." - ".$direccion_envio);
				// $pdf->fact_dev6_5(utf8_decode("|  Despacho: "), $F_entrega);
				// $pdf->fact_dev6_6(utf8_decode("|  Entrega: "), $F_despacho." - ".$H_entrega);
				$pdf->fact_dev7(utf8_decode( "Emisión: "), $hora_actual_);
				$pdf->fact_dev8(utf8_decode( "Forma de Pago: "), $medio_pago);
				$pdf->fact_dev9(utf8_decode( "Medio de Pago: "), $M_pago);
				$pdf->fact_dev10(utf8_decode( "Forma de Entrega: "), $F_entrega);
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
						$product_price_unitario = $ordenP['Precio'];
						$marca_producto = $ordenP['Marca'];
						$product_ganancia=$ordenP['ganancia'];
						$product_medio=$ordenP['medio'];
						$igv_final=$ordenP['impuesto'];
						
						

						switch ($Moneda_pago) {
							case 'soles':
								$product_soles_ = $product_price_unitario * $globalTasaCambio_dolar; 
								break;
							
								case 'dolares':
								$product_soles_ = number_format($product_price_unitario, 2); 
									break;
						}


						$total_indi =  str_replace(',', '',  $product_soles_ );

						$subtotal_f = $total_indi * $product_qty;
						$subtotal = number_format($subtotal_f, 3);
   						$total = $subtotal_f + $total ; 
						 
						} 

						switch ($aSubmitVal) {
							case 'cotizacion': 
								$base_tarjeta_precio = $total;
								$fin_total_base = $total;
								$fin_total_base_f = $fin_total_base;
							break;

							case 'compra': 

								switch ($F_pago) {
									case 'Al Contado':
										$a_cuenta_base  = 0.00;
										break;
									
									case 'A Cuenta':
										// $calc_cuenta_base =  str_replace(',', '',  $total);
										// $a_cuenta_f_base = ($calc_cuenta_base * 0.40);
										$a_cuenta_base = $total * 0.40 ;
										break;
								}

								$base_tarjeta_precio = $total;
								$fin_total_base =  number_format($total + $costo_adicional - $a_cuenta_base, 2);
											
												
								if($M_pago == "Tarjeta"){

									$total_tarjeta = $base_tarjeta_precio * 0.05;
									$total_formato_tarjeta =  str_replace(',', '',  $fin_total_base);


									$fin_total_base_f = $total_formato_tarjeta + $total_tarjeta;
								}else {

									$fin_total_base_f = $fin_total_base;
									
								}

								break;
							
						}
						// 
						
						// $fin_total = number_format($fin_total_base, 2);
						
			$pdf->SetFillColor(255,255,255);
			//." ".$modelo_producto."  ".$marca_producto." "."( ".$serial_producto." )"
			$line = array( 
						"Item"    => $i,
						"Cant."     => $product_qty,
						"Codigo"     => $product_code,
						"Detalles"  => $product_name." - ".$modelo_producto." - ".$marca_producto,
						"Precio Unit"      => $product_soles_,
						"Total"          => $subtotal  );
				$size = $pdf->addLine( $y, $line );
				$y   += $size + 2;
				
			
			
			
				$i = $i + 1;
			
				
				}				
				$calc_cuenta_bas =  str_replace(',', '',  $fin_total_base_f);
				$total_letras_h = round($calc_cuenta_bas, 2);
			
				
				
				$pdf->SetFont('Arial','B',12);
				$num_letra = strtoupper(numtoletras( $total_letras_h ));
				
				$pdf->fact_dev12(utf8_decode("Son: "), $num_letra );	
				$pdf->Code39(10,210, $cod);
				
				$pdf->SetY(220);
				$pdf->SetX(18);
				
				$pdf->Cell(12,8,"Codigo de Barra",0,0,'C',0);	
				
				$pdf->addCadreEurosFrancs2();
				$pdf->addCadreEurosFrancs3();
				$pdf->addCadreEurosFrancs4();
				
				 unset($_SESSION["products"]);
				 	
		
				
 
