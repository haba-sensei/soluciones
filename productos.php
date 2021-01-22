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

	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <?php include 'inc/links.php'; ?>
	</head>

	<body>

	    <?php include_once 'inc/navbar-mobile.php'; ?>
	    <?php include 'inc/navbar-prod.php'; ?>

	    </nav>
	    </div>
	 <section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container  animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Estas Buscando un Producto Para su Hogar, Empresa ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='view_cart.php'"><span>¿ COTIZA AQUI ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Compra Tus Productos en Linea" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Productos en Oferta por Liquidacion 10% de Descuento al Publico en General 20% de Descuento solo Tecnicos Instaladores, Que Esten Registrado
     en Nuestra Web y si es Un Cliente Que Compra en Nuestra Tienda en Linea o Web Tiene un 30% de descuento en Toda Nuestras Sucursales.</p>
        
       </section>
			
	    <?php include 'inc/categorias.php'; ?>

	    <div class="col-md-9 col-sm-9 col-xs-12 ali-prod-top-2">
	        <div class="shop-content">


	            <div class="tab-content">
	                <div id="grid-view" class="tab-pane active">


	                    <?php


						while ($row = mysqli_fetch_array($retval,  MYSQLI_ASSOC)) {
							$precio = $row['Precio']; 
							$ganancia = $row['ganancia'];
							$medio = $row['medio'];
							$total_prod = $precio * ($ganancia + $medio) / 100 + $precio;
							$p_p = ($precio * 25 / 100);
							$p_p_a =  $total_prod + $p_p;
							$p_p_r = round($p_p_a, 0, PHP_ROUND_HALF_DOWN);
							echo "<form class='product-form'>
            <div class='col-md-4 col-sm-6 col-xs-12 prod-ajust' >
		    <div class='shop-product'>
	        <div class='product-box'>" .
								"<a href='infoProd.php?CodigoProd={$row['CodigoProd']}' class='item-image'><img value='{$row['Imagen']}' style='border: solid 1.2px; border-bottom: none;'  height='250px' width='500' src='assets/img-products/{$row['Imagen']} ' alt=''></a>" .
								"<div class='cart-overlay'></div>" .
								"<div class='actions'>
								<div class='add-to-links'>
			
								<input name='product_qty' type='hidden' value='1'>" .
								"<input name='CodigoProd' type='hidden' value='{$row['CodigoProd']}'>" .
								"<button  class='btn-cart  my-cart-btn btn-common' type='submit'><i class='icon-basket'></i>&nbsp;&nbsp;Añadir</button>" .
								"<a class='btn-quickview md-trigger' href='infoProd.php?CodigoProd={$row['CodigoProd']}'><i class='icon-eye'></i>&nbsp;&nbsp;Ver Producto</a>" .
								"</div>
								</div>
		    
		    </div>" .
								"<div class='' style='padding: 0px 15px 0px; border-top: 1px dashed; padding-right: 9px; padding-left: 12px; background: #eae8e8e6; border-left: 1px dashed; border-right: 1px dashed;'>" .
								"<h4 class='product-title' style='    margin-top: 52px;'>" .
								"<a style=' font-size: 12px; margin: -31px 0px;position: absolute; margin-right: 27px;  font-size: 14px;' href='infoProd.php?CodigoProd={$row['CodigoProd']}'> {$row['NombreProd']}</a>" .
								"</h4>" .
								"<h5 class='price' style='position: absolute; margin-right: 27px;  margin-top: 5px;  font-size: 13px;'><a >{$row['Modelo']} - {$row['Marca']} </a></h5><br>" .
								"<h5 class='price' style='position: absolute; margin-right: 27px;  margin-top: 11px;  font-size: 15px;'> Antes: <s>{$row['moneda']} {$p_p_r}.00 </s>&nbsp;&nbsp; 25 % DCTO</h5>" .
								"<div style='width: 107%; margin-left: -12px; border-top: 1.2px dashed;'></div>".
								"<div id='ribbon2' style='font-weight:1000;'><span id='contento'>{$row['moneda']} {$total_prod}</span>  <img src='assets/img/tarjeta.png' width='50px' height='30px' ></span> <img src='assets/img/envio.png' width='50px' height='30px' ></div></div>" .
								"</form></div></div>";
						}
						echo "</div></div> 
         <div class='text-center'>
         <ul class='pagination m-t-0'>
         ";

						$final = $rec_count / $rec_limit;
						$start = (($page - $final) > 0) ? $page - $final : 0;
						$end  = (($page + $final) < $final) ? $page + $final : $final;
						$end_format = round($end, 0, PHP_ROUND_HALF_DOWN);

						if ($page == 0) {

							for ($i = $start; $i <= $end; $i++) {
								$class  = ($page == $i) ? "active" : "";
								$sig = ($page + $i);
								echo "<li class=" . $class . "><a href = \"productos.php?page=$sig\"> $i </a></li>";
							}
							$dale  = ($page + 1);
							echo "<li ><a href = \"productos.php?page=$dale\">Siguiente</a></li>";
						} else if ($page > 0) {
							$atras  = ($page - 1);
							echo "<li ><a href = \"productos.php?page=$atras\">Previo</a></li>";
							for ($i = $start; $i <= $end; $i++) {

								$class  = ($page == $i) ? "active" : "";

								echo "<li class=" . $class . "><a href = \"productos.php?page=$i\"> $i </a></li>";
							}

							if ($page == $end_format) {
								$dale  = ($page);
								echo "<li class='disabled'><a href = \"productos.php?page=$dale\">Siguiente </a></li>";
							} else {
								$dale  = ($page + 1);
								echo "<li ><a href = \"productos.php?page=$dale\">Siguiente</a></li>";
							}
						} else if ($rec_limit >  $rec_count) {
							echo "$rec_limit.$rec_count";
						} else if ($rec_count < $rec_limit) { }
						echo "</ul></div></div>";



						?>


	                </div>
	                <!-- END search-sidebar -->
	            </div>
	            <!-- END search-container -->
	        </div>
	        <!-- END container -->
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
<!-- sucribte  -->

    </section>


    <style>
    .box_subs {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .input_subs {
        width: 50%;
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
            <h3>SUBSCRIBETE AHORA</h3>
            <form action="process/subscript.php" method="POST">
                <input type="email" name="correo-subs" class="form-control input_subs"
                    placeholder="Ingresa tu Correo Electronico">
                <button type="submit" class="btn btn-warning">Subscribete</button>
            </form>
        </div>
       
    </section>
     <!-- sucribte  -->
	    <?php include 'inc/slider_bottom.php'; ?>
	    <?php include 'inc/footer.php'; ?>
	    <?php include 'inc/scripts.php'; ?>




	</body>


	</html>
