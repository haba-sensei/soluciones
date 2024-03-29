<!--
Author: SOLUCIONES v6
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
include_once("library/config.inc.php");


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
<div class="" style="    height: 41px;">
    <a href="infoCat.php?CodigoCat=C000008">
        <img alt="" class="img_ajust_new" src="assets/img/1.gif" style="width: 100%;">
    </a>
</div>
<div class="bann">

    <span> Recibe un DESCUENTO EXCLUSIVO en tu primera COMPRA al registrarse en nuestra tienda en linea. </span>
    <a href="javascript:" class="ajust_login_new" onclick="mostrarLogin();"><i class="icon-user"></i> LOGIN CLIENTES
    </a>

</div>

<head>
    <?php include 'inc/links.php'; ?>

</head>

<body>
    <?php include 'inc/navbar.php'; ?>



    </nav>
    </div>
    <style>
    /*form styles*/
    .msform {
        width: 100%;
        margin: 50px auto;
        text-align: center;
        position: relative;
    }

    .msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        /* padding: 20px 30px; */
        box-sizing: border-box;
        width: 100%;
        /* margin: 0 10%; */
        position: relative;

        /*stacking fieldsets above each other*/
        position: relative;
        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    .msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    .msform input,
    .msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
    }

    /*buttons*/
    .msform .action-button {
        width: 100px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 10px;
    }

    .msform .action-button:hover,
    .msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }

    /*headings*/
    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }

    /*progressbar*/
    .progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    .progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 600;

    }

    .progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 71px;
        height: 35px;
        line-height: 35px;
        display: block;
        font-size: 16px;
        color: #333;
        background: white;
        border-radius: 8px;
        margin: 0 auto 5px auto;
    }

    /*progressbar connectors*/
    .progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    .progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    .progressbar li.active:before,
    .progressbar li.active:after {
        background: #27AE60;
        color: white;
    }

    /* primer slide */

    @media (max-width: 1366px) {

        .cart-checkout {
            padding-right: 59px !important;
    padding-left: 74px !important;
    margin-right: 104px !important;
    display: table-cell;
        }
    }

    .cart-checkout {
        padding-right: 59px !important;
    padding-left: 74px !important;
    margin-right: 104px !important;
    display: table-cell;
    }

    span,
    applet,
    object,
    iframe,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    dl,
    dt,
    dd,
    ol,
    nav ul,
    nav li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .cart-bottom {
        background: #fff;
        padding: 2em 2em;
    }

    .table {
        border-bottom: 1px solid #ccc;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    tr.main-heading th {
        background: #555555;
        padding: 1em 7.6em;
        color: white;
        font-size: smaller;
        font-weight: 600;
        letter-spacing: 2px;
    }

    tr.cake-top {
        border-bottom: 1px solid #005a8f;
        position: relative;
    }

    td.cakes {
        /* padding: 1em 0em !important; */
        padding: 1em 3em !important;
    }

    td.cakes_de {
        /* padding: 1em 0em !important; */
        padding: 1em 3em !important;
    }

    td {
        vertical-align: middle;
    }

    td.quantity {
        vertical-align: middle;
    }

    td.quantity {
        text-align: center;
    }

    td.price {
        padding: 0em 1em;
    }

    td.top-remove {
        position: relative;
    }

    .vocher {
        /* padding: 25.1em 0em 0em 0em; */

        padding: 1rem 0em 0em 0em;
    }

    .img-inside {
        width: 134px;
    }

    .close-btm {
        position: absolute;
    top: 54%;
    right: 80px;
    display: inline-flex;
    }

    .close-btm h5 {
        font-size: 0.75em;
    color: #fff;
    cursor: pointer;
    background: #f58634;
    padding: 0.5em 1em;
    border-radius: 3px;
    position: relative;
    left: 15px;
    }

    .dis-card {
        float: left;
        width: 50%;
    }

    .dis-total {
        float: right;
    width: 35%;
    text-align: right;
    background: #ffffff;
    }

    .dis-total h1 {
        font-size: 1.1em;
    color: #b31010;
    padding: 0.8em 1em;
    margin: 0.0em auto;
    background: #ffffff;
    display: inline-block;
    text-align: right;
    border: solid 1px #8e8e8e;
    }

    .tot-btn {
        margin-top: 1.3em;
    }

    .clear {
        clear: both;
    }

    .tot-btn a.shop {
        font-size: 0.8em;
        color: #FFF;
        padding: 0.8em 1em;
        background: #3f3f3f;
        border-radius: 3px;
    }

    .tot-btn a.check {
        font-size: 0.8em;
        color: #FFF;
        padding: 0.8em 1em;
        background: #0b507c;
        border-radius: 3px;
    }

    .table-fixed {
        width: 100%;

    }

    .table-fixed tbody {
        height: 355px;
    overflow-y: auto;
    width: 96%;
    position: absolute;
    }


    @media (max-width: 1600px) {
        .thead_ajust {
            display: table-caption;
        }
    }

    .thead_ajust {
        display: contents;
    }

    .payment-options li .radio-option label .small-text {
        position: relative;
        display: block;
        margin-top: 15px;
        margin-left: -30px;
        padding: 10px 15px;
        letter-spacing: 0;
        text-transform: none;
        font-weight: 400;
        font-size: 14px;
        color: #888;
        line-height: 20px;
        background: #fff;
    }

    .deshabilitado {
        background: #3333337a !important;
    }


    /* input[type="number"] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
    } */

    .number-input {
        border: 2px solid #bdbdbd;
        display: inline-flex;
    }

    .number-input,
    .number-input * {
        box-sizing: border-box;
    }

    .number-input button {
        outline: none;
        -webkit-appearance: none;
        background-color: transparent;
        border: none;
        align-items: center;
        justify-content: center;
        width: 3rem;
        height: 1rem;
        cursor: pointer;
        margin: 0;
        position: relative;
    }

    .number-input button:before,
    .number-input button:after {
        display: inline-block;
        position: absolute;
        content: '';
        width: 1rem;
        height: 2px;
        background-color: #212121;
        transform: translate(-50%, -50%);
        bottom: 1px;
    }

    .number-input button.plus:after {
        transform: translate(-50%, -50%) rotate(90deg);
    }

    .number-input input[type=number] {
        font-family: sans-serif;
        max-width: 3rem;
        border: solid #dadada;
        border-width: 0 2px;
        font-size: 1rem;
        height: 0.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 0px;
        padding-bottom: 13px;
    }

    /* fin del primer slide */
    </style>

    <main>
        <style>
        .init_1 {
            height: fit-content;
        }

        .init_2 {
            height: 120vh;
        }

        .init_3 {
            height: 140vh;
        }
        </style>

        <div class="container margin_60_35 init_1" id="view_cart">

            <!-- multistep form -->
            <form class="msform" id="my_awesome_form">
                <!-- progressbar -->
                <ul class="progressbar">
                    <li class="active" style="color:black!important;">Carrito</li>
                    <li style="color:black!important;">Opciones</li>
                    <li style="color:black!important;">Datos</li>
                    <li style="color:black!important;">Finalizar</li>
                </ul>
                <style>
                table {
                    table-layout: fixed;

                }
                @media (max-width: 767px){

                .ocultame_mobil {
                    display: none;
                }

                .texto_mobil {
                    font-size: large!important;
                }

                .texto_precio_mobil {
                    font-size: x-large!important; 
                    font-weight: 600!important;
                    text-align: -webkit-center!important;
                }

                .botones_remove_ver_prod {
                    font-size: 22px!important;
                }
                .ajust_caja_voucher_mobil {
                    display: inline!important;
                }
                .dis-total {
                float: right;
                width: 121%!important;
                text-align: right;
                background: #ffffff00!important;
                }

                .dis-res {
                    width: 129px!important;
                }

                .cart-checkout {
                padding-right: 59px !important;
                padding-left: 29px !important;
                margin-right: 104px !important;
                display: table-cell;
                }
                

                .ajust_cajas_compra {
                    padding-left: 50px;
                    padding-right: 50px;
                }
                
                .init_3 {
                height: 232vh;
                }
                .ajust_box_term {
                    margin-left: 31px;
                    margin-right: 40px;
                    left: 0px!important;
                }

                .init_2 {
                    height: 157vh;
                }

                .generar_coti_compra {
                    position: relative;
                    left: -87px!important;
                    padding: 16px;
                }
                
                .generar_coti {
                    position: absolute!important;
    bottom: -127px!important;
    padding: 16px!important;
    right: -7px!important;
    width: 59%!important;
                }

                .btn_sunat_ajust {
                    color: #f5f5f5;
                    background: #27ae60;
                    top: -47px;
                    left: 8em!important;
                    font-weight: 600;
                    position: absolute;
                    font-size: 16px;
                }

                .previus_ajuste_mobl {
                    margin-right: 17px!important;
                    margin-left: 15px!important;
                    padding: 16px!important;
                    padding-right: 9px!important;
                }

                .enviar_correo_btn {
                    margin-left: -48px!important;
                }

                .description_mbl {
                    padding-left: 45px!important;
                }
            }
 .jode_box {
    position: relative!important;
 }
                </style>
                <!-- fieldsets 1 -->
                <fieldset  class="jode_box">
                    <div class="cart-bottom">
                        <div class="table table-responsive">
                            <table id="shopping-cart-results">
                                <thead class="thead_ajust">
                                    <tr class="main-heading">
                                        <th style="width: 20%" class="ocultame_mobil">Imagen</th>
                                        <th style="width: 20%" class="long-txt texto_mobil description_mbl">Descripcion</th>
                                        <th style="width: 20%" class="texto_mobil">Cantidad</th>
                                        <th style="width: 20%" class="texto_mobil">Precio</th>
                                        <th style="width: 20%" class="texto_mobil">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $cart_box = '<ul class="cart-products-loaded">';
                                    $total = 0;

                                    foreach ($_SESSION["products"] as $product) {
                                        $product_img = $product["Imagen"];
                                        $product_name = $product["NombreProd"];
                                        $product_price_dolares = $product["Precio"];
                                        $product_code = $product["CodigoProd"];
                                        $product_qty = $product["product_qty"];
                                        $modelo_prod = $product["Modelo"];
                                        $marca_prod =  $product["Marca"];
                                        $product_price_soles = $globalTasaCambio_dolar * $product_price_dolares; 
                                        $product_price = $product_price_dolares; 
                                            

                                        $ordenU =  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.* FROM `producto` , `perfil`;");

                                        while ($ordenP = mysqli_fetch_assoc($ordenU)) {

                                            $product_ganancia = $ordenP['ganancia'];
                                            $product_medio = $ordenP['medio']; 
                                            
                                            $product_price_total = ($product_price);
                                            $product_price_total_soles = ($product_price_soles);
                                            $igv_total_soles = ($product_price_total_soles * $product_qty) / 1.18;
                                            $igv_total = ($product_price_total * $product_qty) / 1.18;
                                        }
                                        $subtotal = ($product_price_total_soles * $product_qty);
                                        $subtotal_dolares = ($product_price_total * $product_qty);
                                        $total = ($total + $subtotal_dolares);
                                        $total_soles = ($total + $subtotal);
                                        $total_r = $product_price_soles * $product_qty;
                                        
                                        $total_indi =  str_replace(',', '',  $total_r );
                                        // $total_indi = $product_price * $product_qty;
                                    ?>

                                    <input type="hidden" name="total" value="<?php echo $total ?>">
                                    <input type="hidden" name="nro_cot" value="<?php echo $product_qty ?>">


                                    <tr class="cake-top" align="left" style="width: 100%;">
                                        <td class="cakes ocultame_mobil" style="width: 20%; word-wrap: break-word;">
                                            <div class="product-img">
                                                <img class="img-inside" src="assets/img-products/<?php echo $product_img; ?>">
                                            </div>
                                        </td>
                                        <td class="cakes_de cake-text" align="left" style="width: 20%; word-wrap: break-word;">
                                            <div class="product-text">
                                                <h3><?php echo $product_name; ?></h3>
                                                <p>Modelo: <?php echo $modelo_prod; ?></p>
                                                <p>Marca: <?php echo $marca_prod; ?></p>
                                                <p>Codigo: <?php echo $product_code; ?></p>
                                            </div>
                                        </td>
                                        <td class="cakes quantity" align="left" style="width: 20%; word-wrap: break-word;">

                                            
                                            <div class="product-right">
                                                <input type="number" data-code="<?php echo $product_code; ?>" class="form-control quantity texto_precio_mobil"
                                                    style="border: 2px solid #6b6363;" value="<?php echo $product_qty; ?>">
                                            </div>
                                        </td>
                                        <td class="cakes price texto_precio_mobil" style="width: 20%;">
                                            <?php echo $currency." ".number_format($product_price_soles, 2); ?></h4>

                                        </td>
                                        <td class="cakes top-remove " style="width: 20%;">
                                            <h4 class="texto_precio_mobil"><?php echo $currency;
                                                    echo number_format($total_indi, 2); ?></h4>
                                            <div class="close-btm botones_remove_ver_prod">

                                                <a href="javascript:" align="left" class="remove-item" style="margin-right: 6px;" data-code="<?php echo $product_code; ?>">
                                                    <h5>Remover</h5>
                                                </a>
                                                <a href="<?php echo "infoProd.php?CodigoProd=".$product_code; ?>" align="left" class="" >
                                                    <h5>Ver Prod</h5>
                                                </a>


                                            </div>
                                        </td>

                                    </tr>
                                    <div class="clear"> </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="vocher ajust_caja_voucher_mobil">
                            <?php
                            $subtotal_final = round($total * $globalTasaCambio_dolar, 2);
                            
                            foreach ($taxes as $key => $value) {
                                $import = 1.18;
                                $tax_amount = number_format($subtotal_final - ($subtotal_final / $import), 2);
                                $tax_item[$key] = $tax_amount;
                                $grand_total = number_format($subtotal_final + $tax_amount, 2);
                            }
                            foreach ($tax_item as $key => $value) {
                                $list_tax .= $currency." ".$value. '<br />';
                            }
                            //$shipping_cost = ($shipping_cost)?'Costo de envio : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';	
                            //$shipping_cost
                            $newstr = number_format($total_final_soles, 2, '.', '');
                            $total_format = round($subtotal_final / 1.18, 2); 
                            
                            ?>




                            <div class="dis-total">
                            <h1 style="width:  40%; ">Sub Total :&nbsp;</h1>
                                <h1 class="dis-res" style="width: 157px;     background: #cecece;"><?php echo $currency." ". number_format($total_format, 2);  ?></h1>

                            </div>
                            <div class="clear"> </div>
                            <div class="dis-total">
                            <h1 style="width:  40%; ">IGV (18 %) : </h1>
                            <h1 class="dis-res" style="width: 157px;     background: #cecece;"><?php echo $list_tax; ?></h1>

                            </div>
                            <div class="clear"> </div>
                            <div class="dis-total">
                            <h1 style="width:  40%; ">Total Sol :&nbsp;   </h1>
                                <h1 class="dis-res" style="width: 157px;       color: #00578a;  background: #cecece;"><?php echo $currency ." ".number_format($total * $globalTasaCambio_dolar, 2, '.', ',');  ?></h1>

                            </div>
                            <div class="clear"> </div>
                            <div class="dis-total">
                            <h1 style="width:  43%; ">Total Dolar :&nbsp;   </h1>
                                <h1 class="dis-res" style="width: 157px;       color: #238028;  background: #cecece;"><?php echo "$ ".number_format($total, 2, '.', ','); ?></h1>

                            </div>

                            <div class="clear"> </div>
                        </div>
                    </div>
                    <a href='process/limpiar.php' style=" font-weight: 600; margin-right: 8px; padding: 16px; background:red;"
                        class='action-button'>Limpiar Carrito</a>
                        <a href="productos.php" class=" action-button" style="padding: 16px; background:#005a8f;" >Seguir Comprando </a>
                    <input type="button" name="next" class="next action-button" style="padding: 16px;     font-weight: 600;" onclick="ajusteBox();" value="Continuar" />
                </fieldset>


                <!-- fieldsets 2-->
                <fieldset>
                    <div class="default-title">
                    <h2>¿Seleccione una Opción?</h2>
                    </div>
                   
                    <br><br>
                    <div class="payment-method" align="center">
                        <label for="comprar" class="method cart-checkout">

                            <img style="width: 180px; cursor:pointer;" src="assets\img\img2.png" />
                            <div class="radio-input" style="font-size: 17px;">
                                <input id="comprar" type="radio" name="opciones" onclick="javascript:yesnoCheck();">
                                Comprar Productos <i class="hidden compra_style fa fa-check" aria-hidden="true"></i>
                            </div>
                        </label>

                        <label for="cotizar" class="method cart-checkout">
                            <img style="width: 180px; cursor:pointer;" src="assets\img\img1.png" />
                            <div class="radio-input" style="font-size: 17px;">
                                <input id="cotizar" type="radio" name="opciones" onclick="javascript:yesnoCheck();">
                                Cotizar Productos <i class="hidden cotiza_style fa fa-check" aria-hidden="true"></i>
                            </div>
                        </label>

                    </div>
                    <br><br>
                    <input type="button" name="previous" style="margin-right: 60px; padding: 16px;" class="previous action-button previus_ajuste_mobl" value="Retroceder"
                        onclick="ajusteBox_end();">
                    <input type="button" name="next" style="padding: 16px;" class="next action-button select_ope deshabilitado"
                        onclick="ajusteBox_next();" value="Continuar" disabled />
                </fieldset>


                <!-- fieldsets 3-->
                <fieldset>
                    <div id="TituloCompras" style="display:none">
                        
                    </div>
                    <div id="TituloCotiza" style="display:none">
                    
                        
                    </div>
                    <div class="shop-form">

                        <div class="default-title">
                            <h2>DATOS DE CLIENTE:</h2>
                        </div>
                        <div class="row" align="left" style="padding-right: 50px; padding-left: 50px;     font-size: 16px;">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Ruc - Dni <sup>*</sup></label>
                                <input class="form-control" id="ruc" name="ruc"  placeholder="Buscar Cliente" autocomplete="off">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn_sunat_ajust" style="    color: #f5f5f5; background: #27ae60; top: -48px; left: 26.5em;font-weight: 600; position: absolute;
                                        font-size: 17px;" type="submit" onclick="busqueda(this); return false"><i class="fa fa-search"
                                            aria-hidden="true"></i> SUNAT</button>
                                </span>
                                <img src="ajax.gif" class="ajaxgif hide" style="position: absolute; margin-top: -10px; margin-left: 13px;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Correo<sup>*</sup></label>
                                <input type="email" name="correo"  placeholder="jhon@gmail.com"
                                    class="form-control">
                            </div><!-- /input-group -->
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Razón Social<sup>*</sup></label>
                                <input type="text" name="nombre" id="nombre" placeholder="Razón Social" class="form-control">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <label>Numero de Celular <sup>*</sup></label>
                                <input type="text" name="telefono"  placeholder="0044 43345523" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label>Dirección Fiscal <sup>*</sup></label>
                                <input type="text" name="direccion" id="direccion"  placeholder="Dirección" class="form-control">
                            </div>

                        </div>
                        <div id="ifYes" style="display: none;     font-size: 16px;">
                            <div class="shop-form">

                                <div class="default-title">
                                    <h2>DATOS DE COMPRA</h2>
                                </div>

                            </div>

                            <div class="row">
                             
                                <div class="form-group col-md-3 ajust_cajas_compra" style="padding-left: 50px;">
                                <label style="float:left">Forma de Entrega <sup>*</sup></label>
                                    <select class="form-control" style="font-size: 15px;" name="F_entrega" id="F_entrega" >
                                        <option >Seleciona una Opción</option>
                                        <option value="Tienda">Despacho en Tienda</option>
                                        <option value="Lima">Delivery Lima </option>
                                        <option value="Provincia">Delivery Provincia </option>


                                    </select>
                                    
                                </div>      

                                <div class="form-group col-md-3 ajust_cajas_compra" >
                                <label style="float:left">Forma de Delivery <sup>*</sup></label>
                                    <select class="form-control" style="font-size: 15px;" name="distritos_v" id="distritos_v">
                                    <option value="" >  Selecciona una Opción </option>
                                    </select>
                                    
                                </div>   
                                            
                                <div class="form-group col-md-3 ajust_cajas_compra" style="padding-right: 50px;">

                                <label style="float:left">Costo Delivery <sup>*</sup></label>
                                    <input type="text" name="costo_adicional" id="costo_adicional" value="" placeholder="Costo Adicional" class="form-control">

                                    
                               
                                

                                </div>

                                <div class="form-group col-md-3 ajust_cajas_compra" style="padding-right: 50px;">
                                <label style="float:left">Forma de Pago <sup>*</sup></label>
                                    <select class="form-control"  style="font-size: 15px;" name="F_pago">
                                        <option >Seleciona una Opción</option>
                                        <option value="Al Contado">Al Contado</option>
                                        <option value="A Cuenta">A Cuenta</option>
                                       

                                    </select>
                                   

                                </div>
                                
                                <!-- <div class="form-group col-md-3 col-sm-3 col-xs-6">

                                    <label style="float:left">Fecha de Despacho <sup>*</sup></label>
                                    <input type="text" name="F_despacho"  style="font-size: 15px;" id="F_despacho" class="form-control " placeholder="dd/mm/yy">


                                </div>
                                <div class="form-group col-md-3 col-sm-3 col-xs-6" style="padding-right: 50px;">

                                    <label style="float:left">Horarios de Entrega <sup>*</sup></label>
                                    <select class="form-control"  style="font-size: 15px;" name="H_entrega">
                                        <option value="10:00 Am - 12:00 Pm">10:00 Am - 12:00 Pm </option>
                                        <option value="1:00 Pm - 5:00 Pm">1:00 Pm - 5:00 Pm</option>

                                    </select>
                                </div> -->

                            </div>   
                            
                            <div class="row">
                            
                            
                                <div class="form-group col-md-3 ajust_cajas_compra" style="padding-left: 50px;">
                                <label style="float:left">Medio de Pago <sup>*</sup></label>
                                    <select class="form-control"  style="font-size: 15px;" name="M_pago">
                                        <option >Seleciona una Opción</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Electronico">Deposito</option> 
                                        <option value="Tarjeta">Tarjeta</option> 
                                       

                                    </select>
                                

                                </div>
                                <div class="form-group col-md-3 ajust_cajas_compra">
                                <label style="float:left">Moneda de Pago <sup>*</sup></label>
                                    <select class="form-control" style="font-size: 15px;" name="Moneda_pago" id="Moneda_pago" >
                                        <option >Seleciona una Opción</option>
                                        <option value="soles">Soles</option>
                                        <option value="dolares">Dolares</option>
                                        


                                    </select>
                                  
                                
                                </div>
                                <div class="form-group col-md-3 ajust_cajas_compra">

                                    <label style="float:left">Direccion de envio <sup>*</sup></label>
                                    <input type="text" name="dir_delivery"  placeholder="Direccion de Envio" style="font-size: 15px;"   class="form-control " >


                                </div>
                                <div class="form-group col-md-3 ajust_cajas_compra" style="padding-right: 50px;">

                                    <label style="float:left">Referencia <sup>*</sup></label>
                                    <input type="text" name="referencia_delivery"  placeholder="Referencia" style="font-size: 15px;" id="referencia_delivery" class="form-control " >

                                </div>

                            </div>  

                             

                        </div>

                        


                        <?php
                        $cod = ejecutarSQL::consultar("SELECT RIGHT(id_cotizacion,6) as CodCotiza FROM cotizacion_online");
                        $verificaltotal = mysqli_num_rows($cod);
                        if ($verificaltotal <= 0) {
                            $codigo1 = "ON000000";
                        } else {
                            while ($codigo = mysqli_fetch_assoc($cod)) {
                                $codigo = $codigo['CodCotiza'] + 1;
                                $repo   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
                                $codigo1 = "ON$repo";
                                //print_r($codigo);
                            }
                        }
                        ?>
                        <input type="hidden" name="CodCotiza" value="<?php echo $codigo1 ?>">
                        <input type="hidden" name="fecha" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>"
                            value="<?php echo date("Y-m-d"); ?>">



                           

                    </div>

                    <div class="col-md-12" align="center">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Todos los Campos <sup>(*)</sup> son Obligatorios</label>

                    </div>
                    <div class="clear"> </div>
                    <br>
                    <input type="button" name="previous" style="padding: 16px; margin-right: 60px;" class="previous action-button previus_ajuste_mobl" value="Retroceder"
                        onclick="ajusteBox_retrocede();">
                    <input type="button" name="next" style="padding: 16px; " class="next action-button" value="Continuar"
                        onclick="ajusteBox_final();" >






                </fieldset>


                <!-- fieldsets 4-->
                <fieldset>
                    <div id="descarga_cotiza" style="display:none">
                        <div class="default-title">
                            <h2>TERMINOS DE COTIZACIÓN</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="payment-method" align="center">
                                    <label for="comprar" class="method cart-checkout">

                                        <img style="width: 400px;" src="assets\img\cotizar.svg" />

                                    </label>
                                    Gracias por cotizar
                                </div>



                            </div>
                            <div class="col-md-6 ajust_box_term" style="border: solid 2px #6c63ff; position: relative; left: -30px; border-radius: 15px;">
                                <div class="place-order ">

                                    <div class="payment-options">
                                        <ul style="    list-style: none; padding-bottom: 35px;">
                                            <br>
                                            <div style="text-align: -webkit-left;">



                                                <li>
                                                    <div class="radio-option" style="height: 40px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Una vez finalizada su compra recibirá un correo de confirmación con su orden de compra
                                                                .</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option" style="height: 40px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Nuestros asesores de venta se pondrán en contacto para concretar la
                                                                compra.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option" style="height: 60px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Una vez emitido su comprobante de pago se procederá a la entrega del producto según su
                                                                modalidad de despacho elegido entrega en tienda, delivery , envio a
                                                                provincia.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option" style="height: 60px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Si tuviera alguna consulta adicional no dude en comunicarse con su asesor de venta vía
                                                                WhatsApp al 986838333 - 996727562</span></label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="radio-option" style="height: 60px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Para pagos con transferencias y depósitos comunicarse con su asesor de ventas al
                                                                WhatsApp 986838333</span></label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="radio-option" style="height: 40px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Horario de Atención lunes a Sábado de 9am a 6pm</span></label>
                                                    </div>
                                                </li>

                                                <li class="">
                                                 <input type="button"
                                                            style=" position: absolute;  bottom: -126px; padding: 16px;
    right: 502px;
    width: 25%;"
                                                            name="cotizacion" class=" action-button generar_coti" onclick="formSend('cotizacion')"
                                                            style="width:25%" value="Generar Cotizacion" />
                                                            <a href='process/limpiar.php'  style="position: absolute; bottom: -126px; padding: 11px; right: 325px; background: red; width: 25%; text-align: center;"
                                                class='action-button'>Finalizar Cotizacion</a>

                                                    <div class="radio-option" id="aca_cotiza"
                                                        style="text-align: -webkit-center; padding-top: 23px; margin-bottom: -7px;">
                                                        
                                                       
                                                    </div>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>



                                </div>
                            </div>





                        </div>
                    </div>
                    <div id="descarga_compras" style="display:none">
                        <div class="default-title">
                            <h2>TERMINOS DE COMPRA </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="payment-method" align="center">
                                    <label for="comprar" class="method cart-checkout">

                                        <img style="width: 400px;" src="assets\img\comprar2.svg" />

                                    </label>
                                    Gracias por su Compra
                                </div>



                            </div>
                            <div class="col-md-6 ajust_box_term" style="border: solid 2px #6c63ff; position: relative; left: -30px; border-radius: 15px;">
                                <div class="place-order ">

                                    <div class="payment-options">
                                        <ul style=" list-style: none; padding-bottom: 35px;">
                                            <br>
                                            <div style="text-align: -webkit-left;">



                                                <li>
                                                    <div class="radio-option" style="height: 40px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Una vez finalizada su compra recibirá un correo de confirmación con su orden de compra
                                                                .</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option" style="height: 40px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Nuestros asesores de venta se pondrán en contacto para concretar la
                                                                compra.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option" style="height: 60px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Una vez emitido su comprobante de pago se procederá a la entrega del producto según su
                                                                modalidad de despacho elegido entrega en tienda, delivery , envio a
                                                                provincia.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option" style="height: 60px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Si tuviera alguna consulta adicional no dude en comunicarse con su asesor de venta vía
                                                                WhatsApp al 986838333 - 996727562</span></label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="radio-option" style="height: 60px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Para pagos con transferencias y depósitos comunicarse con su asesor de ventas al
                                                                WhatsApp 986838333</span></label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="radio-option" style="height: 40px;">
                                                        <label for="payment-1"><span class="small-text"
                                                                style="margin-top: 0; margin-left: 0; padding: 0;">
                                                                <strong
                                                                    style="color: #27ae60; font-size: 25px;font-weight: 600; vertical-align: -webkit-baseline-middle;">°</strong>
                                                                Horario de Atención lunes a Sábado de 9am a 6pm</span></label>
                                                    </div>
                                                </li>

                                                <li class="">
                                                 
                                                <input type="button"
                                                            style="    position: absolute; bottom: -126px; right: 501px; width: 25%; padding: 16px;"
                                                            name="compra1" class=" action-button generar_coti"   onclick="formSend('compra')"
                                                            value="Generar Compra" />

                                                            <a href='process/limpiar.php'  style="position: absolute; bottom: -126px; padding: 11px; right: 325px; background: red; width: 25%; text-align: center;"
                                                class='action-button'>Finalizar Cotizacion</a>



                                                    <div class="radio-option" id="aca_compra"
                                                        style=" text-align: -webkit-center; padding-top: 23px; margin-bottom: -7px;">
                                                        
                                                        

                                                    </div>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>



                                </div>
                            </div>





                        </div>

                    </div>
                    <br> <br>
                    <input type="button" name="previous" style="position: relative;
    left: -160px;
    padding: 15px;
    width: 12%;" class="previous action-button generar_coti_compra"
                        onclick="ajusteBox_back_final()" value="Retroceder" />

                    <a style="display:none;"
                        href="https://web.whatsapp.com/send?phone=51947320830&amp;text=HOLA+COTIZAME+ESTE+PRODUCTO%0D%0A%0D%0A*Puerta++enmarcada*%0A*PRECIO:*%20S/1.00%0A*URL:*%20https%3A%2F%2Fhttps://solucionescctvysistemas.com/assets/img-products/computadora-dextec-amd-ryzen-3-2200g-8gb-1tb-21-5--fhd.jpg %2Fproducto%2Fpuerta-enmarcada%2F%0D%0A%0D%0AGRACIAS"
                        target="_blank">
                        COTIZAR POR WASAPP </a>
                </fieldset>
            </form>





    </main><!-- End main -->



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
    <?php include 'inc/slider_bottom.php';  ?>
    <?php include 'inc/footer.php';  ?>
    <?php include 'inc/scripts.php';  ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script>

    

    $(document).ready(function(){

        $("#F_entrega").change(function(){
            var x = $(this).val();

            $.ajax({
                url: 'library/delivery.php',
                type: 'post',
                data: {
                    x: x
                },
                dataType: 'json',
                success:function(response){

                    var len = response.length;

                    $('#distritos_v').empty(); 
                    $('#distritos_v').append('<option > Selecciona una Opción </option>');
                    var i = 0;
                    for( var i = 0; i < len; i++){

                    var lista = response[i]['lista'];

                    $('#distritos_v').append(lista);

                    }
 

                }
            });
        });

        $("#distritos_v").change(function(){
        var z = $(this).val();
        
        $.ajax({
            url: 'library/delivery_costo.php',
            type: 'post',
            data: {
                z: z
            }, 
            success:function(response){
 
                document.getElementById("costo_adicional").value = response;

            }
        });
        });

        });


    function ajusteBox() {

        $('.init_1').removeClass("init_1").addClass("init_2");



        window.scroll({
            top: 200,
            left: 0,
            behavior: 'smooth'
        });
    }

    function ajusteBox_end() {

        $('.init_2').removeClass("init_2").addClass("init_1");



        window.scroll({
            top: 200,
            left: 0,
            behavior: 'smooth'
        });
    }

    function ajusteBox_next() {

        $('.init_2').removeClass("init_2").addClass("init_3");

        window.scroll({
            top: 200,
            left: 0,
            behavior: 'smooth'
        });
    }

    function ajusteBox_retrocede() {

        $('.init_3').removeClass("init_3").addClass("init_2");

        window.scroll({
            top: 200,
            left: 0,
            behavior: 'smooth'
        });
    }

    function ajusteBox_final() {

        $('.init_3').removeClass("init_3").addClass("init_2");
        alert("Todos los Campos son obligatorios");
        

        window.scroll({
            top: 200,
            left: 0,
            behavior: 'smooth'
        });

    }

    function ajusteBox_back_final() {

        $('.init_2').removeClass("init_2").addClass("init_3");

        window.scroll({
            top: 200,
            left: 0,
            behavior: 'smooth'
        });

    }


    function ordenar() {
        document.getElementById("form_cotiza").submit();
    }
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        minDate: 0,
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $(function() {
        $("#F_despacho").datepicker();
    });


    function yesnoCheck() {



        if (document.getElementById('comprar').checked) {


            const menj_1 = document.querySelector('.compra_style');
            menj_1.classList.remove('hidden');

            const menj_2 = document.querySelector('.cotiza_style');
            menj_2.classList.add('hidden');


            $('.select_ope').attr('disabled', false);

            const menj_4 = document.querySelector('.select_ope');
            menj_4.classList.remove('deshabilitado');

            document.getElementById('TituloCompras').style.display = 'block';
            document.getElementById('TituloCotiza').style.display = 'none';

            document.getElementById('descarga_compras').style.display = 'block';
            document.getElementById('descarga_cotiza').style.display = 'none';


            document.getElementById('ifYes').style.display = 'block';
            document.getElementById('ifNo').style.display = 'none';

        } else {

            const menj_1 = document.querySelector('.cotiza_style');
            menj_1.classList.remove('hidden');

            const menj_2 = document.querySelector('.compra_style');
            menj_2.classList.add('hidden');

            $('.select_ope').attr('disabled', false);

            const menj_4 = document.querySelector('.select_ope');
            menj_4.classList.remove('deshabilitado');

            document.getElementById('TituloCompras').style.display = 'none';
            document.getElementById('TituloCotiza').style.display = 'block';

            document.getElementById('descarga_compras').style.display = 'none';
            document.getElementById('descarga_cotiza').style.display = 'block';

            document.getElementById('ifYes').style.display = 'none';
            document.getElementById('ifNo').style.display = 'block';

        }
    }




    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $(".progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function() {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $(".progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    (function($) {
        $.ajaxblock = function() {
            $("body").prepend(
                "<div id='ajax-overlay'><div id='ajax-overlay-body' class='center'><i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><span class='sr-only'>Loading...</span></div></div>"
            );
            $("#ajax-overlay").css({
                position: 'absolute',
                color: '#FFFFFF',
                top: '0',
                left: '0',
                width: '100%',
                height: '100%',
                position: 'fixed',
                background: 'rgba(39, 38, 46, 0.67)',
                'text-align': 'center',
                'z-index': '9999'
            });
            $("#ajax-overlay-body").css({
                position: 'absolute',
                top: '40%',
                left: '50%',
                width: '120px',
                height: '48px',
                'margin-top': '-12px',
                'margin-left': '-60px',
                //background: 'rgba(39, 38, 46, 0.1)',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                'border-radius': '10px'
            });
            $("#ajax-overlay").fadeIn(50);
        };
        $.ajaxunblock = function() {
            $("#ajax-overlay").fadeOut(100, function() {
                $("#ajax-overlay").remove();
            });
        };
    })(jQuery);

    function busqueda(ruc) {
        //$this.button('loading');
        $.ajaxblock();
        var documento = $("#ruc").val();

        if (documento == '') {
            alert("Documento Vacio");
            $.ajaxunblock();
        } else {
            $.ajax({
                type: "POST",
                url: "sunat/consulta.php",
                data: {
                    "ruc": $("#ruc").val()
                },
                dataType: "json",
            }).done(function(result) {
                
                $('#nombre').val(result['nombre']);

                $('#direccion').val(result['direccion'] + " - " + result['distrito']);

                $.ajaxunblock();


            }).fail(function(jqXHR, textStatus, errorThrown) {
                alert("Documento Invalido");
                $.ajaxunblock();
            });


        }

    }

    function formSend(id) {
        
        var options = $('#my_awesome_form').serialize();
        options = options + '&' + $.param({
            'operacion': id
        });
        $.ajax({
            type: "POST",
            url: "process/ver_cotiza_2.php",
            data: options,
            async: true,
            dataType: 'json',
            success: function(response) {

                alert("APROBADO CON EXITO");
                 
                html = "";
                // // <input type="button" name="submit[descarga]" class=" action-button" onclick="formSend('descarga')" style="width:25%" value="Descargar Comprobante1" />
                // // <input type="button" name="submit[enviar_correo]" class=" action-button" onclick="formSend('enviar_correo')" style="width:25%"  value="Enviar Correo1" />

                html += '<a href="assets/pdf/'+ response['orden_pdf'] + '" class=" action-button" style="width:25%;     margin-right: 47px;  padding: 16px; background: #f58634!important;"  download="' + id + '">Descargar Archivo</a>  ';
                html += '<a href="javascript:" class="action-button enviar_correo_btn" onClick="formMail(&apos;' + response['correo'] + '&apos;, &apos;' + response['orden_pdf'] + '&apos;)"  style="width:25%; padding: 16px; background: #f58634!important;"> Enviar Correo </a>';
                switch (id) {
                    case 'compra':
                        $('#aca_compra').html(html);
                        break;

                    case 'cotizacion':
                        $('#aca_cotiza').html(html);
                        break;

                }


            }
        });
    }


    function formMail(correo, pedido) {

        console.log(pedido);

        $.ajax({

            type: "POST",
            url: "process/send_mail.php",
            data: {
                p: pedido,
                c: correo
            },
            async: true,
            beforeSend: function() {
                $.ajaxblock();
            },
            success: function(response) {
                alert(response);
                $.ajaxunblock();


            }
        });
    }
    </script>
