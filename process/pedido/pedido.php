	
			<section>
         
                             <div class="table-responsive " style="padding: 15px 15px 0;">
							<table id="example3" class="table table-bordered table-striped table-hover animated fadeInUp" style="text-align: left;">          
            
                  <thead class="bg-green" style="letter-spacing: 2px;">
                   <tr>
                    <th>N° Pedido</th>
                    <th>Fecha </th>
                    <th>Razon Social</th>
                    <th>Importe Total </th>
                    <th>Estado</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody >
				  <?php
            
			
            $ordenU=  ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `detalle_compra_online`.*, `cotizacion_online`.`Estado`, `detalle_compra_online`.`id_cotizacion` FROM `cotizacion_online`, `detalle_compra_online` WHERE `cotizacion_online`.`Estado` = '1' AND `detalle_compra_online`.`id_cotizacion` = `cotizacion_online`.`id_cotizacion`;");
            
        while($ordenP=mysqli_fetch_assoc($ordenU)){
				$ordenList=$ordenP['id_cotizacion'];
				$ordenFech=$ordenP['fecha_cotizacion'];
				$ordenNit=$ordenP['ID'];
				$ordenEst=$ordenP['Estado'];
        $ordenPrice=$ordenP['GranTotal'];
        $ordenMoneda=$ordenP['moneda'];
        $ordenDescuento=$ordenP['descuento'];
        
				
				
					?>
				<tr>
                    <td>
                    
                    <?php 

                    
                    switch ($_SESSION['CodigoArea']) { 

                        case 1: 
                            echo '  <a href="actualizarPedido_online.php?id_cotizacion='.$ordenList.'&type=pedido">'.$ordenList.'</a>';
                        break;
                        case 2:  
                            echo ' - ';
                        break;
                        break;
                        case 3: 
                          echo ' - ';
                        break;
                        case 4: 
                          echo '  <a href="actualizarPedido_online.php?id_cotizacion='.$ordenList.'&type=pedido">'.$ordenList.'</a>';
                        break;
                        case 5: 
                          echo '  <a href="actualizarPedido_online.php?id_cotizacion='.$ordenList.'&type=pedido">'.$ordenList.'</a>';
                        break;
                        case 6: 
                              ' - ';
                        break;
                    }

                    ?>
                   
                    
                    
                    </td>
                    <td><?php echo $ordenFech ?></td>
                    <td>
                    <?php 
                    $conUs= ejecutarSQL::consultar("select * from clientes where ID=$ordenNit");
                    while($UsP=mysqli_fetch_assoc($conUs)){
				            	echo $UsP['NombreEmpresa'];}
                    ?>
                    </td>
                    
                    <td> <?php 
                    
                    switch ($ordenMoneda) {
                      case 'soles':
                       echo 'S/ ';
                        break;
                      
                        case 'dolares':
                       echo '$ ';
                        break;
                    }
                    $total_soles =  number_format($ordenPrice * $globalTasaCambio_dolar - $ordenDescuento, 2);
                    echo $total_soles;
                    ?></td>
                    <td><?php 
                    switch ($ordenEst) {
                      case 1:
                        echo "En Espera";
                        break;
                      case 2:
                        echo "Aprobado";
                        break;
                      
                    }
                    
                    
                    
                    ?></td>
                    <td align="center">
                    <?php 

                    
                    switch ($_SESSION['CodigoArea']) { 

                        case 1: 
                            echo '  <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarPedido_online.php?id_cotizacion='.$ordenList.'&type=pedido"> Ver Orden </a>';
                        break;
                        case 2:  
                            echo ' - ';
                        break;
                        break;
                        case 3: 
                          echo ' - ';
                        break;
                        case 4: 
                          echo '  <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarPedido_online.php?id_cotizacion='.$ordenList.'&type=pedido"> Ver Orden </a>';
                        break;
                        case 5: 
                          echo '  <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarPedido_online.php?id_cotizacion='.$ordenList.'&type=pedido"> Ver Orden </a>';
                        break;
                        case 6: 
                              ' - ';
                        break;
                    }

                    ?>
                  
                    
                     </td>
                  </tr>
                  
                <?php } ?>  
                  </tbody>
                </table>
                
              </div>
              <!-- /.table-responsive --> 
              
                            </div>
                            
                        </div>
                        
                    </div>
								
								
          <script >
            

          function  clickme(selectObject) {
            var value_id = selectObject.value;  
            var value_tipo = selectObject.tipo; 
            console.log(selectObject.tipo);
            
          //   var value_tipo = tipo.value;

          //   $.ajax({
          //   type: "POST",
          //   url: "process/pedido/PedidoController.php",
          //   data: {
          //     id : value_id,
          //     type: value_tipo
          //   },
          //   beforeSend: function(){
                
          //   },
          //   error: function() {
                
          //   },
          //   success: function (data) {
          //      alert(data);
          //   }
          // });




            
          }
          </script>
