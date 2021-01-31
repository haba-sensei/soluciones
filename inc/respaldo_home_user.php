<div class="col-lg-4 col-md-6">
            <div class="widget widget-stats bg-orange-darker">
                <div class="stats-icon"><i class="fa fa-list"></i></div>
                <div class="stats-info">
                    <h4>LISTA DE COTIZACIONES.</h4>
                    <p><?php echo  $stock ?></p>
                    <!--
							
-->
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Cotizaciones <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->

        <!-- end col-3 -->
    </div>
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">

            <h4 class="panel-title">Lista de Pedidos</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">

            <div class="table-responsive">
                <table id="example2" class="table no-margin ">
                    <thead class="bg-blue">
                        <tr>
                            <th>Orden ID</th>
                            <th>Fecha </th>
                            <th>Cliente</th>

                            <th>Total de Compra</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            
			//$ordenU=  ejecutarSQL::consultar("SELECT `venta`.* FROM `venta` LEFT JOIN `detalle` ON `detalle`.`Orden` = `venta`.`Orden` LEFT JOIN `producto` ON `detalle`.`CodigoProd` = `producto`.`CodigoProd`");
            
			$ordenU=  ejecutarSQL::consultar("select * from cotizacion_online where Estado = 0; ");
            
            while($ordenP=mysqli_fetch_assoc($ordenU)){
				$ordenList=$ordenP['id_cotizacion'];
				$ordenFech=$ordenP['fecha_cotizacion'];
				$ordenNit=$ordenP['ID'];
				$ordenEst=$ordenP['Estado'];
				$ordenPrice=$ordenP['GranTotal'];
				
				
					?>
                        <tr>
                            <td><a
                                    href="actualizarPedido_online.php?id_cotizacion=<?php echo $ordenList ?>"><?php echo $ordenList ?></a>
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
                            <td align="center">
                                <a data-toggle="tooltip" data-placement="top" title="Actualizar"
                                    class="btn btn-primary btn-sm"
                                    href="actualizarPedido_online.php?id_cotizacion=<?php echo $ordenList ?>"> Ver Orden
                                </a>

                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>

            </div>