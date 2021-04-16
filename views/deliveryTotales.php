<!--
Author: Haba_Sensei
Empresa: ::SOLUCIONES CCTV Y SISTEMAS:: 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php
    
	include '../library/configServer.php';
	include '../library/consulSQL.php';
	include '../process/securityPanel.php';
?>
	
	
	<html lang="en"><!--<![endif]--><head>
	<meta charset="utf-8">
	 <title>::SOLUCIONES CCTV Y SISTEMAS::</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	
	<?php include '../inc/header.php'   ?>
	<body>
	<!-- begin page-cover -->

	<div class="page-cover"></div>
	<!-- end page-cover -->
	
	<!-- begin #page-loader -->

<!--
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
-->

	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Panel</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a  data-toggle="nav-profile">
							
							<div class="info">
							<?php
									include '../inc/titulos_header_admin.php';
								?>
								
							</div>
						</a>
					</li>
					
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header active">Mapa del Sitio</li>
					
					<?php 
					  include '../inc/sidebar.php';
					
					 ?>
					
				<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Despachos</a></li>
				<li class="breadcrumb-item active">Buscar Despachos</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Lista Despachos En Espera<small> Modulo de Despachos</small></h1>
            
             
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
         
<?php 
                        
                        $pedido_con_espera_delivery= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '2'  ");
        $delivery_espera = mysqli_num_rows($pedido_con_espera_delivery);

        $pedido_con_aprob_delivery= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '4'  ");
        $delivery_aprob = mysqli_num_rows($pedido_con_aprob_delivery);
        
        $pedido_con_totales_delivery= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '4' OR `cotizacion_online`.`Estado` = '2'  ");
        $delivery_totales = mysqli_num_rows($pedido_con_totales_delivery);

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
                                    <h4>DELIVERYS ENVIADOS</h4>
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



?>
			
	 <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Lista de Delivery</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
<div class="table-responsive">
							 <table id="clientes_1" class="table table-condensed">
            <thead class="bg-blue">
                  <tr >
                   
                    <th>N° Pedido</th> 
                    <th>Fecha Emision</th>
                    <th>Forma de Entrega</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                     
                    
                  </tr>
                  </thead>
                  <tbody >
                      
                  <?php 
                  
                  $pedido_con_espera_delivery_cons = ejecutarSQL::consultar("SELECT `cotizacion_online`.`id_cotizacion`, `cotizacion_online`.`fecha_cotizacion`, `cotizacion_online`.`Estado`, `detalle_compra_online`.`id_cotizacion`, `detalle_compra_online`.`forma_entrega`
                  FROM `cotizacion_online`
                      , `detalle_compra_online`
                  WHERE `cotizacion_online`.`Estado` BETWEEN '2' AND '4' AND `detalle_compra_online`.`id_cotizacion` = `cotizacion_online`.`id_cotizacion` ");
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
                    <td >
                    <?php 
                    switch ($estado_coti) {
                    case 4:
                    echo 'Enviado';
                    break;

                    case 2:
                    echo 'En Espera';
                    break;

                    }

                    ?>
                      </td>
                    
                       <td style="display: flex;">
                          <a href="../process/pedido/pedido_imprimir.php?num_cotiza=<?=$id_coti?>" target="_blank" class="btn btn-block btn-new"  style="margin-right: 10px; margin-top: 8px; margin-left: 10px;" ><i class="fas fa-plus fa-fw"></i> Imprimir  </a>
                          <?php 
                     switch ($estado_coti) {
                      case 4:
                        echo ' <button class="btn btn-block btn-elim"  onclick="regresarDelivery(&quot;'.$id_coti.'&quot;)" style="margin-right: 10px; margin-top: 8px; margin-left: 10px;"  ><i class="fas fa-minus fa-fw"></i> Delivery Regresado</button>';
                       break;

                       case 2:
                        echo ' <button class="btn btn-block btn-new"  onclick="enviarDelivery(&quot;'.$id_coti.'&quot;)" style="margin-right: 10px; margin-top: 8px; margin-left: 10px;"  ><i class="fas fa-plus fa-fw"></i> Delivery Enviado</button>';
                       break;
                        
                     }
                     
                    ?>
                        
                         
                          
                           
                           
                       </td>
                       
                         
                  </tr>
                    <?php
                   }  }
                    ?> 
                  </tbody>
				</table>
					 </div></div>
                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
                    
                    
                    
                    
                    
                    
                    
			

           
            
          
      <?php include '../inc/scripts_interno.php' ?>
     
        
		
</body>

</html>
