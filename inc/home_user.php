<?php
		 $con1= ejecutarSQL::consultar("SELECT * from producto");
		 $prod = mysqli_num_rows($con1);
         
         $espera_ped = 1;
         $aprob_ped = 2;
         
         $espera_cot = 0;
         $aprob_cot = 3;

		  
         


		 
         
         $pedido_con_aprob= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '$aprob_ped'  ");
         $pedido_aprob = mysqli_num_rows($pedido_con_aprob);

         $pedido_con_espera= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '$espera_ped'  ");
         $pedido_espera = mysqli_num_rows($pedido_con_espera);

 
         $cotiza_con_aprob= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '$aprob_cot'  ");
         $cotiza_aprob = mysqli_num_rows($cotiza_con_aprob);

         $cotiza_con_espera= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '$espera_cot'  ");
         $cotiza_espera = mysqli_num_rows($cotiza_con_espera);
         
         

		 $const=0;
		 
		 $con3= ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto` WHERE `producto`.`Stock` =$const  ");
		 $stock_agotado = mysqli_num_rows($con3);
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
    <div class="row">

        <div class="col-lg-6 col-md-6">
            <div class="widget widget-stats hljs-wrapper">
                <div class="stats-icon"><i class="fa fa-tags" style="color: #009fff;"></i></div>
                <div class="stats-info">
                    <h4>TOTAL ARTICULOS</h4>
                    <p><?php echo $prod ?></p>

                </div>
                <div class="stats-link">
                    <a href="actualizarStock.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-6">
            <div class="widget widget-stats hljs-wrapper">
                <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                <div class="stats-info">
                    <h4>ARTICULOS AGOTADOS</h4>
                    <p><?php echo $stock_agotado ?></p>
                </div>
                <div class="stats-link">
                    <a href="actualizarStockAgotado.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>


        
    </div>

    
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="widget widget-stats hljs-wrapper">
                <div class="stats-icon"><i class="fa fa-window-maximize" style="color: #009fff;"></i></div>
                <div class="stats-info">
                    <h4>PEDIDOS APROBADOS</h4>
                    <p><?php echo $pedido_aprob ?></p>

                </div>
                <div class="stats-link">
                    <a href="listaPedidos.php" style="color: #fff;">Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-6">
            <div class="widget widget-stats hljs-wrapper">
                <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                <div class="stats-info">
                    <h4>PEDIDOS EN ESPERA</h4>
                    <p><?php echo $pedido_espera ?></p>
                </div>
                <div class="stats-link">
                    <a href="actualizarPedidos.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>


         

         
    </div>

     
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="widget widget-stats hljs-wrapper">
                <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                <div class="stats-info">
                    <h4>COTIZACIONES APROBADAS</h4>
                    <p><?php echo $cotiza_aprob ?></p>

                </div>
                <div class="stats-link" >
                    <a href="listaCotiza.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-6">
            <div class="widget widget-stats hljs-wrapper">
                <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                <div class="stats-info">
                    <h4>COTIZACIONES EN ESPERA</h4>
                    <p><?php echo $cotiza_espera ?></p>
                </div>
                <div class="stats-link">
                    <a href="actualizarCotiza.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>


        
    </div>

    <!-- end col-10 -->
</div>
<!-- end row -->
</div>