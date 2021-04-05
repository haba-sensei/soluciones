<style>
                        .btn-new {
                            background: #0d74b3 !important;
                            color: white;
                            font-weight: 600;
                        }

                        .btn-elim {
                            background: #ff3502 !important;
                            color: white;
                            font-weight: 600;
                        }

                        h2 {
                            color: #0d74b3 !important;
                            font-weight: 700;
                        }

                        .btn.btn-default,
                        .btn.btn-default.disabled,
                        .btn.btn-default.disabled:focus,
                        .btn.btn-default.disabled:hover,
                        .btn.btn-default[disabled],
                        .btn.btn-default[disabled]:focus,
                        .btn.btn-default[disabled]:hover {
                            color: #fff;
                            background: rgb(8 70 107);
                            border-color: transparent;
                        }
                        </style>


                        <div class="panel panel-inverse">
                            <!-- begin panel-heading -->
                            <div class="panel-heading">

                                <h4 class="panel-title">Lista de Despachos en Espera</h4>
                            </div>
                            <!-- end panel-heading -->
                            <!-- begin panel-body -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="clientes_1" class="table table-condensed">
                                        <thead class="bg-blue">
                                            <tr>

                                                <th>N° Pedido</th>
                                                <th>Fecha Emision</th>
                                                <th>Forma de Entrega</th>
                                                <th>Opciones</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                
                                                $pedido_con_espera_delivery_cons = ejecutarSQL::consultar("SELECT `cotizacion_online`.`id_cotizacion`, `cotizacion_online`.`fecha_cotizacion`, `cotizacion_online`.`Estado`, `detalle_compra_online`.`id_cotizacion`, `detalle_compra_online`.`forma_entrega`
                                                FROM `cotizacion_online`
                                                    , `detalle_compra_online`
                                                WHERE `cotizacion_online`.`Estado` = '2' AND `detalle_compra_online`.`id_cotizacion` = `cotizacion_online`.`id_cotizacion`");
                                                while($ordenP=mysqli_fetch_assoc($pedido_con_espera_delivery_cons)){
                                                
                                                    $id_coti =$ordenP['id_cotizacion'];
                                                    $fecha_coti =$ordenP['fecha_cotizacion'];
                                                    $estado_coti =$ordenP['Estado'];
                                                    $forma_entrega =$ordenP['forma_entrega'];
                                                    


                                            if($forma_entrega == "Lima" || $forma_entrega == "Provincia" || $forma_entrega == "Tienda" ){
                                                ?>

                                            <tr>
                                                <td><?php echo  $id_coti ?></td>
                                                <td><?php echo $fecha_coti ?></td>
                                                <td><?php 
                                                switch ($forma_entrega) {
                                                    case 'Lima':
                                                        echo "Delivery a Lima";
                                                    break;
                            
                                                    case 'Provincia':
                                                        echo "Envio a Provincia";
                                                    break;
                                                    case 'Tienda':
                                                        echo "Recojo en Tienda";
                                                    break;
                                                }
                                                
                                                ?></td>


                                                <td style="display: flex;">
                                                    <a href="../process/pedido/pedido_imprimir.php?num_cotiza=<?=$id_coti?>" target="_blank"
                                                        class="btn btn-block btn-new"
                                                        style="margin-right: 10px; margin-top: 8px; margin-left: 10px;"><i
                                                            class="fas fa-plus fa-fw"></i> Imprimir </a>
                                                    <button class="btn btn-block btn-new" onclick="enviarDelivery(&quot;<?php echo $id_coti ?>&quot;)"
                                                        style="margin-right: 10px; margin-top: 8px; margin-left: 10px;"><i
                                                            class="fas fa-plus fa-fw"></i> Delivery Enviado</button>



                                                </td>


                                            </tr>
                                            <?php
                                            }  }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end panel-body -->
                        </div>
                    </div>