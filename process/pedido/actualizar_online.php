	<?php
             $NumPedido=$_GET['id_cotizacion'];
             $type =$_GET['type'];
			 
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
		 
         while($precio_base=mysqli_fetch_array($cons_precio_base)){ $totalGeneral_sin_formato = $precio_base['GranTotal']; }
		
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
        </style>
	<div class="col-md-12" style=" margin-top: 18px; padding-left: 0; padding-right: 0;  ">
	    <div class="panel panel-default">
	        <div class="panel-heading " style="background: #0d74b3!important;">
	            <h3 class="panel-title"> 
                <i class="fas fa-dollar-sign">&nbsp;&nbsp;Taza de Cambio</i> 
                <span><?php echo "S/ ".number_format($globalTasaCambio_dolar, 2);?></span> 
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
                    $NumPedido=$_GET['id_cotizacion'];
                    $conFact= ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`, `producto`.`CodigoProd`, `producto`.*, `cotizacion_online`.`id_cotizacion` FROM `detalle_cotizacion_online`, `producto`, `cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' AND `producto`.`CodigoProd` = `detalle_cotizacion_online`.`CodigoProd` AND `cotizacion_online`.`id_cotizacion` = `detalle_cotizacion_online`.`id_cotizacion`;");
                    while ($fila=mysqli_fetch_array($conFact)){
                
                    $total_dolares = number_format($fila['Precio'] * $fila['Cantidad'], 2);
                    $total_indi =  str_replace(',', '',  $total_dolares );
                    $total_soles = number_format($globalTasaCambio_dolar * $total_indi ,2);
                    $precio_unit = number_format($fila['Precio'], 2);
                    // href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"
                    echo '
                          <tr>
                          <td class="ajut_centrado_orden">'.$fila['Cantidad'].'</td>
                          <td>
                          <span class="">'.$fila['NombreProd'].'</span><br>
                          <span class="">(Modelo) = '.$fila['Modelo'].'</span><br>
                          <span class="">(Marca) = '.$fila['Marca'].'</span><br>
                          <span class="">(Sku) = '.$fila['CodigoProd'].'</span>
                          </td>
                          <td class="ajut_centrado_orden">$ '.$precio_unit.'</td>
                          <td class="ajut_centrado_orden">S/ '.$total_soles.'</td> 
                          <td class="ajut_centrado_orden">$ '.$total_dolares.'</td>
                          <td class="ajut_centrado_orden">
                          <a href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'" target="_blank" class="btn btn-new btn-block "><i class="fas fa-eye fa-fw"></i> VER ARTICULO</a> 
                          <button class="btn btn-elim btn-block "><i class="fas fa-trash fa-fw"></i> ELIMINAR</button> 
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

                        
                        break;
                    case 'soles':
                        $totalGeneral = $totalGeneral_sin_formato * $globalTasaCambio_dolar;
                        $simbolo = "S/ ";
                        $costo_delivery_f =  $costo_adicional;
                        $format_delivery =  str_replace(',', '',  $costo_delivery_f); 
                        $costo_delivery = number_format($format_delivery, 2);

                        
                        break; 
                     
                 } 
                 
                $monto_igv_format = number_format($totalGeneral * 1.18 - $totalGeneral, 2);
                $monto_igv = $totalGeneral * 1.18 - $totalGeneral;
                
                $subtotal = number_format($totalGeneral - $monto_igv, 2);
                
                 if($tipo_pago == "A Cuenta"){
                    $total_a_cuenta = number_format($totalGeneral * 40 /100, 2);
                 }else {
                    $total_a_cuenta = 0;
                 }

                 if($medio_pago == "Tarjeta"){
                    $total_tarjeta = number_format($totalGeneral * 5 /100, 2);
                 }else {
                    $total_tarjeta = 0;
                 }
                                  
                $total_a_facturar = number_format($totalGeneral, 2); 
                
                $total_final_format_without_comma =  str_replace(',', '',  $total_a_facturar);
                $total_a_cuenta_format_without_comma =  str_replace(',', '',  $total_a_cuenta);
                $total_final_tarjeta_format_without_comma =  str_replace(',', '',  $total_tarjeta);

                
                $total_a_pagar =  number_format($total_final_format_without_comma + $costo_delivery - $total_a_cuenta_format_without_comma + $total_final_tarjeta_format_without_comma, 2);
                  
               }
			 
		echo '
        <tfoot>

                <tr>
                <td colspan="4" class="border_hidden"></td>
                 
                <td>SUB-TOTAL</td>
                <td> '.$simbolo.$subtotal.'</td>
                </tr>

                <tr>
                <td colspan="4" class="border_hidden"></td>
                 
                <td>IGV 18%</td>
                <td> '.$simbolo.$monto_igv_format.'</td>
                </tr>
                <tr>
                <td colspan="4" class="border_hidden"></td>
                 
                <td>TOTAL A FACTURAR</td>
                <td>'.$simbolo.$total_a_facturar.'</td>
                </tr>

                '; 
                if( $tipo_pago == "A Cuenta"){
                    echo '<tr>
                    <td colspan="4" class="border_hidden"></td>
                     
                    <td>A CUENTA 40%</td>
                    <td>'.$simbolo.$total_a_cuenta.'</td>
                    </tr>
                    <tr>';
                }else {
                    echo '';
                }  
               if($forma_de_entrega == "Lima" || $forma_de_entrega == "Provincia"){
                echo '
                
                <td colspan="4" class="border_hidden"></td>
                     
                    <td>DELIVERY</td>
                    <td>'.$simbolo.$costo_delivery.'</td>
                    </tr>
                
                ';
               }else {
                   echo '';
               }
                if( $medio_pago == "Tarjeta"){
                    echo '<tr>
                    <td colspan="4" class="border_hidden"></td>
                     
                    <td>TARJETA 5%</td>
                    <td>'.$simbolo.$total_tarjeta.'</td>
                    </tr>';
                }else {
                    echo '';
                }
                echo ' 
                    <tr>
                    <td colspan="4" class="border_hidden"></td>
                     
                    <td>TOTAL A PAGAR</td>
                    <td>'.$simbolo.$total_a_pagar.'</td>
                    </tr>
                    
                    <tr>
                    <td colspan="4" class="border_hidden"></td>
                     
                    <td colspan="2">
                    <button class="btn btn-new btn-block "><i class="fas fa-check fa-fw"></i> APROBAR </button>
                    <button class="btn btn-new btn-block "><i class="fas fa-print fa-fw"></i> IMPRIMIR </button>
                    </td>
                    
                    </tr>
                    
                </tfoot>
        
        </table>	
				
				   
				    
                </div> 
               <div align="center" class="col-md-12" style="padding-top: 10px;">
				
				<button class="btn btn-block btn-new"  ><i class="fas fa-plus fa-fw"></i> AGREGAR OTRO ARTICULO</button>
				  </div> 
                
				   </form>	';
				?>




	                    <!--
<button type="submit" class="btn btn-sm btn-info button-UPPE" value="res-update-pedido-'.$fila['id_cotizacion'].'"><i style="color:#FFF" class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;Imprimir Cotizacion</button>
-->