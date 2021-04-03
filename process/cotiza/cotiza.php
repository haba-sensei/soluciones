	
			<section>
         
                             <div class="table-responsive " style="padding: 15px 15px 0;">
							<table id="example3" class="table table-bordered table-striped table-hover animated fadeInUp" style="text-align: left;">          
            
                  <thead class="bg-blue" style="letter-spacing: 2px;">
                   <tr>
                   <th>N° Cotiza</th>
                    <th>Fecha </th>
                    <th>Razon Social</th>
                    <th>Importe</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                  </tr>
                  </thead>
                  <tbody >
				  <?php
            
			
			$ordenU=  ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '0' ORDER BY `cotizacion_online`.`id_cotizacion` ASC");
            
        while($ordenP=mysqli_fetch_assoc($ordenU)){
				$ordenList=$ordenP['id_cotizacion'];
				$ordenFech=$ordenP['fecha_cotizacion'];
				$ordenNit=$ordenP['ID'];
				$ordenEst=$ordenP['Estado'];
        $ordenPrice=$ordenP['GranTotal'];
        
				
				
					?>
				<tr>
                    <td>
                    <?php 


                    switch ($_SESSION['CodigoArea']) { 

                    case 1: 
                    echo '<a href="actualizarCotiza_online.php?id_cotizacion='.$ordenList.'&type=pedido">'.$ordenList.' ?></a>';
                    break;
                    case 2:  
                    echo ' - ';
                    break;
                    break;
                    case 3: 
                    echo ' - ';
                    break;
                    case 4: 
                    echo '  <a href="actualizarCotiza_online.php?id_cotizacion='.$ordenList.'&type=pedido">'.$ordenList.'</a>';
                    break;
                    case 5: 
                    echo '  <a href="actualizarCotiza_online.php?id_cotizacion='.$ordenList.'&type=pedido">'.$ordenList.'</a>';
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
                    
                    <td>S/ <?php echo number_format($ordenPrice,2) ?></td>
                    <td><?php 
                    switch ($ordenEst) {
                      case 0:
                        echo "No Aprobado";
                        break;
                      case 1:
                        echo "Aprobado";
                        break;
                      case 2:
                        echo "Cotizado";
                        break;
                    }
                    
                    
                    
                    ?></td>
                    <td align="center">
                    <?php 

                                  
                    switch ($_SESSION['CodigoArea']) { 

                    case 1: 
                      echo '  <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarCotiza_online.php?id_cotizacion='.$ordenList.'&type=cotiza"> Ver Orden </a>';
                    break;
                    case 2:  
                      echo ' - ';
                    break;
                    break;
                    case 3: 
                    echo ' - ';
                    break;
                    case 4: 
                    echo '  <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarCotiza_online.php?id_cotizacion='.$ordenList.'&type=cotiza"> Ver Orden </a>';
                    break;
                    case 5: 
                    echo '  <a data-toggle="tooltip" data-placement="top" title="Actualizar" class="btn btn-primary btn-sm"  href="actualizarCotiza_online.php?id_cotizacion='.$ordenList.'&type=cotiza"> Ver Orden </a>';
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
             




            
          }
          </script>
