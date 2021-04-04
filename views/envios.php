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
				<li class="breadcrumb-item"><a href="javascript:;">Envios a Provincia</a></li>
				<li class="breadcrumb-item active">Buscar Envios a Provincia</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Busqueda de Envios a Provincia <small> Modulo de Envios a Provincia</small></h1>
            
             
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
                            
                            <h4 class="panel-title">Lista de Envios a Provincia</h4>
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
                   
                    <th>Opciones</th>
                     
                    
                  </tr>
                  </thead>
                  <tbody >
                      
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
                     


                    if($forma_entrega == "Provincia"){
                ?>
                  
                  <tr>
                     <td><?php echo  $id_coti ?></td>
					 <td><?php echo $fecha_coti ?></td>
                     
                    
                       <td style="display: flex;">
                          <button class="btn btn-block btn-new" style="margin-right: 10px; margin-top: 8px; margin-left: 10px;" ><i class="fas fa-plus fa-fw"></i> Imprimir  </button>
						  <button class="btn btn-block btn-new"  onclick="enviarProvincia(&quot;<?php echo $id_coti ?>&quot;)" style="margin-right: 10px; margin-top: 8px; margin-left: 10px;"  ><i class="fas fa-plus fa-fw"></i> Delivery Enviado a Provincia</button>
                          
                           
                           
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
