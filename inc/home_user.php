<?php
//productos
		 $con1= ejecutarSQL::consultar("SELECT * from producto");
		 $prod = mysqli_num_rows($con1);
         
         $con2= ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto` WHERE `producto`.`Stock` ='0' ");
		 $stock_agotado = mysqli_num_rows($con2);

         $con3= ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto` WHERE `producto`.`Stock` >= '1' ");
		 $stock_abilitado = mysqli_num_rows($con3);

//pedidos
        $pedido_con_total= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '1' OR `cotizacion_online`.`Estado` = '2'  ");
        $pedido_total = mysqli_num_rows($pedido_con_total);

        $pedido_con_aprob= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '2'  ");
        $pedido_aprob = mysqli_num_rows($pedido_con_aprob);
         
        $pedido_con_espera= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '1'  ");
        $pedido_espera = mysqli_num_rows($pedido_con_espera);
//cotizacion
        $cotiza_con_total= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '0' OR `cotizacion_online`.`Estado` = '3'  ");
        $cotiza_total = mysqli_num_rows($cotiza_con_total);

        $cotiza_con_aprob= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '3'  ");
        $cotiza_aprob = mysqli_num_rows($cotiza_con_aprob);

        $cotiza_con_espera= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '0'  ");
        $cotiza_espera = mysqli_num_rows($cotiza_con_espera);
//delivery

        $pedido_con_espera_delivery= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '2'  ");
        $delivery_espera = mysqli_num_rows($pedido_con_espera_delivery);

        $pedido_con_aprob_delivery= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '4'  ");
        $delivery_aprob = mysqli_num_rows($pedido_con_aprob_delivery);
        
        $pedido_con_totales_delivery= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '4' OR `cotizacion_online`.`Estado` = '2'  ");
        $delivery_totales = mysqli_num_rows($pedido_con_totales_delivery);

        

        // $cotiza_con_espera= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '0'  ");
        // $cotiza_espera = mysqli_num_rows($cotiza_con_espera);

		 
        ?>




<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
        <li class="breadcrumb-item active">Panel Principal</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->

    <!-- end page-header -->
    <h1 class="page-header">Panel Principal<small></small></h1>
    <!-- begin row -->

    <?php 
     $CodArea = $_SESSION['CodigoArea'];
    switch ($CodArea) {
        case 1:
            echo '
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>ARTICULOS TOTALES </h4>
                                    <p>'. $prod.' </p>

                            </div>
                            <div class="stats-link">
                                <a href="actualizarStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>ARTICULOS EN STOCK</h4>
                                <p> '.$stock_abilitado.' </p>

                            </div>
                            <div class="stats-link">
                                <a href="articulosStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                            <div class="stats-info">
                                <h4>ARTICULOS AGOTADOS</h4>
                                <p> '.$stock_agotado.' </p>
                            </div>
                            <div class="stats-link">
                                <a href="actualizarStockAgotado.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="row">

                    <div class="col-lg-4 col-md-4">
                    <div class="widget widget-stats hljs-wrapper">
                        <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                        <div class="stats-info">
                            <h4>PEDIDOS EN ESPERA</h4>
                            <p> '.$pedido_espera.' </p>
                        </div>
                        <div class="stats-link">
                            <a href="listaPedidos.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                        

                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>PEDIDOS APROBADOS</h4>
                                    <p> '.$pedido_aprob.' </p>

                                </div>
                                <div class="stats-link">
                                    <a href="listaPedidos_aprob.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>PEDIDOS TOTALES</h4>
                                <p> '.$pedido_total.' </p>

                            </div>
                            <div class="stats-link">
                                <a href="listaPedidos_totales.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                        
                    </div>


                    <div class="row">

                    
                    <div class="col-lg-4 col-md-4">
                    <div class="widget widget-stats hljs-wrapper">
                        <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                        <div class="stats-info">
                            <h4>COTIZACIONES EN ESPERA</h4>
                            <p> '.$cotiza_espera.' </p>
                        </div>
                        <div class="stats-link">
                            <a href="listaCotiza.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>COTIZACIONES APROBADAS</h4>
                                    <p> '.$cotiza_aprob.' </p>

                                </div>
                                <div class="stats-link">
                                    <a href="listaCotiza_aprob.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>COTIZACIONES TOTALES</h4>
                                <p>  '.$cotiza_total.' </p>

                            </div>
                            <div class="stats-link">
                                <a href="listaCotiza_totales.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                        
                    </div>

                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                    <div class="widget widget-stats hljs-wrapper">
                        <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                        <div class="stats-info">
                            <h4>DELIVERYS EN ESPERA</h4>
                            <p>'. $delivery_espera.' </p>
                        </div>
                        <div class="stats-link">
                            <a href="deliveryEspera.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                        
    
    
                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>DELIVERYS ENVIADOSS</h4>
                                    <p>'. $delivery_aprob.' </p>
    
                                </div>
                                <div class="stats-link">
                                    <a href="deliveryAprobado.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>DELIVERYS TOTALES</h4>
                                <p>  '.$delivery_totales.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="deliveryTotales.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                        
    
                    </div>

            ';
        break;
        
        case 2:
            echo '
                    <div class="row">
    
                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>ARTICULOS TOTALES </h4>
                                    <p>'. $prod.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="actualizarStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>ARTICULOS EN STOCK</h4>
                                <p> '.$stock_abilitado.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="articulosStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                            <div class="stats-info">
                                <h4>ARTICULOS AGOTADOS</h4>
                                <p> '.$stock_agotado.' </p>
                            </div>
                            <div class="stats-link">
                                <a href="actualizarStockAgotado.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
    
                     
                        
     
    
            ';
            include '../views/tabla_busqueda_articulos.php';
        break;

        case 3:
            echo '
                    <div class="row">
    
                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>ARTICULOS TOTALES </h4>
                                    <p>'. $prod.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="actualizarStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>ARTICULOS EN STOCK</h4>
                                <p> '.$stock_abilitado.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="articulosStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                            <div class="stats-info">
                                <h4>ARTICULOS AGOTADOS</h4>
                                <p> '.$stock_agotado.' </p>
                            </div>
                            <div class="stats-link">
                                <a href="actualizarStockAgotado.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
    
                    
    
            ';
            include '../views/tabla_busqueda_articulos.php';
        break;
        
        case 4:
            echo '
                    
    
                    <div class="row">
    
                    <div class="col-lg-4 col-md-4">
                    <div class="widget widget-stats hljs-wrapper">
                        <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                        <div class="stats-info">
                            <h4>PEDIDOS EN ESPERA</h4>
                            <p> '.$pedido_espera.' </p>
                        </div>
                        <div class="stats-link">
                            <a href="listaPedidos.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                        
    
                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>PEDIDOS APROBADOS</h4>
                                    <p> '.$pedido_aprob.' </p>
    
                                </div>
                                <div class="stats-link">
                                    <a href="listaPedidos_aprob.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>PEDIDOS TOTALES</h4>
                                <p> '.$pedido_total.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="listaPedidos_totales.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                        
                    </div>
    
    
                    
    
                    
    
            ';
            
            include '../process/pedido/pedido.php';
        break;

        case 5:
            echo '
                     
    
                    <div class="row">
    
                    <div class="col-lg-4 col-md-4">
                    <div class="widget widget-stats hljs-wrapper">
                        <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                        <div class="stats-info">
                            <h4>PEDIDOS EN ESPERA</h4>
                            <p> '.$pedido_espera.' </p>
                        </div>
                        <div class="stats-link">
                            <a href="listaPedidos.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                        
    
                        <div class="col-lg-4 col-md-4"> 
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>PEDIDOS APROBADOS</h4>
                                    <p> '.$pedido_aprob.' </p>
    
                                </div>
                                <div class="stats-link">
                                    <a href="listaPedidos_aprob.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>PEDIDOS TOTALES</h4>
                                <p> '.$pedido_total.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="listaPedidos_totales.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                        
                    </div>
    
     
     
    
            ';
            include '../process/pedido/pedido.php';
        break;

        case 6:
            echo '
                    
    
                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                    <div class="widget widget-stats hljs-wrapper">
                        <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                        <div class="stats-info">
                            <h4>DELIVERYS EN ESPERA</h4>
                            <p>'. $delivery_espera.' </p>
                        </div>
                        <div class="stats-link">
                            <a href="deliveryEspera.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                        
    
    
                        <div class="col-lg-4 col-md-4">
                            <div class="widget widget-stats hljs-wrapper">
                                <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                                <div class="stats-info">
                                    <h4>DELIVERYS ENVIADOSS</h4>
                                    <p>'. $delivery_aprob.' </p>
    
                                </div>
                                <div class="stats-link">
                                    <a href="deliveryAprobado.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-4">
                        <div class="widget widget-stats hljs-wrapper">
                            <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                            <div class="stats-info">
                                <h4>DELIVERYS TOTALES</h4>
                                <p>  '.$delivery_totales.' </p>
    
                            </div>
                            <div class="stats-link">
                                <a href="deliveryTotales.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                        
    
                    </div>
    
            ';
            include '../views/tabla_delivery_espera.php';
        break;
}
?>




<!-- end col-10 -->
</div>
<!-- end row -->
</div>