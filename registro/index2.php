<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>::SOLUCIONES CCTV Y SISTEMAS::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="SOLUCIONES">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->


<h3>..</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Lista de Precios </h4>
					
					<a href="pdf/lista de precio.pdf"><small>Descargar Lista</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Descargas de Apps</h4>
					<a href="descargas.php"><small>Descargar Apps</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Tutoriales para Tecnicos</h4>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Capacitaciones de Marcas</h4>
					<a href="descargas.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Catalogos de Productos</h4>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Casos de Éxito</h4>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>

</div><!-- /container -->
    
	</style>
  </body>
</html>
