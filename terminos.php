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
    background: url(assets/img/bg/bg5_movil.jpeg) no-repeat center center;
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

    <span> Recibe Un DESCUENTO EXCLUSIVO En Tu Primera COMPRA al Registrarse En Nuestra Tienda En Linea. </span>
    <a href="javascript:" class="ajust_login_new" onclick="mostrarLogin();"><i class="icon-user"></i> LOGIN CLIENTES</a>

</div>
<!-- aqui -->


	<head>
	<?php include 'inc/links.php';?>
	</head>
	<body>
	<?php include 'inc/navbar.php';?>
	


</nav>
</div>



<iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=f7ka78mh6&bgcolor=EEEEEE&t=1552517520" width="100%" height="440px" seamless="seamless" scrolling="no" frameBorder="0"         allowFullScreen></iframe>


<?php include 'inc/slider_bottom.php';?>
	<?php include 'inc/footer.php';?>
	<?php include 'inc/scripts.php';?>


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


	</body>
	
	
	</html>
