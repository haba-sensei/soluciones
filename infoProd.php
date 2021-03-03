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

$CodProd = $_GET['CodigoProd'];

$productoinfo2 =  ejecutarSQL::consultar("SELECT * FROM producto WHERE `producto`.`CodigoProd` = '$CodProd';");
while ($fila2 = mysqli_fetch_array($productoinfo2)) {

    $imagen =  $fila2['Imagen'];
    $nombre =  $fila2['NombreProd'];
    $detalle =  $fila2['TecDetalle'];
    $codigoCat =  $fila2['CodigoCat'];

?>
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="shortcut icon" href="assets/img/favicon.png">
<!-- CCS REDES SOCIALES  -->
</script>
<script src="https://kit.fontawesome.com/23bdc1261d.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="assets/img/favicon.png">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
<link href="assets/js/bootstrap-touch-slider.css" rel="stylesheet" media="all">

<!-- CCS REDES SOCIALES  -->

<!-- ACA  -->
<style>
@media (max-width: 767px) {

    .box-language {
        background: #fff !important;
    }

    .pod-badges-PDP.jsx-1231170568 {
        position: relative !important;
        left: -208px !important;
        top: 41px !important;
    }

    .pod-badges-PDP.jsx-1231170568 .pod-badges-item.jsx-1231170568 {
        padding: 8px 17px !important;

    }

    .bann_contacto {
        display: none !important;
    }

    .precio_coti_compra {
        position: absolute;
        left: 46px;
        bottom: 75px;
    }

    .unidad_disponible {
        position: absolute;
        left: 47px;
        bottom: 62px;
    }

    .agregar_bolsa {
        position: absolute;
        top: 92vh;
        left: 43px;
        width: 66% !important;
    }


    .termino_uso {

        position: absolute;
        left: 25px;
        top: 152vh;
        width: 84%;
    }

    .caja_detalles {

        padding-bottom: 95vh !important;

    }

    .ajuste_caja_titulo_lateral {
        width: 50% !important;
    }

    .caract_dest {
        position: absolute;
        left: 14px;
        bottom: -27vh;
    }

    .garantia_calidad {
        position: absolute;
        left: -56px;
        top: 131vh;
    }

    .tipo_entrega_protocolos {

        position: absolute;
        left: 36px;
        bottom: -122vh;


    }

    .social-bar {
        position: fixed;
        right: 0;
        top: 45% !important;
        font-size: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        z-index: 100;
    }



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
        position: absolute !important;
        top: 40% !important;
        padding: 90px 0 178px !important;
    }

    #content-area5 .landing {
        float: left;
        width: 82% !important;
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


    <div id="fb-root"></div>
    <script crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v5.0"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ecommerce">


    <meta property="og:url" content="http://solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $CodProd; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $nombre; ?>" />
    <meta property="og:description" content="<?php echo $detalle; ?> " />
    <meta property="og:image" content="http://solucionescctvysistemas.com/assets/img-products/<?php echo $imagen; ?>" />
    <meta property="fb:app_id" name="fb_app_id" content="116012569850580" />

    <?php }  ?>

    <title>:: SOLUCIONES CCTV & SISTEMAS S.A.C ::</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <?php include 'inc/links.php'; ?>
    <link rel="stylesheet" media="screen, projection" href="assets/zoom/drift-basic.css">
    <link rel="stylesheet" media="screen, projection" href="assets/css/producto.css">
    <link rel="stylesheet" href="assets/infoprod/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/infoprod/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/infoprod/css/owl.theme.css">
    <link rel="stylesheet" href="assets/infoprod/css/owl.transitions.css">
    <!-- nivo slider CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="assets/infoprod/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- jquery-ui CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/jquery-ui.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/normalize.css">
    <link rel="stylesheet" href="assets/infoprod/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="assets/infoprod/css/responsive.css">
    <link rel="canonical" href="assets/css/style_detalle.css" class="next-head" />
    <?php include 'assets/css/detalles_css.php'; ?>
    <script src="assets/infoprod/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .ajuste_infoprod {
        padding-top: 7px !important;
    }

    .ajuste2_infoprod {
        padding: 10px 5px !important;
    }
    </style>
</head>

<body>
    <?php
        $paddin = "padding: 4px 18px 0px!important;";
        include 'inc/navbar.php'; ?>
    </nav>
    </div>
    </nav>
    </div>
    <section class="bann_contacto" style="    background: #f5f5f5;     padding-bottom: 1%;">
        <div id="get_quote" class="ajuste">
            <div class="container animated fadeInUp">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="hidden-xs">¿ Compra Tus Productos + Envio a Domicilio o Recojo en Tienda ?</h3>
                    </div>
                    <div class="col-md-3">
                        <button class="button-two bton-serv hidden-xs" onclick="window.location.href='view_cart.php'"><span>¿ COMPRA AQUI
                                ?</span></button>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div>
        <div class="container" id="service" style="    margin-top: -11px;">
            <h1 class="section-title txt-rotate hidden-xs" data-period="2000" data-rotate='[ "Compra Tus Productos en Linea" ]'>
            </h1>
            <hr style="margin-bottom: 1px solid #333;">
            <p class="mb-5 hidden-xs" style="margin-top: 17px;
                    margin-bottom: 23px;" align="center">Las programaciones de entrega se realizaran progresivamente una vez hecho la
                compra usando los protocolos de seguridad. Únicamente ingresan los envíos por compras de ( $.150 a mas ) Las compras minimas
                realizadas solo recojo en tienda tus pagos de compra
                puedes realizar a través de transferencia o pago efectivo en nuestras tiendas ( consultar al asesor de ventas ).</p>

    </section>

    <?php
                $CodProd = $_GET['CodigoProd'];
                //print_r($CodProd);
                $productoinfo =  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`CodigoProd`, `perfil`.*
                FROM `producto`
                    , `perfil`
                WHERE `producto`.`CodigoProd` = '$CodProd';");
                while ($fila = mysqli_fetch_array($productoinfo)) {
                    $disponible = $fila['Stock'];
                    $imagen =  $fila['Imagen'];
                    $categoria =  $fila['CodigoCat'];

                    $precio_dolar = $fila['Precio'];
                    $precio_sol = number_format($precio_dolar * $globalTasaCambio_dolar, 2);
                     
                    $precio_dolar_tarj = number_format($precio_dolar * 5 / 100 + $precio_dolar, 2);
                    $precio_sol_tarj =  number_format($precio_sol * 5 / 100 + $precio_sol, 2);

         ?>
    <style>
    .disponible {
        background: red;
        padding: 9px;
        position: absolute;
        color: white;
        font-size: 16px;
        font-weight: 600;
        border-radius: 5px;
    }
    </style>

    <form class="product-form">

        <div class="container">
            <div class="row">
                <div class="col-md-4" style="    border: solid 2px #eee;">
                    <span class="jsx-1130257793 disponible">Disponible</span>
                    <img id="product-zoom" src="assets/img-products/<?php echo  $imagen; ?>"
                        data-zoom-image="assets/img-products/<?php echo $imagen; ?>" alt="" style="width: 700px; height: 350px;" width="800"
                        height="800" class="jsx-2487856160" />
                        <meta property="og:site_name" content="">
                        <meta property="og:title" content="" />
                        <meta property="og:description" content="" />
                        <meta property="og:image" itemprop="image" content="assets/img-products/<?php echo  $imagen; ?>">
                        <meta property="og:type" content="website" />
                        <meta property="og:updated_time" content="1440432930" />
                </div>

                <div class="col-md-4">
                    <h1 class="jsx-3686231685" style="margin-bottom: 43px;"> <?php echo $fila['NombreProd']; ?> </h1>

                    <div class="jsx-3624412160 specifications-container fa--product-characteristic-features caract_dest">
                        <div class="jsx-3624412160 specifications-title">Características destacadas</div>
                        <div class="jsx-3624412160 specifications-list">
                            <ul class="jsx-3624412160" style="    font-size: 16px;">
                                <li class="jsx-3624412160"><strong class="jsx-3624412160" style="padding-left: 6px;">Código</strong>:
                                    <?php echo $fila['CodigoProd']; ?>
                                </li>
                                <li class="jsx-3624412160"><strong class="jsx-3624412160" style="padding-left: 6px;">Marca</strong>:
                                    <?php echo $fila['Marca']; ?>
                                </li>
                                <li class="jsx-3624412160"><strong class="jsx-3624412160" style="padding-left: 6px;">Modelo</strong>:
                                    <?php echo $fila['Modelo']; ?>
                                </li>

                                <li class="jsx-3624412160"><strong class="jsx-3624412160" style="padding-left: 6px;">Estado</strong>:
                                    <?php echo $fila['Detalle']; ?>
                                </li>
                                <li class="jsx-3624412160"><strong class="jsx-3624412160" style="padding-left: 6px;">Peso</strong>:
                                    <?php echo $fila['Peso']; ?>
                                </li>
                                <li class="jsx-3624412160"><strong class="jsx-3624412160" style="padding-left: 6px;">Stock</strong>:

                                    <a href="javascript:" class=""
                                        style="background: green; color: white; padding: 3px; margin-left: 4px; font-weight: 600;"> Consultar </a>
                                </li>
                                <!-- <button type="button" class="btn btn-primary btn-sm">Consultar Stock</button> -->
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="col-md-4">



                    <div class="current-price " style="padding-top: 22px;">


                        <ul style="display: grid; grid-template-columns: repeat(2,50%); text-align: center; margin-left: -50px">

                            <span class=""
                                style="position: absolute; left: 18px; top: 10px; font-size: 17px; color: #e83028; font-weight: 600; text-transform: uppercase;">
                                Pago con efectivo</span>
                            <li style="border-right-color: #ff6600; border-right-style: solid; margin-top: 28px;"><span id="our_price_display"
                                    class="price observaprecion" style=" color: #1d841d;  font-weight: 600;    font-size: 26px;">$ <?=$precio_dolar ?>
                                </span></li>
                            <li style="margin-top: 28px;"><span style=" font-size: 26px;  color: #fc0000; font-weight: 600;">S/
                                    <?= $precio_sol?></span> </li>
                            <span class=""
                                style="position: absolute; left: 18px;    top: 89px; font-size: 17px; color: #e83028; font-weight: 600; text-transform: uppercase;">
                                Pago con tarjeta</span>
                            <li style="border-right-color: #ff6600; border-right-style: solid;     margin-top: 43px;"><span id="our_price_display"
                                    class="price observaprecion" style=" color: #1d841d;  font-weight: 600;    font-size: 26px;">$
                                    <?= $precio_dolar_tarj ?>
                                </span></li>
                            <li style="margin-top: 43px;"><span style=" font-size: 26px;  color: #fc0000; font-weight: 600;">S/
                                    <?= $precio_sol_tarj ?></span> </li>
                        </ul>


                    </div>



                    <div class="row">
                        <div class="col-12" style=" position: relative;  top: 35px;">
                            <div class="jsx-2170457292 addToCart-container fa--add-to-cart__desktop agregar_bolsa ">
                                <div id="buttonForCustomers">
                                    <input name="product_qty" type="hidden" value="1">
                                    <input name="CodigoProd" type="hidden" value="<?php echo $CodProd ?>">
                                    <button type="submit" class="jsx-1816208196 button btn-cart my-cart-btn button-primary button-primary-xtra-large">
                                        <i class="icon-basket-loaded"></i> Agregar a la Bolsa
                                    </button>
                                </div>
                            </div>

                        </div>
                        <?php 

                       
                        $var_telefono = "986838333";
                         
                        $link_sala = "%0A%0Ahttps://solucionescctvysistemas.com/infoProd.php?CodigoProd=".$CodProd."";
                        
                        $final_sala = "%0A%0AAtentamente+Soluciones+CCTV+y+Sistemas+SAC.";

                        $texto_saludo = "&amp;text=HOLA+QUIERO+COTIZAR+ESTE+PRODUCTO.".$link_sala.$final_sala;

                        $base = "https://api.whatsapp.com/send?phone=51".$var_telefono.$texto_saludo;


                        ?> 

                        <div class="col-md-6"
                            style="    padding-left: 6px;  padding-right: 0px;  width: 40%; border: solid 1px gray; padding-top: 8px; padding-bottom: 8px; margin-top: 23px; margin-right: 8px;">
                            <a href="<?=$base?>" class="" target="blank_">
                                <img src="assets/img/whatsapp_3.svg"
                                    style="float: left; max-height: 21px; position: absolute; left: -61px;">
                                <span class="bq-at-txt" style="padding-top: 4px; position: relative;  left: 34px;">Cotizar Whatsapp</span>
                            </a>
                        </div>

                        <div class="col-md-6"
                            style="padding-left: 13px; padding-right: 0px; width: 45%; border: solid 1px gray; padding-top: 8px; padding-bottom: 8px; margin-top: 23px;">
                            <a href="" class="">
                                <img src="https://www.magitech.pe/skin/frontend/ultimo/default/images/bq-at-cotizar.png"
                                    style="float:left;    max-height: 28px;">
                                <span class="bq-at-txt" style="padding-top: 4px;">Consultar Delivery</span>
                            </a>
                        </div>

                        <div class="col-md-6" style="padding-left: 0px; padding-top: 20px; padding-right: 0px; width: 42%;">
                            <a href="#contactenos" class="informacion-button"><i class="fas fa-phone-alt" aria-hidden="true"></i> Consultar Stock
                            </a>
                        </div>

                        <div class="col-md-6" style="padding-left: 0px; padding-top: 20px; padding-right: 0px; width: 45%;">
                            <a href="#contactenos" style="padding-right: 40px;" class="informacion-button"><i class="fas fa-phone-alt"
                                    aria-hidden="true"></i> Contacta un Asesor
                            </a>
                        </div>

                        <!-- <div class="col-md-6" style="padding-left: 0px; padding-top: 20px; padding-right: 0px; width: 45%;">
                        <a href="#contactenos" style="padding-right: 18px;" class="informacion-button"><i class="fas fa-phone-alt" aria-hidden="true"></i> Agenda una LLamada </a>

                        </div>

                        <div class="col-md-6" style="padding-left: 0px; padding-top: 20px; padding-right: 0px; width: 45%;">
                        <a href="#contactenos" style="padding-right: 18px;" class="informacion-button"><i class="fas fa-phone-alt" aria-hidden="true"></i> Consulta un producto </a>

                        </div> -->
                        <!-- 
                        <div class="col-md-6" style="padding-left: 0px; padding-top: 20px; padding-right: 0px; width: 45%;">
                        <a href="#contactenos" class="informacion-button"><i class="fas fa-phone-alt" aria-hidden="true"></i> Agenda una LLamada </a>

                        </div>
-->






                        <!-- <div class="col-md-6 paddin_cero">
                        <button type="button" class="opciones-button" toggle-modal="#informativo-1"><i class="fas fa-shopping-cart"
                            aria-hidden="true"></i> ¿Cómo recoger el producto?</button>
                        </div>
                        <div class="col-md-6 paddin_cero">
                        <button type="button" class="opciones-button" toggle-modal="#informativo-1"><i class="fas fa-shopping-cart"
                            aria-hidden="true"></i> ¿Cómo recoger el producto?</button>
                        </div> -->



                    </div>



                </div>
            </div>
            <br>

            <div class="col-md-12" style="z-index: 9999;">

                <button type="button" class="opciones-button" style="width: 25%; font-size: 16px; font-weight: 500;" data-toggle="modal"
                    data-target="#comocomprar" style="margin-bottom: 13px;"><i class="fas fa-shopping-cart" aria-hidden="true"></i> Como
                    Comprar </button>

                <button type="button" class="opciones-button" style="width: 25%; font-size: 16px; font-weight: 500;" data-toggle="modal"
                    data-target="#formaspago"><i class="fas fa-shopping-cart" aria-hidden="true"></i> Formas de Pago</button>
                <button type="button" class="opciones-button" style="width: 25%; font-size: 16px; font-weight: 500;" data-toggle="modal"
                    data-target="#delivery" style="margin-bottom: 13px;"><i class="fas fa-shopping-cart" aria-hidden="true"></i> Formas de
                    Entrega </button>
                <button type="button" class="opciones-button" style="width: 24%; font-size: 16px; font-weight: 500;" data-toggle="modal"
                    data-target="#modal_tiene_garantia"><i class="fas fa-shopping-cart" aria-hidden="true"></i> Garantias </button>



                <br> <br> <br>
            </div>


    </form>




    <?php 
                    $separated = explode(',', $fila['TecDetalle']);
                           echo "<div  >
                           <div class='related-product hidden-xs' style='background: white;'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='title-with-bg'>
                                            <span style='color:red;'>Ficha Tecnica</span>
                                        </div>
                                    </div>
                                    </div>
                               </div> 
                            </div>         
                        </div>
                        <table class='table table-bordered table-striped fixedtable' style='    width: 92%;
                        max-width: 100%;
                        margin-bottom: 20px;
                        border: 1px solid #ddd;
                        margin-left: auto;
                        margin-right: auto;'>
                        <tbody>
                        ";     
                    foreach ($separated as $value) {
                        
                        $separated2 = explode('.', $value);
                        
                        foreach ($separated2 as $value2) {
                            
                            echo 
                            "
                            
                            
                            
                            <tr>
                                <td>
                                <i class='fa fa-angle-double-right'></i> $value2
                                </td> 
                           
                            </tr>
                            ";
                        
                           
                        }  
                    }
                    echo "</tbody> </table></div> ";
                    ?>
    <br></br>
    <div class="related-product " style="background: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-with-bg">
                        <span style="color:red;">Informacion de procesos de Venta y Entrega de Productos</span>
                    </div>
                </div>
                <div id="delivery_data" class="owl-carousel">

                    <img src="assets/img/1.jpeg">
                    <img src="assets/img/2.jpeg">
                    <img src="assets/img/3.jpeg">
                    <img src="assets/img/1.jpeg">
                </div>
            </div>
        </div>
        <br></br>

        <!--RELATED PRODUCT AREA START-->
        <div class="related-product hidden-xs" style="background: white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-with-bg">
                            <span style="color:red;">Otros Productos Relacionados</span>
                        </div>
                    </div>
                    <div class="related-pro-carousel">
                        <?php

                            $ordenSlider =  ejecutarSQL::consultar("SELECT `producto`.*, `producto`.`CodigoCat`
                        FROM `producto`
                        WHERE `producto`.`CodigoCat` = '$categoria' ORDER BY RAND() LIMIT 12;");

                            while ($ordenSli = mysqli_fetch_assoc($ordenSlider)) {
                                $CodigoProducto = $ordenSli['CodigoProd'];
                                $NombreProductoCat2 = $ordenSli['NombreProd'];
                                $ModeloProd = $ordenSli['Modelo'];
                                $MarcaProd = $ordenSli['Marca'];
                                $Imagen_slider2 = $ordenSli['Imagen'];
                                $Precio_slider2 = $ordenSli['Precio'];
                                $precio_sol_dolar_f = number_format($Precio_slider2 * $globalTasaCambio_dolar, 2);
                                
                                $p_p =  number_format($precio_sol_dolar_f * 25 / 100 + $precio_sol_dolar_f, 2);
                               
                                

                                

                            ?>


                        <!--single product-->
                        <div class="col-md-12">
                            <div class="sin-product">
                                <div class="product-top">
                                    <div class="pro-img">
                                        <a href="infoProd.php?CodigoProd=<?php echo  $CodigoProducto; ?>">
                                            <img alt="" style="height:268px!important; border-bottom: 1px solid #005a8f;"
                                                src="assets/img-products/<?php echo  $Imagen_slider2; ?>">
                                        </a>
                                    </div>
                                    <div class="label_new"><span>Nuevo</span></div>
                                    <div class="name"><a href="#"><?php echo  $NombreProductoCat2; ?></a></div><br>
                                    <div class="name"><a href="#"><?php echo $ModeloProd . " - " . $MarcaProd; ?></a></div><br>

                                    <div class="rating">
                                        <span class="price-new" style="text-decoration-line: line-through;"><?php echo "Antes: S/ " . $p_p; ?>
                                        </span>&nbsp; &nbsp; <strong> 25% DCTO</strong>
                                    </div>
                                    <div class="price">
                                        <span
                                            class="price-new"><?php echo "$ ".$Precio_slider2."&nbsp;&nbsp; | &nbsp;&nbsp;"."S/ ".$precio_sol_dolar_f ?></span>
                                    </div>
                                    <a href="infoProd.php?CodigoProd=<?php echo  $CodigoProducto; ?>"
                                        style="color: #fff; background-color: #005a8f; border-color: #ff9f00" class="btn btn-lg" id="open-01"> Ver
                                        Mas</a>

                                </div>
                            </div>
                        </div>
                        <!--single product-->
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
        <!--RELATED PRODUCT AREA END-->



        <!-- sdadasda-->



    </div>
    <!--RELATED PRODUCT AREA END-->

    <!-- asdasdas -->
    <div class="modal fade in" id="comocomprar" role="dialog" style="overflow-y: hidden;">
        <div class="modal-dialog modal-dialog-top modal-md" style="margin-top: 17px;">
            <div class="modal-content" style="padding: 20px 20px;border:1px">
                <div class="modal-body" style="overflow-y: scroll;    height: 500px;">
                    <p>
                        <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i> CÓMO COMPRAR</span>
                        </strong>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
                                font-family: Arial, sans-serif;
                                font-weight: 600;">Para comprar productos en nuestra tienda virtual, no es necesario estar registrado. Usted puede
                                adquirir
                                los productos ofrecidos por la empresa Corporación Yamoshi SRL en la tienda virtual www.yamoshi.com.pe
                                o en nuestras tiendas ubicadas en Lima o Miraflores. </span>
                        </span>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">El uso de la tienda virtual y la adquisición de los productos ofertados, supone la aceptación de los términos
                                y condiciones generales que están publicadas en nuestra web, así como, las condiciones particulares o
                                específicas que pudieran establecerse en cada caso. </span>
                        </span>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Yamoshi podrá modificar las presentes condiciones generales mediante publicación en esta página Web para
                                su conocimiento y aceptación por los usuarios.</span>
                        </span>
                    </p>
                    <p></p>
                    <strong>
                        <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-laptop"
                                aria-hidden="true"></i> CATÁLOGO DE PRODUCTOS Y PROCESO DE COMPRA</span>
                    </strong>
                    <span style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; color: #333333;">
                        <o:p></o:p>
                    </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">En esta web encontrará un amplio catálogo de productos, ordenado por categorías y subcategorías, así mismo,
                            encontrará
                            a su lado izquierdo un menú desplegable con las principales categorías para que pueda buscar su producto
                            ordenadamente. En la parte superior hay una barra de búsqueda donde puede ingresar los términos o característica
                            del producto que quiere comprar, así se agilizará el proceso de buscar un producto en nuestra tienda virtual.
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">Una vez elegido el producto podrá ver el detalle de las características, el sctock, el tiempo de entrega y las
                            formas de pago. Cuando realice el proceso de añadir el producto a su carrito de compras, empieza el proceso
                            de pago. El proceso empieza con el registro de sus datos personales y la dirección de envío, luego podrá
                            escoger las formas de envío que son dos: recojo en nuestras tiendas o entrega a su domicilio. Con el registro
                            de los datos solicitados en el formulario y la aceptación de los términos del servicio, antes de formalizarlo
                            podrá visualizar los gastos de transporte y la forma de pago. Siguiendo con su compra, podrá escoger las
                            formas de pago que son dos: Transferencia o depósito bancario y pago con tarjeta de débito o crédito.
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">Corporación Yamoshi SRL trabaja con dos plataformas de medios de pago que son Culqi y Mercado Pago. Estas
                            sólidas
                            plataformas son muy eficientes en el proceso de compra y protegen la privacidad de sus datos ingresados,
                            así como la implementación de una eficaz política antifraude.
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">Por último, al confirmar el pedido recibirá un e-mail de confirmación y podrá recibir el producto en los días
                            que le indica el correo de aceptación de la orden de compra.</span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">
                            <span style="color: #828282;">Nuestra empresa tendrá la facultad de comunicarse con nuestros clientes para confirmar su
                                compra y validar
                                los datos registrados en su pedido para la seguridad de ambas partes.&nbsp;</span>
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNoSpacing">
                    </p>
                    <p>
                        <strong>
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-credit-card"
                                    aria-hidden="true"></i> TÉRMINOS Y CONDICIONES DE VENTA</span>
                        </strong>
                        <span style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; color: #333333;">
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal" style="">
                        <span style="color: #493b3b;">
                            <b>
                                <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Variaciones de precios:</span>
                            </b>
                            <span style="font-size: 9.0pt;">
                                <o:p></o:p>
                            </span>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">Los precios que mostramos en nuestra página web son válidos en el momento de hacer su pedido o compra e
                            incluyen
                            los impuestos y envíos según la zona de reparto. Estas transacciones son confirmadas por correo electrónico
                            aceptando la conformidad de la orden de compra. No obstante, los precios de los productos tecnológicos sufren
                            fluctuaciones que son normales. En la mayoría de los casos los precios bajan, a medida que aparecen nuevos
                            modelos. No podemos aceptar reclamaciones si usted pide un producto, lo recibe, y al cabo de unos días ve
                            que se anuncia a un precio menor.</span>
                    </p>
                    <p class="MsoNormal" style="    margin-top: 1rem;">
                        <span style="color: #493b3b;">
                            <b>
                                <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Validez de las ofertas: </span>
                            </b>
                            <span style="font-size: 9.0pt;">
                                <o:p></o:p>
                            </span>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;;">Los artículos que se muestran han sido pedidos en cantidad suficiente para atender la demanda prevista pero,
                            si alguno se agotara, le ofreceríamos la posibilidad de sustituirlo por otro de valor igual o superior.</span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#828282;">
                            <span style="color: #828282;">Aunque cuidamos al máximo para que no haya errores en nuestra página, le pedimos disculpas
                                si algún dato
                                es erróneo. Nos reservamos el derecho a no servir un producto cuyos datos técnicos, detalles o precio
                                fueran erróneos.</span>
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNoSpacing">
                    </p>
                    <p>
                        <strong>
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-envelope"
                                    aria-hidden="true"></i> CÓMO REGISTRARSE PARA COMPRAR</span>
                        </strong>
                        <span style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; color: #333333;">
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Registrarse en </span>
                            <a href="https://www.yamoshi.com.pe/">
                                <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;color: #493b3b;">www.yamoshi.com.pe</span>
                            </a>
                            <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">
                                es muy fácil.
                                <o:p></o:p>
                            </span>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="color: #828282;">
                            <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Solo ingrese al link de </span>
                            <a href="https://yamoshi.com.pe/iniciar-sesion">
                                <span style="font-size: 9pt; font-family: Arial, sans-serif; color: #493b3b;">Regístrate</span>
                            </a>
                            <span
                                style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: ES-PE;">
                                en el menú superior de nuestra web, llene los datos solicitados y luego acepte nuestros términos y condiciones.
                                Y ¡Listo!</span>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;color: #828282;">Recomendaciones al momento de Registrarse:
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color: #828282;">Verifique que sus datos personales se encuentren escritos de manera correcta, en especial su correo
                            electrónico
                            y su documento de identidad.
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color: #828282;">Utilice un correo electrónico que use de manera frecuente, ya que ahí lo mantendremos informado de todas
                            nuestras
                            novedades y promociones, así como las notificaciones con respecto al estado de sus compras.
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color: #828282;">Utilice una contraseña segura y fácil de recordar, esta debe tener como mínimo 8 caracteres. Evite contraseñas
                            relacionadas a sus datos personales como fechas importantes, documento de identidad, etc.</span>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;color: #828282;">En caso de necesitar ayuda o cualquier información adicional, puede comunicarse a nuestra Central de Servicio
                            al Cliente al teléfono (01) 237-4491 o al Correo electrónico

                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- sucribte  -->
    <div class="modal fade in" id="formaspago" role="dialog" style="overflow-y: hidden;">
        <div class="modal-dialog modal-md" style="margin-top: 17px;">
            <div class="modal-content" style="padding: 20px 20px;border:1px">
                <div class="modal-body" style="overflow-y: scroll;    height: 500px;">
                    <p>
                        <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;">FORMAS DE PAGO</span>
                        </strong>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">En Yamoshi aceptamos varios medios de pago para los pedidos:</span>
                        </span>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                    <p style="color: #828282;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;"><i class="fa fa-check"></i> En efectivo en nuestros locales
                        </span>
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">
                        <i class="fa fa-check"></i> Depósito Bancario
                    </p>
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">
                        <i class="fa fa-check"></i> Tarjetas de crédito y/o débito
                    </p>
                    </p>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Transferencia o ingreso en cuenta. Puedes ordenar el pago a estas cuentas:</span>
                        </span>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                    <p style="color: #000000;">
                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;"><i class="fa fa-user"></i> TITULAR: CORPORACION YAMOSHI SRL.
                        </span>
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;color: #000000;">
                        <i class="fa fa-hashtag" aria-hidden="true"></i> RUC: 20511068496
                    </p>
                    </p>
                    </p>
                    <strong>
                        <span style="font-size: 12.5pt; font-family: 'Arial','sans-serif'; color: darkorange;">NUESTRAS CUENTAS CORRIENTES</span>
                    </strong>
                    <span style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; color: #333333;">
                        <o:p></o:p>
                    </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 11pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#073781;">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i> BANCO DE CRÉDITO DEL PERÚ
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom:1pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">Banco BCP Soles: 191-1592154-0-62
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">CCI Soles: 002-19100159215406259
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;"> Banco BCP Dólares: 191-1560338-1-98
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;"> CCI Dólares: 002-19100156033819857
                    </p>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 11pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#120c3d;">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i> BANCO CONTINENTAL BBVA
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom:1pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">Banco BBVA Soles: 0011-0124-0100029906
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">CCI Soles: 0011-124-000100029906-53
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;"> Banco BBVA Dólares: 0011-0124-0100015921
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;"> CCI Dólares: 0011-124-000100015921-58
                    </p>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                        <span style="font-size: 11pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color:#ec0707;">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i> BANCO SCOTIABANK
                            <o:p></o:p>
                        </span>
                    </p>
                    <p class="MsoNormal"
                        style="margin-bottom:1pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">Banco Soles: 000 5078075
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">CCI Soles: 009-039-00-00-0507807598
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">Banco Dólares: 000 2905931
                    </p>
                    <p style="font-size: 10pt;
    font-family: Arial, sans-serif;margin-bottom:1pt;
    font-weight: 600;">CCI Dólares: 009-039-00-00-0290593198
                    </p>
                    </p>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;color: #828282;">Envía y/o llama por teléfono para justificar la transferencia. Enviaremos el pedido tras la confirmación del
                            pago.
                            <o:p></o:p>
                        </span>
                    </p>
                    <br>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color: #828282;">Las transferencias desde entidades distintas pueden tardar hasta dos días hábiles (no cuentan fines de semana
                            ni feriados) en llegarnos, según normativa bancaria. Mantenemos activos los pedidos por transferencia por cuatro días.
                            Pasado ese tiempo, si no se ha confirmado el pago, el pedido se anulará automáticamente.
                            <o:p></o:p>
                        </span>
                    </p>
                    <br>
                    <p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; line-height: normal;">
                        <span style="    font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600; color: #828282;">Tarjeta Esta forma de pago es inmediata, cómoda y segura. Al terminar tu pedido, podrás hacer el pago en la
                            página del banco. YAMOSHI no recibirá estos datos ni tendrá acceso a ellos. Puedes asociar a tu cuenta de cliente tantas
                            tarjetas como quieras para hacer pedidos más rápido. Un pedido por tarjeta se puede pagar en la hora siguiente a su
                            confirmación. Pasado ese tiempo, si no llega el pago, el pedido será anulado automáticamente.
                            <o:p></o:p>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade in" id="delivery" role="dialog" style="overflow-y: hidden;">
        <div class="modal-dialog modal-md" style="margin-top: 17px;">
            <div class="modal-content" style="padding: 20px 20px;border:1px">
                <div class="modal-body" style="overflow-y: scroll;    height: 500px;">
                    <p>
                        <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-location-arrow"
                                    aria-hidden="true"></i> POLÍTICAS DE ENVÍOS Y ENTREGAS</span>
                        </strong>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">YAMOSHI sólo enviará la mercadería adquirida por el cliente cuando se haya confirmado la compra por la página web, la
                                confirmación del stock para su despacho y el pago correspondiente por el producto. Esta aprobación se realizará vía
                                correo electrónico o mediante confirmación telefónica.
                                <br>
                                <br>
                                Nuestra empresa despacha productos dentro de la República del Perú. Envía a Lima Urbana, Lima Periférica, Callao y a
                                provincias de todo el país, mediante servicios tercerizados de Courier, empresas de transporte terrestre y con nuestra
                                propia movilidad. </span>
                        </span>
                    </p>
                    <br>
                    <p>
                        <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-truck"
                                    aria-hidden="true"></i> ENVÍOS EN LIMA</span>
                        </strong>
                    </p>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">El envió a domicilio se realiza de Lunes a Viernes en el horario de 10:00am a 7:00pm y Sábados de 10:00am a 1:00pm. Debido a
                                restricciones por parte de nuestro Courier, no hay envíos a apartados postales.
                                <br>
                                <br>
                                Para las compras online en Lima urbana, la entrega de los productos se realizará en un intervalo de 24 a 48 horas y
                                mucho dependerá de la disponibilidad del Courier. Para realizar pedidos inmediatos podrá comunicarse con nosotros y
                                coordinar su despacho. Este servicio estará sujeto a una tarifa adicional al que esta publicado actualmente.
                    </p>
                    <br>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">Los envíos de nuestros productos se realizan dentro de los días laborables; no se consideran los días, domingos y feriados.
                                <br>
                                <br>
                                Al momento de la entrega del producto el operador logístico o Courier designado siempre solicitará, a la persona
                                encargada de recepcionar la mercadería, su Documento Oficial de Indentidad para autenticar su titularidad y la
                                responsabilidad de recibir el pedido. Esta persona tiene que contar con la mayoría de edad para salvaguardar una
                                entrega eficiente y segura. La persona que recibe el producto es responsable de revisar que le hayan entregado todas
                                las piezas o partes del producto antes que se retire el operador logístico o Courier. Una vez que se haya retirado, no
                                habrá lugar a devolución o reclamo de partes o piezas faltantes.
                    </p>
                    <br>
                    <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                        <span style="color: #828282;">
                            <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;">La entrega se considera efectuada desde que se pone el producto a disposición del cliente por el operador logístico o Courier
                                y el cliente firma la recepción de la entrega, correspondiendo a la persona que recibió el producto, verificar a la
                                recepción y exponer todas las salvedades y reclamos que puedan estar justificados.
                                <br>
                                <p>
                                    <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                                        <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i
                                                class="fa fa-bookmark" aria-hidden="true"></i> DEVOLUCIONES</span>
                                    </strong>
                                </p>
                                <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                                    <span style="color: #828282;">
                                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;"><i class="fa fa-check" aria-hidden="true"> </i> Si el envío o caja presenta algún deterioro debe estipularse la anotación
                                            respectiva en la guía de devolución entregada al operador logístico designado.
                                            <br>
                                            <br>
                                            <i class="fa fa-check" aria-hidden="true"> </i> Si el destinatario no acepta la entrega de la mercadería
                                            el comprador será responsable por el valor del envío, del cual no habrá reembolso.
                                            <br>
                                            <br>
                                            <i class="fa fa-check" aria-hidden="true"> </i> Si la mercancía ha sido despachada y la dirección de
                                            entrega está equivocada, incompleta o se necesita un cambio de dirección, existe una comisión por el valor
                                            del envío, la cual puede ser cobrada por el operador logístico designado.
                                            <br>
                                            <br>
                                            <i class="fa fa-check" aria-hidden="true"> </i> Si la mercancía no es reclamada o no existe una persona
                                            encargada de recibirlo, el comprador es responsable por el pago del envió y/u otros cargos adicionales
                                            para devolverla a la dirección de origen.
                                </p>
                                <br>
                                <p>
                                    <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                                        <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i
                                                class="fa fa-location-arrow" aria-hidden="true"></i> ENVÍOS DE PEDIDOS AL INTERIOR DEL PERÚ</span>
                                    </strong>
                                </p>
                                <p style="text-align: justify; background: white; margin: 0cm 0cm 7.5pt 0cm;">
                                    <span style="color: #828282;">
                                        <span style="font-size: 10pt;
    font-family: Arial, sans-serif;
    font-weight: 600;"><i class="fa fa-check" aria-hidden="true"> </i> Los tiempos de entrega por delivery a cualquier parte del Perú varían por la
                                            localidad donde va los productos solicitados y la lejanía de la ciudad o destino a donde deberá ser
                                            embarcado dicho producto.
                                            <br>
                                            <br>
                                            <i class="fa fa-check" aria-hidden="true"> </i> Por el momento se realizan envíos a provincias con las
                                            empresas de transporte locales y el pago es contra entrega (Pago destino).
                                            <br>
                                            <br>
                                            
                                </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_tiene_garantia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" style="margin-top: 17px;" role="document">
            <div class="modal-content" style="padding: 20px 20px;border:1px">
            <p>
                        <strong style="color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;">
                            <span style="font-size: 17.5pt; font-family: 'Arial','sans-serif'; color: darkorange;"><i class="fa fa-location-arrow"
                                    aria-hidden="true"></i>  GARANTIAS </span>
                        </strong>
                    </p>
                    
               
                <div class="modal-body">
                    <p align="justify">La Garantía de su Equipo adquirido en SOLUCIONES CCTV & SISTEMAS S.A.C cubre mano
                        de obra y cambio o reparación de partes de la configuración original del Equipo (Hardware) que
                        presente problemas bajo condiciones de uso y manejo
                        normales indicados en el manual del usuario y que eventualmente presente defectos de fabricación
                        durante 12 meses a partir de la fecha de compra. Cualquier cobertura adicional podrá constar en
                        la Factura o Boleta de Venta.</p>
                    <p align="justify">Cabe indicar que el Manual de Usuario vendrá dentro del empaque del Equipo o será
                        enviado de forma digital a la dirección de correo electrónico que usted nos indique a nuestro
                        correo electrónico soporte@solucionescctvysistemas.com
                        con el asunto “Solicitud de Manual Digital” y el número de su comprobante de pago.
                    </p>
                    <p align="justify">Es imprescindible que el usuario nos indique su dirección de correo electrónico
                        para dirigir las comunicaciones de caso.
                    </p>
                    <p align="justify">Información General</p>
                    <p align="justify">• Centro de Servicio Técnico de </p>
                    <p align="justify">Av. el Sol / Av. Revolución Lt. 13 - Mz. H - Gp. 15 - St. 1 Villa el Salvador -
                        Lima - Peru</p>
                    <p align="justify">• Lima y Provincia: 986 838 333</p>
                    <p align="justify">• Mail: soporte@solucionescctvysistemas.com Garantía del Servicio Técnico de
                        SOLUCIONES CCTV & SISTEMAS S.A.C.</p>
                    <p align="justify">Dentro del período y según la modalidad de garantía ofrecida en el Comprobante de
                        Pago, el cliente será atendido por el Centro de Servicio Técnico de SOLUCIONES CCTV & SISTEMAS
                        S.A.C para efectuar la reparación.</p>
                    <p align="justify">Toda solicitud de reparación, cambio o devolución de dinero por un equipo
                        defectuoso, debe ser comunicada por escrito al Centro de Servicio Técnico de SOLUCIONES CCTV &
                        SISTEMAS S.A.C a través de la Orden de Servicio, la cual
                        será llenada en las instalaciones de SOLUCIONES CCTV & SISTEMAS S.A.C en presencia del personal
                        de la empresa generando un número de atención con el cual podrá hacerle el seguimiento
                        respectivo.</p>
                    <p align="justify">El software preinstalado originalmente cuenta con una garantía de treinta (30)
                        días a partir de la fecha de la adquisición inicial del equipo. En caso de falla del software
                        preinstalado en el equipo, éste será reinstalado a
                        su condición original.</p>
                    <p align="justify">El cliente será quien proporcione el Software más los CD de Drivers originales de
                        su equipo.</p>
                    <p align="justify">Una vez transcurrido el Período de Garantía del Software, SOLUCIONES CCTV &
                        SISTEMAS S.A.C podrá cobrar el servicio de reinstalación de dicho Software y la reconfiguración
                        del equipo.
                    </p>
                    <p align="justify">El computador podría incluir software de demostración por tiempo limitado: Por
                        ejemplo: Antivirus con 30 días u otros que no están incluidos en el servicio post venta.</p>
                    <p align="justify">Accesorios Periféricos</p>
                    <p align="justify">Sólo los accesorios vendidos por SOLUCIONES CCTV & SISTEMAS S.A.C que forman
                        parte del equipo están cubiertos por esta Garantía.
                    <p align="justify">Garantía de Partes</p>
                    <p align="justify">Todos los repuestos tienen una garantía de 90 días. Una vez instalado el
                        repuesto en un Equipo vendido por SOLUCIONES CCTV & SISTEMAS S.A.C, contará con la mayor
                        garantía que pueda corresponderle, es decir, los 90 días
                        o el resto de la garantía de la unidad en donde se colocó.
                    <p align="justify">Todas las partes serán suministradas sin costo adicional en base a
                        intercambio y serán partes nuevas estándar o partes de igual calidad o de las mismas
                        condiciones operativas. Todas las partes removidas para ser reemplazadas
                        serán propiedad de SOLUCIONES CCTV & SISTEMAS S.A.C.
                    <p align="justify">Transferencia de Garantía</p>
                    <p align="justify">La Garantía podrá ser transferida junto con el equipo cuando éste sea
                        vendido o cedido a un tercero distinto al propietario inicial, siempre y cuando se
                        haya notificado por escrito de esta situación a SOLUCIONES
                        CCTV & SISTEMAS S.A.C siguiendo el efecto de las formalidades establecidas en las
                        condiciones de este Certificado. La transferencia de garantía no aplica a
                        distribuidores.
                    <p align="justify">La Garantía terminará automáticamente cuando no se hubiere
                        notificado esta transferencia dentro de los 30 días naturales siguientes a que
                        esta ocurra.
                    <p align="justify">Garantía por pixeles encendidos o apagados.
                    </p>
                    <p align="justify">Procede por 90 días desde la adquisición del equipo si
                        presenta en su pantalla más de 4 pixeles apagados, o más de 4 pixeles
                        permanentemente encendidos, o la combinación de más de 4 pixeles de ambos,
                        en
                        un área de una pulgada cuadrada.
                    <p align="justify">Garantía por Equipos Remanufacturados.
                    </p>
                    <p align="justify">Los equipos remanufacturados están cubiertos por la
                        garantía ofrecida por SOLUCIONES CCTV & SISTEMAS S.A.C, de acuerdo al
                        período y según la modalidad ofrecida en el Comprobante de Pago, sin
                        embargo
                        el cliente debe considerar en cuanto a la idoneidad y calidad de los
                        equipos de esta naturaleza lo siguiente:
                    <p align="justify">“Un equipo remanufacturado viene a ser un equipo
                        reparado o repotenciado por el mismo fabricante o por terceros y
                        obviamente se comercializan a un precio menor, en tal sentido en
                        algunos casos su
                        vida útil puede ser menor a la de un equipo nuevo. Estos equipos han
                        sido devueltos al fabricante por diferentes causas: no pasó los
                        niveles de calidad en la línea de producción, fueron usados
                        de prueba, en exhibiciones de ventas, y cancelaciones de órdenes,
                        finalmente estos luego del proceso de calidad han pasado todas las
                        pruebas y son puestos nuevamente en el mercado con todos los
                        accesorios y las mismas características que los artículos nuevo”.
                    <p align="justify">Condiciones</p>
                    <p align="justify">Para hacer válida esta Garantía:</p>
                    <p align="justify">Debe presentarse el comprobante de pago y la guía
                        de remisión, junto con el equipo defectuoso y el software más
                        los CD de los drivers de su equipo.
                    <p align="justify">La Garantía cubre la reparación de los
                        equipos informáticos y de seguridad cctv y sus accesorios
                        periféricos ante eventuales errores de fábrica, desde el
                        momento de su adquisición inicial.
                    <p align="justify">Para el caso de que no sea posible
                        realizar la reparación del equipo, SOLUCIONES CCTV &
                        SISTEMAS S.A.C se compromete a cambiar el equipo y/o las
                        partes y/o componentes defectuosos del
                        mismo, según proceda, sin cargo alguno para el cliente,
                        por un componente igual o equivalente en su
                        funcionalidad. En ningún caso SOLUCIONES CCTV & SISTEMAS
                        S.A.C contempla la devolución
                        de dinero hasta haber cumplido con todas las exigencias
                        de Ley.
                    <p align="justify">La presente garantía no incluye
                        compensaciones y/o indemnizaciones. En todo caso, la
                        responsabilidad máxima de SOLUCIONES CCTV & SISTEMAS
                        S.A.C para con el cliente quedará limitada
                        al precio de compra pagado por el equipo.
                    <p align="justify">La ejecución de la garantía se
                        realizará en los plazos más breves posible.
                        Salvo en situaciones de fuerza mayor o caso
                        fortuito, el tiempo de reparación en ningún caso
                        será mayor
                        a 30 días útiles contados a partir de la fecha
                        del diagnóstico del equipo en nuestro Servicio
                        Técnico el cual se informará al correo
                        electrónico referido por el usuario, de
                        necesitarse un plazo adicional este se
                        coordinará previamente con el cliente además de
                        su aceptación a dicha prórroga.
                    <p align="justify">
                        Es responsabilidad del cliente hacer copias
                        de seguridad periódicas de datos almacenados
                        en unidades de disco u otros dispositivos de
                        almacenamiento, como precaución contra
                        posibles fallas, alteraciones o pérdida de
                        datos.
                    <p align="justify">
                        Como toda batería, la capacidad máxima
                        de carga se reducirá con el tiempo de
                        uso. La garantía de la batería no cubre
                        las reducciones en capacidad de la
                        misma. La batería solamente tiene
                        garantía contra defectos de fabricación
                        por (3) tres meses, por ser
                        un elemento consumible.
                    <p align="justify">
                        Para determinar si una batería tiene
                        una falla cubierta por la garantía
                        es posible que sea necesario
                        ejecutar algún diagnóstico en
                        laboratorio.
                    <p align="justify">
                        El tiempo de duración de la
                        batería podrá variar dependiendo
                        de la configuración y uso del
                        producto. Eso engloba, más no se
                        limita al modelo de producto,
                        aplicativos cargados,
                        definiciones de administración
                        de energía y recursos del
                        producto.
                    <p align="justify">
                        Exclusiones
                    </p>
                    <p align="justify">
                        Esta garantía se excluye por
                        las siguientes razones:
                    </p>
                    <p align="justify">
                        Por vencimiento del software
                        demostrativo de uso por
                        tiempo limitado que podría
                        haberse incluido con el
                        equipo.
                    </p>
                    <p align="justify">
                        Cuando el producto, número
                        de serie o sello de garantía
                        haya sido dañado, alterado o
                        borrado.
                    </p>
                    <p align="justify">
                        Cuando no se demuestre que
                        el equipo esté dentro del
                        período de Garantía.
                    </p>
                    <p align="justify">
                        Cuando el desperfecto sea
                        consecuencia del mal uso o
                        de la falta de observación
                        del manual de usuario que se
                        acompaña al equipo o causas
                        diferentes al uso normal.
                    <p align="justify">
                        Cuando haya existido
                        algún intento anterior
                        de reparación fuera del
                        Servicio Técnico de
                        SOLUCIONES CCTV &
                        SISTEMAS S.A.C.
                    <p align="justify">
                        Cuando el equipo
                        haya recibido golpes
                        accidentales o
                        intencionales o haya
                        sido expuesto a
                        elementos nocivos
                        como agua, ácidos,
                        fuego, intemperie,
                        humedad,
                        fluctuaciones de
                        voltaje, o cualquier
                        otro similar o
                        análogo (extensiones
                        sin conexión a
                        tierra,
                        cortocircuitos en la
                        red eléctrica, etc.)
                        o sobre voltaje en
                        la red eléctrica.
                    <p align="justify">
                        Cuando la falla
                        del equipo sea
                        producida por
                        falta de
                        mantenimiento
                        preventivo o
                        mantenimiento
                        inapropiado.
                    <p align="justify">
                        Cuando el
                        equipo
                        presente
                        problemas
                        debidos a
                        re-configuraciones
                        o
                        incompatibilidades
                        de software
                        o hardware y
                        otros no
                        incluidos
                        con el
                        equipo.
                    <p align="justify">
                        Cuando
                        por
                        incompetencia
                        y/o
                        desconocimiento
                        por
                        parte
                        del
                        usuario
                        en la
                        instalación,
                        configuración
                        y
                        operación
                        del
                        software
                        se
                        genere
                        un mal
                        funcionamiento
                        o
                        errores
                        de
                        activación,
                        registro
                        y/o
                        personalización
                        del
                        equipo.
                    <p align="justify">
                        Bajo
                        ninguna
                        circunstancia
                        el
                        Soporte
                        Técnico
                        de
                        SOLUCIONES
                        CCTV
                        &
                        SISTEMAS
                        S.A.C
                        será
                        responsables
                        de
                        la
                        pérdida
                        de
                        información
                        del
                        usuario
                        debido
                        a
                        problemas
                        de
                        hardware
                        o
                        software.
                    <p align="justify">
                        Cuando
                        el
                        equipo
                        falle
                        por
                        haber
                        sido
                        contaminado
                        por
                        virus
                        informáticos.
                    <p align="justify">
                        Cuando
                        la
                        falla
                        se
                        deba
                        a
                        una
                        diferencia
                        en
                        las
                        normas
                        de
                        seguridad
                        o
                        condiciones
                        técnicas
                        locales
                        de
                        una
                        localidad
                        o
                        provincia
                        distinta
                        a
                        donde
                        el
                        equipo
                        fue
                        adquirido.
                        Se
                        debe
                        tener
                        en
                        cuenta
                        que
                        algunos
                        equipos
                        necesitan
                        condiciones
                        climáticas
                        o
                        ambientales
                        para
                        su
                        correcto
                        funcionamiento
                        según
                        lo
                        refiere
                        el
                        fabricante
                        en
                        el
                        Manual
                        de
                        Usuario.
                    <p align="justify">
                        Cuando
                        la
                        falla
                        se
                        deba
                        al
                        uso
                        de
                        accesorios,
                        cargadores
                        o
                        consumibles
                        que
                        no
                        sean
                        proporcionados
                        por
                        SOLUCIONES
                        CCTV
                        &
                        SISTEMAS
                        S.A.C
                        o
                        no
                        diseñados
                        para
                        el
                        producto.
                    <p align="justify">
                        Cuando
                        la
                        falla
                        se
                        deba
                        a
                        la
                        utilización
                        de
                        materiales
                        y
                        consumibles
                        no
                        recomendados
                        por
                        el
                        fabricante
                        del
                        equipo.
                    <p align="justify">
                        La
                        garantía
                        no
                        cubre
                        sustitución
                        o
                        reparación
                        debido
                        al
                        desgaste
                        o
                        rotura
                        de
                        elementos
                        mecánicos,
                        plásticos,
                        gomas,
                        botones,
                        etc.
                        así
                        como
                        los
                        deterioros
                        estéticos
                        debido
                        al
                        uso
                        normal
                        del
                        producto,
                        tales
                        como
                        abolladuras,
                        rayones
                        en
                        la
                        pantalla
                        u
                        otras
                        partes
                        del
                        equipo,
                        conexiones
                        o
                        puertos
                        flojos
                        tales
                        como
                        conector
                        DC,
                        USB,
                        HDMI,
                        VGA
                        o
                        similares.

                </div>

            </div>
        </div>
    </div>
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
                <input type="email" name="correo-subs" class="form-control input_subs" placeholder="Ingresa tu Correo Electronico">
                <button type="submit" class="btn btn-warning">Subscribete</button>
            </form>
        </div>

    </section>
    <!-- sucribte  -->


    <?php } ?>

    <?php include 'inc/slider_bottom.php';  ?>
    <?php include 'inc/footer.php';  ?>
    <?php include 'inc/scripts.php';  ?>
    </section>




    </script>
    <!-- /WhatsHelp.io widget -->
    <script src="assets/js/cloud-zoom.js"></script>
    <script src="assets/infoprod/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="assets/infoprod/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="assets/infoprod/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="assets/infoprod/js/owl.carousel.min.js"></script>
    <!-- Nivo slider js
		============================================ -->
    <script src="assets/infoprod/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="assets/infoprod/custom-slider/home.js" type="text/javascript"></script>
    <!-- scrollUp JS
		============================================ -->

    <!-- plugins JS
		============================================ -->
    <script src="assets/infoprod/js/plugins.js"></script>
    <!--zoom plugin
        ============================================ -->
    <script src='assets/infoprod/js/jquery.elevatezoom.js'></script>
    <!-- main JS
		============================================ -->
    <script src="assets/infoprod/js/main.js"></script>
</body>

</html>