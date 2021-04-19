<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';
session_start();
        $NumPedido =$_POST['num_cotiza'];
        $type=$_POST['type'];   
        
		$data_cliente = ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`, `cotizacion_online`.`ID`, `clientes`.`NombreEmpresa`, `clientes`.`Telefono`, `clientes`.`Correo` FROM `cotizacion_online` LEFT JOIN `clientes` ON `cotizacion_online`.`ID` = `clientes`.`ID` WHERE ((`cotizacion_online`.`id_cotizacion` ='$NumPedido'))");
        while($fila=mysqli_fetch_array($data_cliente)){
            echo '  
                <div class="col-md-12" style="background:#ab2200!important">
            
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
	        <div class="panel-heading " style="background: #ab2200!important">
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
                    <!-- 643.356 -->
	                    <?php  
                    $sum = 0.00;
                    $conFact= ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`, `producto`.`CodigoProd`, `producto`.*, `cotizacion_online`.`id_cotizacion` FROM `detalle_cotizacion_online`, `producto`, `cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' AND `producto`.`CodigoProd` = `detalle_cotizacion_online`.`CodigoProd` AND `cotizacion_online`.`id_cotizacion` = `detalle_cotizacion_online`.`id_cotizacion`;");
                    while ($fila=mysqli_fetch_array($conFact)){
                        // * $fila['Cantidad'] * $globalTasaCambio_dolar
                    $total_dolares_unit =  $fila['Precio']  * $fila['Cantidad'] * $globalTasaCambio_dolar;
                    $total_soles =  $total_dolares_unit;

                   
                    $total_dolares = $fila['Precio'] * $fila['Cantidad'];
                    $sum+= $total_dolares;
                    $total_dolares_f = $fila['Precio'] * $globalTasaCambio_dolar;
                    $precio_unit_soles = $total_dolares_f ;
                    $precio_unit_dolares = $fila['Precio'];
                    echo '
                          <tr>
                          <td class="ajut_centrado_orden">
                          '.$fila['Cantidad'].'
                          '; 
                          switch ($_SESSION['CodigoArea']) { 
  
                              case 1: 
                                  echo ' <button class="btn btn-block btn-new agregar_cant" onclick="modalCantidadProd(&quot;'.$NumPedido.'&quot; , &quot;'.$fila['CodigoProd'].'&quot;)" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                              break;
                              case 2:  
                                   echo ' <button class="btn btn-block btn-new agregar_cant" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                              break;
                              break;
                              case 3: 
                                 echo ' <button class="btn btn-block btn-new agregar_cant" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                              break;
                              case 4: 
                                  echo ' <button class="btn btn-block btn-new agregar_cant" onclick="modalCantidadProd(&quot;'.$NumPedido.'&quot; , &quot;'.$fila['CodigoProd'].'&quot;)" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                              break;
                              case 5: 
                                  echo ' <button class="btn btn-block btn-new agregar_cant" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
                              break;
                              case 6: 
                                  echo ' <button class="btn btn-block btn-new agregar_cant" > <i class="fas fa-minus fa-fw"></i> Cantidad <i class="fas fa-plus fa-fw"></i></button>';
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
                                  echo ' <button class="btn btn-elim btn-block " onclick="elimProd(&quot;'.$fila['id'].' &quot; , &quot;'.$NumPedido.' &quot;)"><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                              break;
                              case 2:  
                                   echo '<button class="btn btn-elim btn-block " ><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                              break;
                              break;
                              case 3: 
                                 echo '<button class="btn btn-elim btn-block " ><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
                              break;
                              case 4: 
                                  echo ' <button class="btn btn-elim btn-block " onclick="elimProd(&quot;'.$fila['id'].' &quot; , &quot;'.$NumPedido.' &quot;)"><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> ';
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
                    // 643.38
               $general =  $totalGeneral_sin_formato * $globalTasaCambio_dolar;
               $totalGeneral = $general;
               $simbolo = "S/ ";
               $costo_delivery_f =  0.00;
               $format_delivery =  str_replace(',', '',  $costo_delivery_f); 
               $costo_delivery = $format_delivery;
               $descuento_format = $descuento;
                
               $igv_cifra = round($general / 1.18, 2, PHP_ROUND_HALF_DOWN);
               
               
               $subtotal = $igv_cifra;
               $monto_igv_format = round($general - $subtotal, 2, PHP_ROUND_HALF_DOWN);

               $total_a_cuenta = 0.00;
               $total_tarjeta = 0.00;
                

                
                                 
               $total_a_facturar = round($totalGeneral  ,2); 
               $total_final_descuento_format_without_comma =  str_replace(',', '',  $descuento_format);
               $total_a_facturar_end = number_format( $total_a_facturar  - $total_final_descuento_format_without_comma, 2);
               
               $total_final_format_without_comma =  str_replace(',', '',  $total_a_facturar);
               $total_a_cuenta_format_without_comma =  str_replace(',', '',  $total_a_cuenta);
               $total_final_tarjeta_format_without_comma =  str_replace(',', '',  $total_tarjeta);
              
               
               $total_a_pagar =  number_format($total_final_format_without_comma + $costo_delivery - $total_final_descuento_format_without_comma - $total_a_cuenta_format_without_comma + $total_final_tarjeta_format_without_comma, 2);
                 




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

                <tr class="borde_lateral">
                <td colspan="4" class="border_hidden fondo_vacio"></td> 
                <td>TOTAL A FACTURAR</td>
                <td>'.$simbolo.$total_a_facturar_end.'</td>
                </tr>

                    <tr class="borde_lateral">
                    <td colspan="4" class="border_hidden fondo_vacio"></td>
                     
                    <td>TOTAL A PAGAR</td>
                    <td>'.$simbolo.$total_a_pagar.'</td>
                    </tr>
                    
                    <tr>
                    '; 
                    if($estado == 1){
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
                    <button class="btn btn-new " style="background: #ab2200!important" onclick="modalDescuento(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                     
                    </td>
                     
                    <td  colspan="2">
                    <button class="btn btn-new btn-block " style="background: #ab2200!important" onclick="registro_compra(&quot;'.$NumPedido.'&quot; , &quot;'.$total_a_cuenta.'&quot; , &quot;'.$total_tarjeta.'&quot;)"><i class="fas fa-check fa-fw"></i> APROBAR COTIZACION </button>
                    <a class="btn btn-new btn-block "  style="background: #ab2200!important" target="_blank" href="../process/cotiza/cotiza_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                    </td>';
                        break;
                        case 2:  
                             echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                             <button class="btn btn-new " style="background: #ab2200!important" ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                              
                             </td>
                              
                             <td  colspan="2">
                             <button class="btn btn-new btn-block " style="background: #ab2200!important" ><i class="fas fa-check fa-fw"></i> APROBAR COTIZACION </button>
                             <a class="btn btn-new btn-block "  style="background: #ab2200!important" target="_blank" href="../process/cotiza/cotiza_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                             </td>';
                        break;
                        break;
                        case 3: 
                           echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                             <button class="btn btn-new " style="background: #ab2200!important" ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                              
                             </td>
                              
                             <td  colspan="2">
                             <button class="btn btn-new btn-block " style="background: #ab2200!important" ><i class="fas fa-check fa-fw"></i> APROBAR COTIZACION </button>
                             <a class="btn btn-new btn-block "  style="background: #ab2200!important" target="_blank" href="../process/cotiza/cotiza_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                             </td>';
                        break;
                        case 4: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                    <button class="btn btn-new " style="background: #ab2200!important" onclick="modalDescuento(&quot;'.$NumPedido.' &quot;)"><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                     
                    </td>
                     
                    <td  colspan="2">
                    <button class="btn btn-new btn-block " style="background: #ab2200!important" onclick="registro_compra(&quot;'.$NumPedido.'&quot; , &quot;'.$total_a_cuenta.'&quot; , &quot;'.$total_tarjeta.'&quot;)"><i class="fas fa-check fa-fw"></i> APROBAR COTIZACION </button>
                    <a class="btn btn-new btn-block "  style="background: #ab2200!important" target="_blank" href="../process/cotiza/cotiza_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                    </td>';
                        break;
                        case 5: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                             <button class="btn btn-new " style="background: #ab2200!important" ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                              
                             </td>
                              
                             <td  colspan="2">
                             <button class="btn btn-new btn-block " style="background: #ab2200!important" ><i class="fas fa-check fa-fw"></i> APROBAR COTIZACION </button>
                             <a class="btn btn-new btn-block "  style="background: #ab2200!important" target="_blank" href="../process/cotiza/cotiza_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
                             </td>';
                        break;
                        case 6: 
                            echo '<td  colspan="4" style="border-top: solid 2px rgba(255, 255, 255, .15);  vertical-align: middle;">
                             <button class="btn btn-new " style="background: #ab2200!important" ><i class="fas fa-percent fa-fw"></i> DESCUENTO </button>
                              
                             </td>
                              
                             <td  colspan="2">
                             <button class="btn btn-new btn-block " style="background: #ab2200!important" ><i class="fas fa-check fa-fw"></i> APROBAR COTIZACION </button>
                             <a class="btn btn-new btn-block "  style="background: #ab2200!important" target="_blank" href="../process/cotiza/cotiza_imprimir.php?num_cotiza='.$NumPedido.'"><i class="fas fa-print fa-fw"></i> IMPRIMIR </a>
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
                        echo '<button class="btn btn-block btn-new" style="background: #ab2200!important" data-toggle="modal" data-target="#modalNewProd" ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 2:  
                        echo ' <button class="btn btn-block btn-new" style="background: #ab2200!important"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    break;
                    case 3: 
                      echo ' <button class="btn btn-block btn-new" style="background: #ab2200!important"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 4: 
                      echo ' <button class="btn btn-block btn-new" style="background: #ab2200!important" data-toggle="modal" data-target="#modalNewProd" ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 5: 
                      echo ' <button class="btn btn-block btn-new" style="background: #ab2200!important"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                    case 6: 
                        echo ' <button class="btn btn-block btn-new" style="background: #ab2200!important"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>';
                    break;
                }
                
                echo '  
                
                
                </div> 
                
				   </form>	';
				?>




	                    <!--
<button type="submit" class="btn btn-sm btn-info button-UPPE" value="res-update-pedido-'.$fila['id_cotizacion'].'"><i style="color:#FFF" class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;Imprimir Cotizacion</button>
-->