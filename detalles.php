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
    <html lang="es">

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
        
    #content-area5 .landing .caption {
    position: absolute!important;
    top: 40%!important;
    padding: 90px 0 178px!important;
    float: left;
    width: 82%!important;
    overflow: hidden;
    position: relative;
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


    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div id="fb-root"></div>
        <script crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v5.0"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Ecommerce">
        <meta property="og:url"
        content="http://solucionescctvysistemas.com/infoProd.php?CodigoProd=<?php echo $CodProd; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $nombre; ?>" />
        <meta property="og:description" content="<?php echo $detalle; ?> " />
        <meta property="og:image" content="http://solucionescctvysistemas.com/assets/img-products/<?php echo $imagen; ?>" />
        <meta property="fb:app_id" name="fb_app_id" content="116012569850580" />
        <link rel="canonical" href="assets/css/style_detalle.css" class="next-head" />
        <?php include 'assets/css/detalles_css.php'; ?>
    </head>

    <body>



        <section class="">
            <div class="container jsx-4234634535">
                <div class="jsx-4234634535 productContainer">

                    <div class="jsx-4113348717 pdp-container">
                        <section class="jsx-4113348717 pdp-image-section">
                            <div class="jsx-2128732992 jsx-55879769 imageGallery fa--image-gallery">

                                <div class="jsx-2134917503 headline-wrapper fa--image-gallery-item__desktop">
                                    <div class="hidden jsx-3040205320"></div>
                                    <img src="assets/img-products/1-4.jpg" alt="" width="800" height="800" class="jsx-2487856160" />
                                </div>


                            </div>
                            <div class="jsx-463502579">

                                <div class="jsx-463502579 return-policy-custom-container">

                                    <div class="jsx-463502579 return-policy-text">
                                        <span id="" class="copy3 senary jsx-3736277290 normal ">
                                            <span class="jsx-463502579 header">Garantia de calidad</span>
                                        </span>
                                        <span id="" class="copy3 senary jsx-3736277290 normal ">
                                            <span class="jsx-463502579 info">Para cambios o devoluciones.</span>
                                            <a href="" target="_blank" class="jsx-3882044876 link-button button-quaternary button-small ">
                                                <span id="" class="copy3 senary jsx-3736277290 normal ">
                                                    <span class="jsx-463502579 link">Más información </span>
                                            </a>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="jsx-4113348717 pdp-detail-section">
                            <div class="jsx-1599888651 basic-details-Desktop">
                                <div class="jsx-1599888651 corner-details">
                                    <div data-brand="LENOVO" class="jsx-3572928369 product-brand fa--brand"><a href="infoCat.php?CodigoCat=C000000" class="jsx-3572928369 product-brand-link">COMPUTO Y INFORMATICA</a></div>

                                </div>
                                <div class="jsx-1599888651 corner-details">
                                    <h1 class="jsx-3686231685">
                                        <div data-name="Laptop IdeaPad S340 14&quot; Core i5 10ma Gen 8GB RAM 256GB SSD" class="jsx-3686231685 product-name fa--product-name">Laptop IdeaPad S340 14&quot; Core i5 10ma Gen 8GB RAM 256GB SSD
                                            <!-- -->
                                        </div>
                                    </h1>
                                     
                                </div>
                                <div class="jsx-1599888651 reviews ">
                                    <div class="jsx-1599888651 reviews-column ">
                                        <div></div>
                                    </div>
                                    <div class="jsx-1231170568 pod-badges pod-badges-PDP"><span id="testId-Pod-badges-7% DCTO" style="background-color:green;color:#FCFAF9" class="jsx-1231170568 copy8 primary jsx-3736277290 bold pod-badges-item-PDP pod-badges-item">Nuevo</span></div>
                                </div>
                            </div>
                            <hr class="jsx-4113348717 divider-line" />
                            <div>
                                <div data-backend-category="J11041201" data-availability="false" data-published="true" data-variations="1" class="jsx-2170457292 product-specifications">
                                    <div class="jsx-2170457292 product-specifications-column fa--product-specifications-column__desktop">
                                        <div class="jsx-447543265">
                                            <div class="flex jsx-447543265">
                                                <div class="jsx-447543265 market-place-tag" style="background-color:#FA3C14;color:#FCFAF9">
                                                    <p class="jsx-447543265 market-place-tag-text bold pod-badges-item-PDP pod-badges-item ">Disponible</p>
                                                </div>
                                            </div>
                                            <p class="jsx-447543265 sellerInfoContainer"></p>
                                        </div>
                                        <div class="jsx-3624412160 specifications-container fa--product-characteristic-features">
                                            <div class="jsx-3624412160 specifications-title">Características destacadas</div>
                                            <div class="jsx-3624412160 specifications-list">
                                                <ul class="jsx-3624412160">
                                                    <li class="jsx-3624412160"><strong class="jsx-3624412160">Código</strong>:
                                                        <!-- -->881883975
                                                    </li>
                                                    <li class="jsx-3624412160"><strong class="jsx-3624412160">Marca</strong>:
                                                        <!-- -->Lenovo
                                                    </li>
                                                    <li class="jsx-3624412160"><strong class="jsx-3624412160">Modelo</strong>:
                                                        <!-- -->IdeaPad S340/81VV0007LM
                                                    </li>

                                                    <li class="jsx-3624412160"><strong class="jsx-3624412160">Tipo</strong>:
                                                        <!-- -->Notebooks
                                                    </li>
                                                    <li class="jsx-3624412160"><strong class="jsx-3624412160">Procesador</strong>:
                                                        <!-- -->Intel Core i5
                                                    </li>
                                                    <li class="jsx-3624412160"><strong class="jsx-3624412160">Memoria total</strong>:
                                                        <!-- -->256GB SSD
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="jsx-2383607498 availability fa--availability-info__desktop">
                                            <div class="jsx-2383607498 availability-container">
                                                <div class="jsx-2383607498 availability-item title"><span class="jsx-2383607498">Tipo de entrega</span></div>
                                                <div class="jsx-2383607498 availability-item false">
                                                    <div class="jsx-2383607498 icon deliveryAvailable"></div>
                                                    <div class="jsx-2383607498 content false">
                                                        <div class="jsx-2383607498 content-main"><span class="jsx-2383607498 bold">Despacho a domicilio</span></div>
                                                        <div class="jsx-2383607498 content-sub">
                                                            <div id="testId-Availability-Destop-ModalOpen-HomeDelivery" role="button" tabindex="0" class="jsx-2383607498"><span class="underline jsx-2383607498">Revisar disponibilidad</span><span class="jsx-2383607498 caret"><i class="jsx-2383607498 csicon-right"><span class="sr-only jsx-2383607498">Revisar disponibilidad</span></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jsx-2383607498 availability-item false">
                                                    <div class="jsx-2383607498 icon pickupInStoreAvailable"></div>
                                                    <div class="jsx-2383607498 content false">
                                                        <div class="jsx-2383607498 content-main"><span class="jsx-2383607498 bold">Retiro en tienda</span></div>
                                                        <div class="jsx-2383607498 content-sub">
                                                            <div id="testId-Availability-Destop-ModalOpen-PickupInStore" role="button" tabindex="0" class="jsx-2383607498"><span class="underline jsx-2383607498">Selecciona una tienda</span><span class="jsx-2383607498 caret"><i class="jsx-2383607498 csicon-right"><span class="sr-only jsx-2383607498">Selecciona una tienda</span></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jsx-2170457292 product-specifications-column fa--product-specifications-column__desktop">
                                        <div class="jsx-2170457292 price">
                                            <div id="testId-pod-prices-881883975" class="jsx-3342506598 prices prices-4_GRID">
                                                <ol class="jsx-3342506598 ol-4_GRID pdp-prices fa--prices">
                                                    <li class="jsx-3342506598 price-0">
                                                        <div data-variant="PDP_MAIN" class="jsx-3342506598 cmr-icon-container">
                                                            <span id="" class="copy13 primary high jsx-3736277290 normal " style="font-size: 27px; font-weight: 700;padding-bottom: 10px;">
                                                                S/ 2,499
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="jsx-3342506598 price-1">
                                                        <div data-variant="PDP_MAIN" class="jsx-3342506598 cmr-icon-container">
                                                            <span id="" class="copy14 primary jsx-3736277290 normal ">
                                                                $ 2,699
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="cmr-points" class="jsx-4060520461 cmr-points fa--cmr-points" style="font-size: 1.5rem!important;">Cotizacion & Compra</div>
                                        </div>
                                        <p class="jsx-1130257793 copy5 primary jsx-3736277290 normal stock-quantity">Unidades disponibles
                                            <!-- -->: <span class="jsx-1130257793">En Stock</span>
                                        </p>
                                        <div class="jsx-2170457292 addToCart-container fa--add-to-cart__desktop">
                                            <div id="buttonForCustomers">
                                                <button type="button" class="jsx-1816208196 button button-primary button-primary-xtra-large">
                                                    Agregar a la Bolsa<i class="csicon-arrow_right"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="jsx-2170457292 cmrApertura-container"></div>


                                        <div class="fa--warranty">

                                            <div class="jsx-3081896935 options">
                                                <button type="button" class="jsx-2662861071 option pointer medium ">
                                                    <span class="jsx-2662861071 label ">Despachos y formas de envío</span>
                                                </button>
                                                <button type="button" class="jsx-2662861071 option pointer medium ">
                                                    <span class="jsx-2662861071 label ">Devoluciones y Reembolsos</span>
                                                </button>
                                                <button type="button" class="jsx-2662861071 option pointer medium ">
                                                    <span class="jsx-2662861071 label ">Medios y Formas de Pago</span>
                                                </button>
                                                <button type="button" class="jsx-2662861071 option pointer medium ">
                                                    <span class="jsx-2662861071 label ">Garantías</span>
                                                </button>
                                                <button type="button" class="jsx-2662861071 option pointer medium ">
                                                    <span class="jsx-2662861071 label ">Términos y Condiciones</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
        </section>
        </div>
        </div>


        </div>

        </section>

    <?php }  ?>

    </body>

    </html>