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
	<?php include_once 'inc/navbar.php';?>
	

</nav>
</div>
	
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Bienvenidos a Soluciones Cctv y Sistemas ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='contacto.php'"><span>¿ CONTACTANOS ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Soluciones Cctv & Sistemas" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Listo para empezar un proyecto con nosotros? Contáctenos a través de nuestros Formulario de Contactar. o por otros medios de contactos, 
    números telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>
		
		<div class="row">
				<div class="col-sm-4 ">
					<h3 style=" color: #fd0000;  font-size: 20px;">Nosotros:</h3>
					<p ALIGN="justify">
						Estimados Sres: 
						De nuestra consideración Para nosotros es un placer presentar nuestra empresa. Nos dirigimos  a  Usted para presentarnos  como <strong>SOLUCIONES CCTV & SISTEMAS S.A.C.</strong> Una empresa líder en el rubro de sistemas integrales, de seguridad y vigilancia, redes y conetividad, sistema informático en general.  Nuestra empresa comienza a prestar servicio a grandes y a mediana empresas de diversos rubros, consiguiendo un excelentes resultados con cada uno de nuestros clientes.
					</p>
					<h3   style="  color: #fd0000;  font-size: 20px;">Misión</h3>
					<p ALIGN="justify">
						<strong>“SOLUCIONES CCTV & SISTEMAS S.A.C.”</strong> es una empresa que brinda soluciones tecnológicas cumpliendo con las necesidades de nuestros clientes con el objetivo de trabajar con estándares de calidad, sirviendo como mejor lo podemos hacer.
						</p>
					<h3     style=" color: #fd0000;  font-size: 20px;">Visión</h3>
					<p ALIGN="justify">
						Que <strong>“SOLUCIONES CCTV & SISTEMAS S.A.C.”</strong> sea una empresa líder en la que se puede confiar para solucionar los problemas tecnológicos de todos nuestros clientes y  empresas.
						
						</p>
				</div>
				<div class="ajust-nos "></div>
				<div class="col-sm-7 col-sm-offset-1 ">
					<ul class="feat" id="about" style="    list-style: none;">
						<li>
							<i class="icon_check_alt2"></i>
							<h4>PUNTUALIDAD</h4>
							<p>
								Nos enfocamos en cumplir con lo acordado de una manera profesional y eficiente.
								</p>
						</li>
						<li>
							<i class="icon_check_alt2"></i>
							<h4>CONFIANZA</h4>
							<p>
								Todos nuestros productos y servicios estan enfocados en la economia de usted.
								</p>
						</li>
						<li>
							<i class="icon_check_alt2"></i>
							<h4>COMPROMISO</h4>
							<p>
								Tenemos grandes tecnicos especializados en todas las areas de servicios ofrecidos.
								</p>
						</li>
						<li>
							<i class="icon_check_alt2"></i>
							<h4>SERIEDAD</h4>
							<p>
								Ofrecemos garantias de nuestros productos y servicios de la mano con las mejores marcas del mercado. 
							</p>
						</li>
					</ul>
				</div>
			

			</div>
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


</body>


</html>
