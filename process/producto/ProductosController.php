<?php
            
			
			$ordenU=  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.* FROM `producto` , `perfil`;");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
				$cod=$ordenP['CodigoProd'];
				
				
				$nombre=$ordenP['NombreProd'];
				$modelo=$ordenP['Modelo'];
                $marca=$ordenP['Marca'];
                $detalle=$ordenP['Detalle'];
                $precio=$ordenP['Precio'];
                $compra=$ordenP['Compra'];
				$cat=$ordenP['CodigoCat'];
				$stock=$ordenP['Stock'];
				$img=$ordenP['Imagen'];
				$ganancia=$ordenP['ganancia'];
				$medio=$ordenP['medio'];
				
				$precio_format = ($precio * ($ganancia+$medio) / 100 + $precio); 
				
				
					?>
                     <tr>

                         <td width="1%" class="with-img">
                             <img src="../assets/img-products/<?php echo $img ?>" class="img-rounded height-30">

                         </td>
                         <td style="font-size: 12px;"><?php echo $cod ?></td>
                         <td style="font-size: 12px;"><?php echo $nombre ?></td>
                         <td style="font-size: 12px;"><?php echo $modelo ?></td>
                         <td style="font-size: 12px;"><?php echo $marca ?></td>
                         <td style="font-size: 12px;"><?php echo $detalle ?></td>
                         <td style="font-size: 12px;" width=11%><?php
                            

                         switch ($_SESSION['NombreAfil']) {
                             case "soluciones":
                                $precio_dolar_sin_f = number_format($compra / $globalTasaCambio_dolar, 2); 
                                echo "$ ".$precio_dolar_sin_f."<br><br>";
                                echo "S/ ".$compra ;
                                 break;
                             
                             default:
                                echo "===";
                                 break;
                         }
                        ?></td>
                         <td style="font-size: 12px;" width=10%><?php 
                        $precio_dolar_sin_f = number_format($precio_format  / $globalTasaCambio_dolar, 2); 
                        echo "$ ".$precio_dolar_sin_f."<br><br>";
                        echo "S/ ".$precio_format  ;
                        
                         ?></td>
                         <td style="font-size: 12px;" width=2%>
                             <?php 
                    $conUs= ejecutarSQL::consultar("SELECT `categoria`.*, `categoria`.`CodigoCat` FROM `categoria` WHERE `categoria`.`CodigoCat` LIKE '$cat'");
                    while($UsP=mysqli_fetch_assoc($conUs)){
					echo $UsP['Nombre'];}
                    ?>
                         </td>
                         <?php if ($stock==0) {
						
						echo '
						<td style="    border-style: solid;
                        border-color: red;
                        border-top: 3px solid red;">Agotado</td>
						';
						}else {
							echo '
							 <td>'.$stock.'</td>
							 ';
							}
                    
                    
                    
                    ?>





                         <td class="with-btn-group">
                             <?php  if ($_SESSION['NombreAfil']=="soluciones") {
						   
						   echo '
						    <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-primary btn-sm"  href="updateInventario.php?CodigoProd='.$ordenP['CodigoProd'].' "> <i style="color:#FFF" class="fa fa-edit"></i> </a>
                            <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" onclick="return confirm("estas seguro de eliminar?");" href="delprod.php?CodigoProd='.$ordenP['CodigoProd'].' "> <i style="color:#FFF" class="fa fa-trash"></i> </a>
           
						    ';
						   
						   
						   
					   }else {
						   
						   echo '
						   
						    <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-primary btn-sm"  href="updateInventario.php?CodigoProd='.$ordenP['CodigoProd'].' "> <i style="color:#FFF" class="fa fa-edit"></i> </a>
                            
                            <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm disabled" onclick="return confirm("estas seguro de eliminar?");" href="delprod.php?CodigoProd='.$ordenP['CodigoProd'].' "> <i style="color:#FFF" class="fa fa-trash"></i> </a>
           
						   ';
						   }
						     ?>

                         </td>
                     </tr>
                     </form>
         </div>

         <?php
           
            }
            ?>