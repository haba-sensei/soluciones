<!--
Author: Haba_Sensei
Empresa: Elysium 
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

								if(!$_SESSION['NombreAfil']==""){echo ' '.$_SESSION['NombreAfil'].' <small>Modulo de Administración</small>';}
								
								
								
								
								
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
					 $CodArea = $_SESSION['CodigoArea'];
					 switch ($CodArea) {
						 case 1:
							include '../inc/sidebar.php';
						break;
						 
						case 2:
							 
							include '../inc/sidebar_ventas.php';
							 
						 break;
					 }
					 ?>
					
				<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="javascript:">Ordenes</a></li>
				<li class="breadcrumb-item active">Ver Orden</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Actualizar Ordenes<small> Modulo de Ordenes</small></h1>
            
			<?php 

             $NumPedido= $_GET['id_cotizacion'];
			 $type= $_GET['type'];
			 
			?>	
        <div id="caja_orden">
		
		
		</div>
       			
						

<!--
<button type="submit" class="btn btn-sm btn-info button-UPPE" value="res-update-pedido-'.$fila['id_cotizacion'].'"><i style="color:#FFF" class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;&nbsp;Imprimir Cotizacion</button>
-->
				  
    
    
   <?php include '../inc/scripts_interno.php' ?>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        



		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
	<script>
	
	
	</script>


</body>

</html>
    
    
    
    
    
    

