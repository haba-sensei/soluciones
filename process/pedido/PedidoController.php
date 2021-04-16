<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';
session_start();
        $NumPedido =$_POST['num_cotiza'];
        $type=$_POST['type'];   
        
		$data_cliente = ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`, `cotizacion_online`.`ID`, `clientes`.`NombreEmpresa`, `clientes`.`Telefono`, `clientes`.`Correo` FROM `cotizacion_online` LEFT JOIN `clientes` ON `cotizacion_online`.`ID` = `clientes`.`ID` WHERE ((`cotizacion_online`.`id_cotizacion` ='$NumPedido'))");
        while($fila=mysqli_fetch_array($data_cliente)){
            echo '  
                <div class="col-md-12" style="background:#0d74b3!important;">
            
                    <label class="col-md-2">ORDEN</label>
                    <label class="col-md-3">NOMBRE</label>
                    <label class="col-md-2">RUC/DNI</label>
                    <label class="col-md-2">TELEFONO</label>
                    <label class="col-md-2">CORREO</label>
            
                </div>
                <div  class="col-md-12" >
            
                    <label class="col-md-2">'.$fila['id_cotizacion'].'</label>
                    <label class="col-md-3">'.$fila['NombreEmpresa'].'</label>
                    <label class="col-md-2">'.$fila['ID'].'</label>
                    <label class="col-md-2">'.$fila['Telefono'].'</label>
                    <label class="col-md-2">'.$fila['Correo'].'</label>
            
                </div>
        ';}  
		          
		 $deta_productos = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion` FROM `detalle_cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido'");
		  
		 $cons_precio_base= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion` FROM `cotizacion_online` WHERE `cotizacion_online`.`id_cotizacion` = '$NumPedido'");
		 
         while($precio_base=mysqli_fetch_array($cons_precio_base)){ 
             
            $totalGeneral_sin_formato = $precio_base['GranTotal']; 
            $descuento = $precio_base['descuento']; 
            $estado = $precio_base['Estado']; 
            $fecha_cotizacion = $precio_base['fecha_cotizacion']; 
        }
		
		?>
        <style>
            a.button {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;

            text-decoration: none;
            color: initial;
            }
            a:hover, a:focus, .breadcrumb > li a:hover, .breadcrumb > li a:focus {
                color: white;
            }
            .agregar_cant {
                position: relative;
                bottom: -25px;
                padding: 2px 11px 2px 13px;
            }
            .borde_lateral {
                border-left: solid 2px rgba(255, 255, 255, .15)!important;
            }

            .fondo_vacio {
                background: #1d1e1f;
            }
        </style>
	<div class="col-md-12" style=" margin-top: 18px; padding-left: 0; padding-right: 0;  ">
	    <div class="panel panel-default">
	        <div class="panel-heading " style="background: #0d74b3!important;">
	            <h3 class="panel-title"> 
                <i class="fas fa-dollar-sign">&nbsp;&nbsp;Taza de Cambio</i> 
                
                <span><?php echo "S/ ".number_format($globalTasaCambio_dolar, 2);?></span> 
                <span style="float: right;" id="caja_loading"></span>
	        </div>

	        <div class="panel-body">

	            <table class="table table-bordered ">
	                <thead>
	                    <tr>
	                        <th>Cantidad </th>
	                        <th>Articulos </th>
	                        <th>P-Unitario</th>
	                        <th>P-Total Soles</th>
	                        <th>P-Total Dolares</th>
	                        <th>Opciones</th>
	                    </tr>
	                </thead>
	                <tbody>

	                    <?php  
                    
                    $conFact= ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`, `producto`.`CodigoProd`, `producto`.*, `cotizacion_online`.`id_cotizacion` FROM `detalle_cotizacion_online`, `producto`, `cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' AND `producto`.`CodigoProd` = `detalle_cotizacion_online`.`CodigoProd` AND `cotizacion_online`.`id_cotizacion` = `detalle_cotizacion_online`.`id_cotizacion`;");
                    while ($fila=mysqli_fetch_array($conFact)){
                
                    $total_dolares = number_format($fila['Precio'] * $fila['Cantidad'], 2);
                    $total_indi =  str_replace(',', '',  $total_dolares );
                    $total_soles = number_format($globalTasaCambio_dolar * $total_indi ,2);
                    $total_dolares_f = number_format($globalTasaCambio_dolar * $fila['Precio'] ,2);
                    $precio_unit_soles = number_format($total_dolares_f , 2);
                    $precio_unit_dolares = number_format($fila['Precio'], 2);
                    // href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"
                    echo '
                          <tr>
                          <td class="ajut_centrado_orden">
                          '.$fila['Cantidad'].'
                          ';  
                          
                          switch ($_SESSION['CodigoArea']) { 

                            case 1: 
                                echo '<button class="btn btn-block btn-new agregar_cant" onclick="modalCantidadProd(&quot;'.$NumPedido.'&quot; , &quot;'.$fila['CodigoProd'].'&quot;)" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                            break;
                            case 2:  
                                 echo '<button class="btn btn-block btn-new agregar_cant"> <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                            break;
                            break;
                            case 3: 
                               echo '<button class="btn btn-block btn-new agregar_cant"> <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                            break;
                            case 4: 
                                echo '<button class="btn btn-block btn-new agregar_cant" onclick="modalCantidadProd(&quot;'.$NumPedido.'&quot; , &quot;'.$fila['CodigoProd'].'&quot;)" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                            break;
                            case 5: 
                                echo '<button class="btn btn-block btn-new agregar_cant"> <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                            break;
                            case 6: 
                                echo '<button class="btn btn-block btn-new agregar_cant"> <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                            break;
                        }

                        echo '
                          
                          </td>
                          <td>
                          <span class="">'.$fila['NombreProd'].'</span><br>
                          <span class="">(Modelo) = '.$fila['Modelo'].'</span><br>
                          <span class="">(Marca) = '.$fila['Marca'].'</span><br>
                          <span class="">(Sku) = '.$fila['CodigoProd'].'</span>
                          </td>
                          <td class="ajut_centrado_orden">
                          $ '.$precio_unit_dolares.' <br>
                          S/ '.$precio_unit_soles.'
                          
                          </td>
                          <td class="ajut_centrado_orden">S/ '.$total_soles.'</td> 
                          <td class="ajut_centrado_orden">$ '.$total_dolares.'</td>
                          <td class="ajut_centrado_orden">
                          <a href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'" target="_blank" class="btn btn-new btn-block "><i class="fas fa-eye fa-fw"></i> VER ARTICULO</a> 
                        ';
                        switch ($_SESSION['CodigoArea']) { 

                            case 1: 
                                echo '<button class="btn btn-elim btn-block " onclick="elimProd(&quot;'.$fila['id'].' &quot; , &quot;'.$NumPedido.' &quot;)"><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                            break;
                            case 2:  
                                 echo '<button class="btn btn-elim btn-block " ><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                            break;
                            break;
                            case 3: 
                               echo '<button class="btn btn-elim btn-block " ><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                            break;
                            case 4: 
                                echo '<button class="btn btn-elim btn-block " onclick="elimProd(&quot;'.$fila['id'].' &quot; , &quot;'.$NumPedido.' &quot;)"><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                            break;
                            case 5: 
                                echo '<button class="btn btn-elim btn-block " ><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                            break;
                            case 6: 
                                echo '<button class="btn btn-elim btn-block " ><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                            break;
                        }
                        echo '
                         
                          
                          </td> 
                          </tr>
                        </tbody>
                    '; 
            
            
            
                    }  
           
            
            $detalles_finales = ejecutarSQL::consultar("SELECT `detalle_compra_online`.*, `detalle_compra_online`.`id_cotizacion`
            FROM `detalle_compra_online`
            WHERE `detalle_compra_online`.`id_cotizacion` = '$NumPedido'");
               while ($deta_final=mysqli_fetch_array($detalles_finales)){ 

                    $costo_adicional = $deta_final['costo_adicional']; 
                    $tipo_moneda = $deta_final['moneda'];
                    $tipo_pago = $deta_final['forma_pago'];
                    $medio_pago = $deta_final['medio_pago'];
                    $forma_de_entrega = $deta_final['forma_entrega'];

                    

                 switch ($tipo_moneda) {
                    case 'dolares':
                        $totalGeneral = $totalGeneral_sin_formato;
                        $simbolo = "$ ";
                        $costo_delivery_f =  $costo_adicional / $globalTasaCambio_dolar;
                        $format_delivery =  str_replace(',', '',  $costo_delivery_f); 
                        $costo_delivery = number_format($format_delivery, 2);
                        $descuento_format = $descuento;
                        
                        break;
                    case 'soles':
                        $totalGeneral = $totalGeneral_sin_formato * $globalTasaCambio_dolar;
                        $simbolo = "S/ ";
                        $costo_delivery_f =  $costo_adicional;
                        $format_delivery =  str_replace(',', '',  $costo_delivery_f); 
                        $costo_delivery = number_format($format_delivery, 2);
                        $descuento_format = $descuento;
                        
                        break; 
                     
                 } 
                 
                $monto_igv_format = number_format($totalGeneral * 1.18 - $totalGeneral, 2);
                $monto_igv = $totalGeneral * 1.18 - $totalGeneral;
                
                $subtotal = number_format($totalGeneral - $monto_igv, 2);
                
                 if($tipo_pago == "A Cuenta"){
                    $total_a_cuenta = number_format($totalGeneral * 0.40, 2);
                 }else {
                    $total_a_cuenta = 0;
                 }

                 if($medio_pago == "Tarjeta"){
                    $total_tarjeta = ($totalGeneral + $costo_delivery) * 0.05;
                 }else {
                    $total_tarjeta = 0;
                 }

                 
                                  
                $total_a_facturar = $totalGeneral - $descuento_format + $costo_delivery + $total_tarjeta;
                $total_a_facturar_format = number_format($totalGeneral + $costo_delivery, 2);  
                
                $total_final_format_without_comma =  str_replace(',', '',  $total_a_facturar);
                
                $total_final_tarjeta_format_without_comma =  str_replace(',', '',  $total_tarjeta);
                 
                $total_a_pagar_general =  number_format($total_final_format_without_comma, 2);
                $total_a_pagar_general_format_without_comma =  str_replace(',', '',   $total_a_pagar_general);
                
                if($tipo_pago == "A Cuenta"){
                    $total_a_cuenta = number_format($total_a_pagar_general_format_without_comma * 0.40, 2);
                    $total_a_cuenta_format_without_comma =  str_replace(',', '',  $total_a_cuenta);
                }else {
                    $total_a_cuenta = 0;
                    $total_a_cuenta_format_without_comma = 0;
                 }
                $total_a_pagar_a_cuenta_format =  number_format($total_a_pagar_general_format_without_comma - $total_a_cuenta_format_without_comma, 2);
                $total_a_pagar_general_format =  number_format($total_a_pagar_general_format_without_comma , 2);
               }
			 
		echo '
        <tfoot>

                <tr class="borde_lateral">
                <td colspan="4" class="border_hidden fondo_vacio"></td>
                 
                <td>SUB-TOTAL</td>
                <td> '.$simbolo.$subtotal.'</td>
                </tr>

                <tr class="borde_lateral">
                <td colspan="4" class="border_hidden fondo_vacio"></td>
                 
                <td class="borde_lateral">IGV 18%</td>
                <td> '.$simbolo.$monto_igv_format.'</td>
                </tr>

                <tr class="borde_lateral">
                <td colspan="4" class="border_hidden fondo_vacio"></td> 
                <td>DESCUENTO</td>
                <td>'.$simbolo.$descuento_format.'</td>
                </tr> 
                ';
                if($forma_de_entrega == "Lima" || $forma_de_entrega == "Provincia"){
                    echo '
                    <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                         
                        <td>DELIVERY</td>
                        <td>'.$simbolo.$costo_delivery.'</td>
                        </tr>
                    
                    ';
                   }else {
                       echo '';
                   }
                echo'
                <tr class="borde_lateral">
                <td colspan="4" class="border_hidden fondo_vacio"></td> 
                <td>TOTAL A FACTURAR</td>
                <td>'.$simbolo.$total_a_facturar_format.'</td>
                </tr> 
                ';  
                if( $medio_pago == "Tarjeta"){
                    echo ' <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                     
                    <td>TARJETA 5%</td>
                    <td>'.$simbolo.$total_tarjeta.'</td>
                    </tr>';
                }else {
                    echo '';
                }
                if( $tipo_pago == "A Cuenta"){
                    
                    echo '
                    <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                     
                    <td>TOTAL A PAGAR</td>
                    <td>'.$simbolo.$total_a_pagar_general.'</td>
                    </tr>
                    
                    <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                     
                    <td>A CUENTA 40%</td>
                    <td>'.$simbolo.$total_a_cuenta.'</td>
                    </tr>
                    
                    <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                     
                    <td>SALDO A PAGAR</td>
                    <td>'.$simbolo.$total_a_pagar_a_cuenta_format.'</td>
                    </tr>
                   ';
                }else {
                    echo ' 
                    <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                     
                    <td>TOTAL A PAGAR</td>
                    <td>'.$simbolo.$total_a_pagar_general_format.'</td>
                    </tr>
                    
                    <tr>
                    '; 
                }  
               
                    if($estado == 2){
                        echo '
                        <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio">
                     Fecha de Aprobado:  '.$fecha_cotizacion.'
                    </td>
                     
                    <td>ESTADO</td>
                    <td>APROBADO</td>
                    </tr>
                    
                    <tr>
                        
                        ';
                    }else{

                        
                    }
                    switch ($_SESSION['CodigoArea']) { 

                        case 1: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                            <button class="btn btn-new " onclick="modalDescuento(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                            <button class="btn btn-new " onclick="modalFormaPago(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-credit-card fa-fw"></i> FORMA DE PAGO</button>
                            <button class="btn btn-new " onclick="modalMedioPago(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-handshake fa-fw"></i> MEDIO DE PAGO</button>
                            <button class="btn btn-new " onclick="modalDelivery(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-truck fa-fw"></i> DELIVERY </button>
                            <button class="btn btn-new " onclick="modalMoneda(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-money-bill-alt fa-fw"></i> MONEDA </button>

                            </td>

                            <td  colspan="2">
                            <button class="btn btn-new btn-block " onclick="approved(&quot;'.$NumPedido.'&quot; , &quot;'.$total_a_cuenta.'&quot; , &quot;'.$total_tarjeta.'&quot;)"><i class="fas fa-check fa-fw"></i> APROBAR </button>
                            <a class="btn btn-new btn-block " target="_blank" href="../process/pedido/pedido_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                            </td>';
                        break;
                        case 2:  
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                            <button class="btn btn-new "  ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                            <button class="btn btn-new "  ><i class="fas fa-credit-card fa-fw"></i> FORMA DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-handshake fa-fw"></i> MEDIO DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-truck fa-fw"></i> DELIVERY </button>
                            <button class="btn btn-new "  ><i class="fas fa-money-bill-alt fa-fw"></i> MONEDA </button>

                            </td>

                            <td  colspan="2">
                            <button class="btn btn-new btn-block "  ><i class="fas fa-check fa-fw"></i> APROBAR </button>
                            <a class="btn btn-new btn-block "  href="javascript:"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                            </td>';
                        break;
                        break;
                        case 3: 
                           echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                            <button class="btn btn-new "  ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                            <button class="btn btn-new "  ><i class="fas fa-credit-card fa-fw"></i> FORMA DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-handshake fa-fw"></i> MEDIO DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-truck fa-fw"></i> DELIVERY </button>
                            <button class="btn btn-new "  ><i class="fas fa-money-bill-alt fa-fw"></i> MONEDA </button>

                            </td>

                            <td  colspan="2">
                            <button class="btn btn-new btn-block "  ><i class="fas fa-check fa-fw"></i> APROBAR </button>
                            <a class="btn btn-new btn-block "  href="javascript:"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                            </td>';
                        break;
                        case 4: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                            <button class="btn btn-new " onclick="modalDescuento(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                            <button class="btn btn-new " onclick="modalFormaPago(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-credit-card fa-fw"></i> FORMA DE PAGO</button>
                            <button class="btn btn-new " onclick="modalMedioPago(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-handshake fa-fw"></i> MEDIO DE PAGO</button>
                            <button class="btn btn-new " onclick="modalDelivery(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-truck fa-fw"></i> DELIVERY </button>
                            <button class="btn btn-new " onclick="modalMoneda(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-money-bill-alt fa-fw"></i> MONEDA </button>

                            </td>

                            <td  colspan="2">
                            <button class="btn btn-new btn-block " onclick="approved(&quot;'.$NumPedido.'&quot; , &quot;'.$total_a_cuenta.'&quot; , &quot;'.$total_tarjeta.'&quot;)"><i class="fas fa-check fa-fw"></i> APROBAR </button>
                            <a class="btn btn-new btn-block " target="_blank" href="../process/pedido/pedido_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                            </td>';
                        break;
                        case 5: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                            <button class="btn btn-new "  ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                            <button class="btn btn-new "  ><i class="fas fa-credit-card fa-fw"></i> FORMA DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-handshake fa-fw"></i> MEDIO DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-truck fa-fw"></i> DELIVERY </button>
                            <button class="btn btn-new "  ><i class="fas fa-money-bill-alt fa-fw"></i> MONEDA </button>

                            </td>

                            <td  colspan="2">
                            <button class="btn btn-new btn-block "  ><i class="fas fa-check fa-fw"></i> APROBAR </button>
                            <a class="btn btn-new btn-block "  href="javascript:"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                            </td>';
                        break;
                        case 6: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                            <button class="btn btn-new "  ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                            <button class="btn btn-new "  ><i class="fas fa-credit-card fa-fw"></i> FORMA DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-handshake fa-fw"></i> MEDIO DE PAGO</button>
                            <button class="btn btn-new "  ><i class="fas fa-truck fa-fw"></i> DELIVERY </button>
                            <button class="btn btn-new "  ><i class="fas fa-money-bill-alt fa-fw"></i> MONEDA </button>

                            </td>

                            <td  colspan="2">
                            <button class="btn btn-new btn-block "  ><i class="fas fa-check fa-fw"></i> APROBAR </button>
                            <a class="btn btn-new btn-block "  href="javascript:"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                            </td>';
                        break;
                    }
                    echo '  
                    
                    
                    </tr>
                    
                </tfoot>
        
        </table>	
				
				   
				    
                </div> 
               <div align="center" class="col-md-12" style="padding-top: 10px;">
				
				
				';

                switch ($_SESSION['CodigoArea']) { 

                    case 1: 
                        echo '<button class="btn btn-block btn-new" data-toggle="modal" data-target="#modalNewProd" ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 2:   
                        echo ' <button class="btn btn-block btn-new"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    break;
                    case 3: 
                      echo ' <button class="btn btn-block btn-new"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 4: 
                      echo ' <button class="btn btn-block btn-new" data-toggle="modal" data-target="#modalNewProd" ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 5: 
                      echo ' <button class="btn btn-block btn-new"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 6: 
                        echo ' <button class="btn btn-block btn-new"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                }
                
                echo '  
                
                </div> 
                
				   </form>	';
				?>




	                    <!--
<button type="submit" class="btn btn-sm btn-info button-UPPE" value="res-update-pedido-'.$fila['id_cotizacion'].'"><i style="color:#FFF" class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;Imprimir Cotizacion</button>
-->