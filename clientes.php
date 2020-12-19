	<!--
Author: SOLUCIONES
Empresa: SOLUCIONES CCTV Y SISTEMAS 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
	<?php
	error_reporting(E_PARSE);
	session_start();
	include 'library/configServer.php';
	include 'library/consulSQL.php';
	include 'library/config.php';

	?>

	<!DOCTYPE html>
	<html lang="en">


	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <?php include 'inc/links.php'; ?>
	</head>

	<body>

	    <?php include_once 'inc/navbar-mobile.php'; ?>
	    <?php include 'inc/navbar-prod.php'; ?>

	    </nav>
	    </div>

	    <?php 
        
if(!$_SESSION['cliente']){
								
    echo "<script>alert('Usted debe ingresar para continuar');  window.location.replace('index.php');</script>";		
    
}


?>
<style>
.close_session {
    width: 50px;
    height: 50px;
    order: 2;
    padding: 5px;
    box-sizing: border-box;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.4) 2px 2px 6px;
    transition: all 0.5s ease 0s;
    position: absolute;
    z-index: 200;
    display: block;
    border: 0px;
    background: rgb(255 159 0) !important;
    right: 3px;
    top: 155px;
}
@media (max-width: 767px) {
	.close_session {
    width: 50px;
    height: 50px;
    order: 2;
    padding: 5px;
    box-sizing: border-box;
    border-radius: 50%;
    cursor: pointer;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.4) 2px 2px 6px;
    transition: all 0.5s ease 0s;
    position: absolute;
    z-index: 200;
    display: block;
    border: 0px;
    background: rgb(255 159 0) !important;
	right: 0;
	top: 91%;
    bottom: 20px;
    left: 17px;
}

}

.bg_cliente {
  /* The image used */
  background-image: url("assets/img/tech.jpg");

  /* Full height */
  height: unset;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo_client {
    font-size: 1.17em;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 50px;
    margin-top: 0px;
    padding-top: 37px;
    color: white;
}
.out_cli {
    color: white;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    display: list-item;
    margin: auto;
    font-size: 30px;
    padding: 4px;
    padding-right: 1px;
}
</style>

<div class="bg_cliente">



	    <h3 class="span titulo_client"  >RECURSOS CERTIFICADOS PARA TECNICOS</h3>
		<h4 class="span " style="text-align: center; color:white;" >Bienvenido <?php echo $_SESSION['cliente']; ?> </h4>
	    <div class="close_session">
	        <a href="process/logout_cli.php"> <i class="fa fa-sign-out out_cli fa-rotate-180" aria-hidden="true"></i></a>
	    </div>



	    <div class="container">
	        <div class="row" >
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>Lista de Precios </h4>
							<a href="javascript:" onclick="modalFrame(1)"><span>Descargar Lista</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>Descargas de Apps</h4>
	                        <a href="descargas.php"><span>Descargar Apps</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>Tutoriales para Tecnicos</h4>
	                        <a href="fi.php"><span>Ver detalles</span></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row" style="padding-bottom: 69px;">
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>Capacitaciones de Marcas</h4>
	                        <a href="descargas.php"><span>Ver detalles</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>Catalogos de Productos</h4>
	                        <a href="fm.php"><span>Ver detalles</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>Casos de Éxito</h4>
	                        <a href="md.php"><span>Ver detalles</span></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>





        </div>





	    </script>

	    <!-- WhatsHelp.io widget -->
	    <script type="text/javascript">
	    (function() {
	        var options = {
	            facebook: "1626920177570816", // Facebook page ID
	            whatsapp: "+51 986838333", // WhatsApp number
	            line: "https://line.me/ti/p/9NRe_hdeb1", // Line QR code URL
	            call_to_action: "Hola, Estamos en Linea las 24h ?", // Call to action
	            button_color: "#FF0000", // Color of button
	            position: "right", // Position may be 'right' or 'left'
	            order: "facebook,whatsapp,line;", // Order of buttons
	        };
	        var proto = document.location.protocol,
	            host = "whatshelp.io",
	            url = proto + "//static." + host;
	        var s = document.createElement('script');
	        s.type = 'text/javascript';
	        s.async = true;
	        s.src = url + '/widget-send-button/js/init.js';
	        s.onload = function() {
	            WhWidgetSendButton.init(host, proto, options);
	        };
	        var x = document.getElementsByTagName('script')[0];
	        x.parentNode.insertBefore(s, x);
	    })();
	    </script>

	    </script>
	    <!-- /WhatsHelp.io widget -->

	    <?php include 'inc/slider_bottom.php'; ?>
	    <?php include 'inc/footer.php'; ?>
	    <?php include 'inc/scripts.php'; ?>




	</body>


	</html>