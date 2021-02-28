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
	<link rel="shortcut icon" href="assets/img/favicon.png">
<!-- ACA  -->
<style>
@media (max-width: 767px) {
    /* .bann{
        display:none;
    } */
}

.bann {
    background: #00b3e3;
    color: white;
    font-weight: 700;
    font-size: 14px;
    text-align: center;
    padding-top: 16px;
    padding-bottom: 16px;
}

.ajust_login_new {
    color: #333;
    border-radius: 6px;
    padding: 7px 14px;
    background: white;
    margin-left: 99px;
}

@media (max-width: 767px) {
    .bann_1 {
        display: none;
    }

    .ajust_login_new {
        margin-left: 0px;
        margin-top: 9px;
        display: inline-block;
    }

    .img_ajust_new {
        height: 29px;
    }
    #content-area5 .caption {
    position: absolute!important;
    top: 40%!important;
    padding: 90px 0 178px!important;
    }
    #content-area5 .landing {
    float: left;
    width: 82%!important;
    overflow: hidden;
    position: relative;
    }
    #content-area5 {
    background: url(assets/img/bg/bg5_movil.jpg) no-repeat center center;
    background-size: cover;
    height: 63%;
    }
}
</style>
<div class="">
    <a href="infoCat.php?CodigoCat=C000008">
        <img alt="" class="img_ajust_new" src="assets/img/1.gif" style="width: 100%;">
    </a>
</div>
<div class="bann">

    <span> Recibe un DESCUENTO EXCLUSIVO en tu primera COMPRA al registrarse en nuestra tienda en linea. </span>
    <a href="javascript:" class="ajust_login_new" onclick="mostrarLogin();"><i class="icon-user"></i> LOGIN CLIENTES
    </a>

</div>
<!-- aqui -->

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
    top: 280px;
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
    position: relative;
    z-index: 200;
    display: block;
    border: 0px;
    background: rgb(255 159 0) !important;
	right: 0;
	top: 91%;
    bottom: 20px;
    left: 300px;
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



	    <h3 class="span titulo_client"  >LISTA DE PRECIOS DE PRODUCTOS</h3>
		<h4 class="span " style="text-align: center; color:white;" >Bienvenido <?php echo $_SESSION['cliente']; ?> </h4>
	    <div class="close_session">
	        <a href="process/logout_cli.php"> <i class="fa fa-unlock out_cli " aria-hidden="true"></i> </a>
	    </div>



	    <div class="container">
	        <div class="row" >
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>LISTA COMPUTO Y INFORMÁTICA </h4>
							<a href="lista_precios/lista_computo.pdf" onclick="modalFrame(1)"><span>Ver Lista / Descargar</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>LISTA REDES Y RADIO ENLACE</h4>
	                        <a href="lista_precios/lista_redes.pdf"><span>Ver Lista / Descargar</span></a>
	                    </div>
	                </div>
	                
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>LISTA CÁMARAS CCTV-IP</h4>
	                        <a href="lista_precios/lista_cctv.pdf"><span>Ver Lista / Descargar</span></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row" style="padding-bottom: 69px;">
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>LISTA ALARMAS Y DOMOTICA</h4>
	                        <a href="lista_precios/lista_alarma.pdf"><span>Ver Lista / Descargar</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>LISTA ACCESO Y CONTROL</h4>
	                        <a href="lista_precios/lista_biometrico.pdf"><span>Ver Lista / Descargar</span></a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="span2">
	                    <div class="well well-small">
	                        <h4>LISTA INTERCOMUNICACION</h4>
	                        <a href="lista_precios/lista_videoportero.pdf"><span>Ver Lista / Descargar</span></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

        </div>
        

 </section>
	    </script>

	    <!-- WhatsHelp.io widget -->
	    <script type="text/javascript">
	    (function() {
	        var options = {
	            facebook: "1626920177570816", // Facebook page ID
	            whatsapp: "+51 986838333", // WhatsApp number
	            line: "https://line.me/ti/p/9NRe_hdeb1", // Line QR code URL
	            call_to_action: "Hola, Estamos en Linea las 24h!", // Call to action
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
		<style>
		.social-bar{
			display:none!important;
		}
		</style>
	    <?php include 'inc/slider_bottom.php'; ?>
	    <?php include 'inc/footer.php'; ?>
	    <?php include 'inc/scripts.php'; ?>




	</body>


	</html>
