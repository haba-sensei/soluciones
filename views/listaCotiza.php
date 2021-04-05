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


<html lang="en">
<!--<![endif]-->

<head>
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
                        <a data-toggle="nav-profile">

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
                            <li class="breadcrumb-item"><a href="javascript:;">Cotizacion</a></li>
                            <li class="breadcrumb-item active">Lista de Cotizacion</li>
                        </ol>
                        <!-- end breadcrumb -->
                        <!-- begin page-header -->
                        <h1 class="page-header">Lista de Cotizacion <small> Modulo de Cotizacion</small></h1>
                        <div class="row">

                            <?php 

                            $cotiza_con_total= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '0' OR `cotizacion_online`.`Estado` = '3'  ");
                            $cotiza_total = mysqli_num_rows($cotiza_con_total);

                            $cotiza_con_aprob= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '3'  ");
                            $cotiza_aprob = mysqli_num_rows($cotiza_con_aprob);

                            $cotiza_con_espera= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`Estado` FROM `cotizacion_online` WHERE `cotizacion_online`.`Estado` = '0'  ");
                            $cotiza_espera = mysqli_num_rows($cotiza_con_espera);
                            ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="widget widget-stats hljs-wrapper">
                                    <div class="stats-icon"><i class="fa fa-minus-circle" style="color: #ef2121;"></i></div>
                                    <div class="stats-info">
                                        <h4>COTIZACIONES EN ESPERA</h4>
                                        <p> <?=$cotiza_espera?> </p>
                                    </div>
                                    <div class="stats-link">
                                        <a href="actualizarCotiza.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="widget widget-stats hljs-wrapper">
                                    <div class="stats-icon"><i class="fa fa-window-restore" style="color: #009fff;"></i></div>
                                    <div class="stats-info">
                                        <h4>COTIZACIONES APROBADAS</h4>
                                        <p> <?=$cotiza_aprob?> </p>

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
                                        <h4>COTIZACIONES TOTALES</h4>
                                        <p> <?=$cotiza_total?></p>

                                    </div>
                                    <div class="stats-link">
                                        <a href="listaCotiza.php" style="color: #fff;"> Ver Mas <i class="fa fa-arrow-alt-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <?php include '../process/cotiza/cotiza.php'; ?>



                        <?php include '../inc/scripts_interno.php' ?>
</body>

</html>