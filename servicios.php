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
	
<!-- CCS REDES SOCIALES  -->
</script>
<script src="https://kit.fontawesome.com/23bdc1261d.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="assets/img/favicon.png">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        media="all">
        
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link href="assets/js/bootstrap-touch-slider.css" rel="stylesheet" media="all">

<!-- CCS REDES SOCIALES  -->

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

	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include 'inc/links.php';?>
	</head>
	<body>
    <style>
  #search-button {
    padding: 25px 18px 0px!important;
  }
  
  #search_button {
    position: relative;
    top: -14px!important;
  }
  </style>
	<?php include 'inc/navbar.php';?>

</nav>
</div>
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Estas Buscando un Soporte Tecnico Para su Empresa ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='formulario_servicios.php'"><span>¿ CONTACTANOS ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Pida su Soporte Tecnico Especializado" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Conozca Cada Uno de Nuestros Servicios o Soporte Tecnico Especializados que Brindamos En las Diferentes Areas del Mundo De la Tecnologia 
    De la Informacion, y de Seguridad,Telecomunicaciones Si Decea Solicitar un Servicio Por favor Contactarnos Mediante de Nuestro Formulario de Contactar.</p>
        
       
		<ul id="filters_index" class="clearfix alinear">
			
			<li><span class="filter ajuste-serv ajuste-serv2" data-filter=".sist"><img src="assets/img/laptop.png"  height="50" width="50" > <b>&nbsp;&nbsp; INFORMATICA <i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
			<li><span class="filter wi active" data-filter=".segu" style="margin-left: 22px; padding-right: 73px;"><img src="assets/img/escudo.png"  height="50" width="50" ><b>&nbsp;&nbsp; SEGURIDAD<i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
			<li><span class="filter wi serv-cand ajuste-serv3" data-filter=".acce" ><img src="assets/img/candado.png"  height="50" width="50" ><b>&nbsp;&nbsp; ACCESO Y CONTROL<i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
			<!--<li><span class="filter" data-filter=".capa"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp; Capacitaciónes<i class="icon-right-open-mini" style="float:right;"></i></span></li>-->
			<li><span class="filter serv-otro wi" data-filter=".otro" ><img src="assets/img/servicio-al-cliente.png"  height="50" width="50" ><b>&nbsp;&nbsp; MAS SERVICIOS<i class="icon-right-open-mini" style="float:right;"></i></b></span></li>
		</ul>
					
            <div id="portfoliolist">
			
			<div class="portfolio sist" data-cat="sist">
			
                                    <div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_webs.php"><div class="icono-atel icon-01"></div></a>
                                        <h4>PAGINAS WEBS</h4>
                                        
	                                    <p><a href="servicio_webs.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-01">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
                                </div>
					

			<div class="portfolio sist" data-cat="sist">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_computo.php"><div class="icono-atel icon-02"></div></a>
                                        <h4>COMPUTO Y SISTEMAS</h4>
                                        
	                                    <p><a href="servicio_computo.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-02">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>		
			
			<div class="portfolio sist" data-cat="sist">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_cableado.php"><div class="icono-atel icon-03"></div></a>
                                        <h4>CABLEADO EIA/TIA</h4>
                                        
	                                    <p><a href="servicio_cableado.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-03">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>				
			<div class="portfolio sist" data-cat="sist">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                       <a href="servicio_radioenlace.php"><div class="icono-atel icon-04"></div></a>
                                        <h4>RADIO ENLACES 5.8</h4>
                                        
	                                    <p><a href="servicio_radioenlace.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-04">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
			<div class="portfolio segu" data-cat="segu">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                         <a href="servicio_camarascctv.php"><div class="icono-atel icon-05"></div></a>
                                        <h4>CAMARAS CCTV-IP</h4>
                                        
	                                    <p><a href="servicio_camarascctv.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-05">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
						
			<div class="portfolio segu" data-cat="segu">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_alarmas.php"><div class="icono-atel icon-06"></div></a>
                                        <h4>ALARMAS DE SEGURIDAD</h4>
                                        
	                                    <p><a href="servicio_alarmas.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-06">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>			
			<div class="portfolio segu" data-cat="segu">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_automatizacion.php"><div class="icono-atel icon-07"></div></a>
                                        <h4>AUTOMATIZACIÓN </h4>
                                        
	                                    <p><a href="servicio_automatizacion.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-07">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
			
			<div class="portfolio acce" data-cat="acce">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_autos.php"><div class="icono-atel icon-08"></div></a>
                                        <h4>SEGURIDAD VEHICULAR</h4>
                                        
	                                    <p><a href="servicio_autos.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-08">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>	
			
			<div class="portfolio segu" data-cat="segu">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_cerco.php"><div class="icono-atel icon-09"></div></a>
                                        <h4>CERCO ELECTRICO</h4>
                                        
	                                    <p><a href="servicio_cerco.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-09">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>																																							
			
			<div class="portfolio acce" data-cat="acce">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                          <a href="servicio_biometrico.php"><div class="icono-atel icon-10"></div></a>
                                        <h4>ACCESO BIOMETRICO</h4>
                                        
	                                    <p><a href="servicio_biometrico.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-10">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>														
			
			<div class="portfolio acce" data-cat="acce">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_videoporteros.php"><div class="icono-atel icon-11"></div></a>
                                        <h4>VIDEO PORTEROS</h4>
                                        
	                                    <p><a href="servicio_videoporteros.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-10">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>				
			
			<div class="portfolio acce" data-cat="acce">
			<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_intercomunicador.php"><div class="icono-atel icon-12"></div></a>
                                        <h4>INTERCOMUNICADORES</h4>
                                        
	                                    <p><a href="servicio_intercomunicador.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-12">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>			
			<div class="portfolio otro" data-cat="otro">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                        <a href="servicio_paneles.php"><div class="icono-atel icon-13"></div></a>
                                        <h4>PANELES SOLARES</h4>
                                        
	                                    <p><a href="servicio_paneles.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-13">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>							

			<div class="portfolio otro" data-cat="otro">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                       <a href="servicio_aireacondicionado.php"><div class="icono-atel icon-14"></div></a>
                                        <h4>AIRE ACONDICIONADO</h4>
                                        
	                                    <p><a href="servicio_aireacondicionado.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-14">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>																								

			<div class="portfolio otro" data-cat="otro">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                         <a href="servicio_electronica.php"><div class="icono-atel icon-15"></div></a>
                                        <h4>ELECTRONICA</h4>
                                        
	                                    <p><a href="servicio_electronica.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-15">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
			</div>				
			
			<div class="portfolio otro" data-cat="otro">
				<div class="text-center services-item wow flipInX" data-wow-offset="10" style="visibility: visible; animation-name: flipInX;">
                                         <a href="servicio_electricidad.php"><div class="icono-atel icon-16"></div></a>
                                        <h4>ELECTRICIDAD</h4>
                                        
	                                    <p><a href="servicio_electricidad.php" style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-16">Ver Mas</a>&nbsp;&nbsp;
                                <a href="formulario_servicios.php"
                                style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg"
                                id="open-01">Contactar</a></p>
                                    </div><!-- /.row -->
				</div>
		
			</div>			
			<div class="d" style=" ">	
			<a class="btonA ajustes" style="color:white;     margin-top: 12px;"><span class="filter active text-category" data-filter=".sist, .segu, .acce, .capa, .otro"><b>&nbsp;&nbsp; VER MAS SERVICIOS</b><i class="icon-right-open-mini" style="float:right;"></i></span></a>
			</div>														
<div >
			
			
	</div>									
			
		</div>
		
	</div><!-- container -->

            	
            	</div>

            	</div></div>


	</section>
	<!-- sucribte  -->

    </section>


    <style>
    .box_subs {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .input_subs {
        width: 75%;
        margin: auto;
        margin-bottom: 22px;
        margin-top: 22px;
    }

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
    <section class="p-5 mt-4 text-center bg-primary box_subs">
        <div class="container p-3">
            <h3>Si te ha gustado, nuestra pagina web y nuestros productos puedes recibir mas en tu correo</h3>
            <form action="process/subscript.php" method="POST">
                <input type="email" name="correo-subs" class="form-control input_subs"
                    placeholder="Ingresa tu Correo Electronico">
                <button type="submit" class="btn btn-warning">Suscribete</button>
            </form>
        </div>
       
    </section>
     <!-- sucribte  -->



	<?php include 'inc/slider_bottom.php';?>
	
	
	
	<?php include 'inc/footer.php';?>
	
	
	
	
	
	<?php include 'inc/scripts.php';?>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: 'all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>



</body>


</html>
