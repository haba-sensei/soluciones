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
                            <li class="breadcrumb-item"><a href="javascript:;">Inventario</a></li>
                            <li class="breadcrumb-item active">Añadir Articulos</li>
                        </ol>
                        <!-- end breadcrumb -->
                        <!-- begin page-header -->
                        <h1 class="page-header">Busqueda de Articulos <small> Modulo de Almacen</small></h1>
                        <?php 

$con1= ejecutarSQL::consultar("SELECT * from producto");
$prod = mysqli_num_rows($con1);

$con2= ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto` WHERE `producto`.`Stock` ='0' ");
$stock_agotado = mysqli_num_rows($con2);

$con3= ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`Stock` FROM `producto` WHERE `producto`.`Stock` >= '1' ");
$stock_abilitado = mysqli_num_rows($con3);


echo '  <div class="row">
    
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
</div>';


?>

<style>
div.dataTables_wrapper div.dataTables_info {
    padding-top: 0px;  
     white-space: unset;
     /* overflow-x: hidden!important; */
}
</style>


                        <div class="panel panel-inverse">
                            <!-- begin panel-heading -->
                            <div class="panel-heading" style="    display: flex;">

                                <h4 class="panel-title">Articulos Agotados</h4>
                                <span
                                    style="position: relative; left: 71%;"><?php echo "Taza del Dia ".$globalTasaCambio_dolar; ?></span>
									<input type="hidden" id="tasa_cambio_dia" value="<?php echo $globalTasaCambio_dolar; ?>">
                            </div>
                            <!-- end panel-heading -->
                            <!-- begin panel-body -->

                            
                            <div class="panel-body">
                                <div class="table-responsive" style="">
                                    <table id="agotado_table" class="table table-condensed display responsive nowrap" style="width:100%" >
                                        <thead class="bg-red">
                                            <tr>
                                            <th>Imagen</th>
                                                <th>Cod</th>
                                                <th>Articulo</th>
                                                <th>Modelo</th> 
                                                <th>Marca</th>
                                                <th>Compra</th>
                                                <th>Venta</th>
                                                <th>Opciones</th>
                                                <th>Detalle</th> 
                                                <th>Categoria</th>
                                                <th>Stock</th>
                                                <th>Peso</th>
                                                <th>CodBarras</th>
                                                <th>UniTMedida</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
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