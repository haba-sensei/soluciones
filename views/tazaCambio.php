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
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
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
				<li class="breadcrumb-item"><a href="javascript:;">Taza Cambio</a></li>
				<li class="breadcrumb-item active">Añadir Taza Cambio</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Añadir Taza Cambio<small> Modulo de Taza Cambio</small></h1>
            
             
       <div class="panel panel-inverse"  style="">
                        <!-- begin panel-heading -->
                        <div class="panel-heading ">
                            
                            <h4 class="panel-title">Formulario de registro de la Taza Cambio <label style="float:right;"><div id="res-form-add-categoria" style=""></div> </label></h4>
                        </div>
                    <!-- begin panel-body -->
                        <div class="panel-body">
				<style>
                    h2 {
                        color: #0d74b3 !important;
                        font-weight: 700;
                    }

                </style>
        <div class="col-xs-12 col-sm-6" style="margin-left:25%;">
                            <br><br>
                           
                           <?php 
                           
                                $taza_dia_cons = ejecutarSQL::consultar("SELECT `taza_cambio`.*, `taza_cambio`.`id` FROM `taza_cambio` WHERE `taza_cambio`.`id` = '1';");
                            
                                while($tazaC=mysqli_fetch_array($taza_dia_cons)){ 
                                $compra_dolar=$tazaC['taza'];        
                                }

                                $globalTasaCambio_dolar = number_format($compra_dolar, 2);
                           
                           
                           ?>
                                 
                                    <div class="form-group">
                                        <label>Taza De Cambio</label>
                                        <input class="form-control" type="text" id="tazaCambio" value="<?php echo $globalTasaCambio_dolar;  ?>" >
                                    </div>
                                     
                                    <p class="text-center">
                                    
                                    <button type="button" onclick="regTaza()" class="btn btn-primary">Actualizar Taza Cambio</button>
                                    <?php 
                                     date_default_timezone_set("America/Lima");
                                     
                                     $fecha = date("Y-m-d"); 
                                    
                                    ?>
                                    <a href="https://api.sunat.cloud/cambio/<?=$fecha?>" class="btn btn-primary" target="_blank" >Consulta del Dia</a>
                                    </p>
                                    
                                   
                            
                            </div>
                        </div>
         
          </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                  </div>             
             
  <?php include '../inc/scripts_interno.php' ?>

 <script>
        function regTaza(){
            tazaCambio = document.getElementById('tazaCambio').value;
       
        $.ajax({
            type: "POST",
            url: "../process/tazaCambioController.php",
            data: {
                tazaCambio: tazaCambio,
            }, 
            success: function(data) {  
                
                swal("Agregado con Exito", "", "success");  
                setTimeout(function(){  location.reload(); }, 2500);
               
            }
        }); 


    }
                                    
    </script>
</body>

</html>
