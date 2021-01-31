<?php 
  session_start();

  unset($_SESSION['consulta']);
  include 'php/panelSeguridad.php';
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ComVen | HabaDev </title>
    <meta name="keywords" content="ComVen-App">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.solucionescctvysistemas.com/assets/img/favicon.png">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.typeahead.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="librerias/select2/css/select2.css">
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap-datepicker3.css">

    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="horizontal-layout ">
    <div class="app-loader main-loader">
        <div class="loader-box">
            <div class="bounceball"></div>
            <div class="text">ComVen<span>app</span></div>
        </div>
    </div>
    <!-- .main-loader -->
    <div class="page-box">
        <div class="app-container">
            <!-- Horizontal navbar -->
            <div id="navbar1" class="app-navbar horizontal">
                <div class="navbar-wrap"><button
                        class="no-style navbar-toggle navbar-open d-lg-none"><span></span><span></span><span></span></button>
                    <div class="app-logo">
                        <div class="logo-wrap"><img src="https://www.solucionescctvysistemas.com/assets/img/logo.png"
                                alt="" width="147" height="33" class="logo-img"></div>
                    </div>

                    <div class="app-actions ">
                        <div class="hidden dropdown item"><button class="no-style dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-offset="0, 12"><span class="icon icofont-notification"></span> <span
                                    class="badge badge-danger badge-sm">5</span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-280 ">
                                <div class="menu-header">
                                    <h4 class="mt-0 mb-0 h5 menu-title">Notifications</h4><a href="#"
                                        class="text-danger">Clear All</a>
                                </div>
                                <ul class="list">
                                    <li><a href="#"><span class="icon icofont-heart"></span>
                                            <div class="content"><span class="desc">Sara Crouch liked your photo</span>
                                                <span class="date">17 minutes ago</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-users-alt-6"></span>
                                            <div class="content"><span class="desc">New user registered</span> <span
                                                    class="date">23 minutes ago</span></div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-share"></span>
                                            <div class="content"><span class="desc">Amanda Lie shared your post</span>
                                                <span class="date">25 minutes ago</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-users-alt-6"></span>
                                            <div class="content"><span class="desc">New user registered</span> <span
                                                    class="date">32 minutes ago</span></div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-ui-message"></span>
                                            <div class="content"><span class="desc">You have a new message</span> <span
                                                    class="date">58 minutes ago</span></div>
                                        </a></li>
                                </ul>
                                <div class="menu-footer"><button class="btn btn-primary btn-block">View all
                                        notifications <span class="ml-2 btn-icon icofont-tasks-alt"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown item"><button class="no-style dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-offset="0, 10"><span class="d-flex align-items-center"><img
                                        src="assets/content/user-400-1.jpg" alt="" width="40" height="40"
                                        class="mr-1 rounded-500"> <i class="icofont-simple-down"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-180">
                                <ul class="list">
                                    <li><a href="./php/logout.php" class="align-items-center"><span
                                                class="icon icofont-logout"></span> Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-skeleton horizontal">
                        <div class="left-part d-flex align-items-center"><span
                                class="navbar-button bg animated-bg d-lg-none"></span> <span
                                class="sk-logo bg animated-bg d-none d-lg-block"></span> <span
                                class="search d-none d-md-block bg animated-bg"></span></div>
                        <div class="right-part d-flex align-items-center">
                            <div class="icon-box"><span class="icon bg animated-bg"></span> <span class="badge"></span>
                            </div><span class="avatar bg animated-bg"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Horizontal navbar -->
            <!-- Horizontal navbar 2 -->
            <div id="navbar2" class="app-navbar horizontal horizontal-vertical">
                <div class="navbar-wrap"><button
                        class="no-style navbar-toggle navbar-close icofont-close-line d-lg-none"></button>
                    <div class="app-logo">
                        <div class="logo-wrap"><img src="https://www.solucionescctvysistemas.com/assets/img/logo.png"
                                alt="" width="147" height="33" class="logo-img"></div>
                    </div>
                    <div class="main-menu">
                        <nav class="main-menu-wrap">
                            <ul class="menu-ul">

                                <li class="menu-item "><a class="item-link" href="compras.php"><span
                                            class="link-text"><i class="icofont-dollar-plus"></i></i> Compras</span></a>
                                </li>
                                <li class="menu-item "><a class="item-link" href="ventas.php"><span class="link-text"><i
                                                class="icofont-bar-code"></i> Ventas</span></a></li>


                            </ul>
                        </nav>
                    </div>
                    <div class="navbar-skeleton horizontal">
                        <div class="left-part d-flex align-items-center"><span
                                class="navbar-button bg animated-bg d-lg-none"></span> <span
                                class="sk-logo bg animated-bg d-none d-lg-block"></span> <span
                                class="search d-none d-md-block bg animated-bg"></span></div>
                        <div class="right-part d-flex align-items-center">
                            <div class="icon-box"><span class="icon bg animated-bg"></span> <span class="badge"></span>
                            </div><span class="avatar bg animated-bg"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Horizontal navbar -->

            <main class="main-content">

                <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>
                <div class="main-content-wrap">
                    <div class="page-content">

                        <!-- metricas  -->
                        <div class="row">

                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-01s bg-light">
                                    <!-- <a href="" data-toggle="modal" data-target="#modalMes">-->
                                    <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                        <div class="row align-items-center">
                                            <div
                                                style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                <span style="padding-left: 30px; color:white;">Año Actual </span></div>
                                            <div
                                                style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                            </div>
                                            <div
                                                style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                            </div>
                                            <div class="col col-6" align="center"
                                                style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); margin-bottom: 13px;">
                                                <div class="p-0 opacity-50 icon fs-19 text-primary " id="anual_actual">
                                                    
                                                </div>
                                                <div
                                                style="position: absolute; background: #f58634; height: 72%; width: 86.3%; left: 10px; top: 38px;">
                                                <span style="padding-left: 0; color:white;" id="total_num_anual"> </span></div>
                                            </div>
                                            <div class="col col-6">
                                                <h6 class="mt-0 mb-1">Monto Anual</h6>
                                                <div class="count text-primary fs-20" id="monto_anual_venta">  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-02s bg-light">
                                    <a href="" data-toggle="modal" data-target="#modalMes">
                                        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                            <div class="row align-items-center">
                                                <div
                                                    style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                    <span style="padding-left: 10px; color:white;">Selecciona el
                                                        Mes</span></div>
                                                <div
                                                    style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                                </div>
                                                <div
                                                    style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                                </div>
                                                <div class="col col-6" align="center"
                                                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                                                    <div class="p-0 opacity-50 icon fs-19 text-primary " id="mes_actual_venta">
                                                            

                                                    </div>
                                                </div>
                                                <div class="col col-6">
                                                    <h6 class="mt-0 mb-1">Monto Mensual</h6>
                                                    <div class="count text-primary fs-20" id="monto_mes_venta"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-03s bg-light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col col-5">
                                                <div class="p-0 opacity-50 icon fs-48 text-primary icofont-money-bag">
                                                </div>
                                            </div>
                                            <div class="col col-7">
                                                <h6 class="mt-0 mb-1">Nro de Ventas </h6>
                                                <div class="count text-primary fs-20" id="num_venta"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-04s bg-light">
                                <a href="javascript:" onclick="openModal()">
                                        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                            <div class="row align-items-center">
                                                <div
                                                    style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                    <span style="padding-left: 10px; color:white;">Estado Impuesto</span></div>
                                                <div
                                                    style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                                </div>
                                                <div
                                                    style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                                </div>
                                                <div class="col col-6" align="center"
                                                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                                                    <div class="p-0 opacity-50 icon fs-19 text-primary " id="impuesto_venta">
                                                            

                                                    </div>
                                                </div>
                                                <div class="col col-6">
                                                    <h6 class="mt-0 mb-1">Impuesto Total</h6>
                                                    <div class="count text-primary fs-20" id="impuesto_total" > 
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                   
                                    <!-- <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col col-5">
                                                <div class="p-0 opacity-50 icon fs-48 text-primary icofont-dollar-plus">
                                                </div>
                                            </div>
                                            <div class="col col-7">
                                                <h6 class="mt-0 mb-1 text-nowrap">Impuesto</h6>
                                                <div class="count text-primary fs-20" id="impuesto_venta">  
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>








                        </div>

                        <div class="page-content">
                            <div class="mb-0 card">
                                <div class="card-body table-responsive" style="overflow-x: hidden!important;">

                                    <table id="example2" class="table table-condensed display responsive nowrap"
                                        style="width:100%">
                                        <thead>
                                            <tr class="text-white" style="background:#f58634;">
                                                <th scope="col">N° Comprobante</th>
                                                <th scope="col">Tipo Comprobante</th>
                                                <th scope="col">Ruc</th>
                                                <th scope="col">Razón Social</th>
                                                <th scope="col">Dirección Fiscal</th>
                                                <th scope="col">Fecha Emisión</th>
                                                <th scope="col">Descripción </th>
                                                <th scope="col">Por Concepto</th>
                                                <th scope="col">Tipo Moneda</th>
                                                <th scope="col">Tipo Pago</th>
                                                <th scope="col">Estado Sunat</th>
                                                <th scope="col">Estado CPE</th>
                                                <th scope="col">Monto Total</th>
                                                <th scope="col">Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="add-action-box"><button class="btn btn-lg btn-square rounded-pill"
                                    style="background:#f58634; color:white;" data-toggle="modal"
                                    data-target="#modalNuevo"><span class="btn-icon icofont-plus"></span></button></div>
                        </div>



                        <!-- Modal para registros nuevos -->


                        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">REGISTRO DE VENTAS</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <form id="regVenta"  method="POST" onsubmit="regVenta(); return false">
                                                <div class="row">

                                                    <div class="col-12 col-md-3">
                                                     
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-attachment"></div>
                                                            <div class="input-group ">
                                                                <input  name="num_comprobante" class="rounded form-control"
                                                                    type="text" placeholder="N° Comprobante" style="border-top-left-radius: 0 !important;
                                                                    border-bottom-left-radius: 0 !important;
                                                                    border-top-right-radius: 0px !important;
                                                                    border-bottom-right-radius: 0px !important;">
                                                                <div class="input-group-addon">
                                                                    <select class="rounded form-control"
                                                                        name="tipo_comprobante" style="padding-left: 0px;
                                                                            padding-right: 0px;
                                                                            border-top-left-radius: 0 !important;
                                                                            border-bottom-left-radius: 0 !important;
                                                                            border-top-right-radius: 0px !important;
                                                                            border-bottom-right-radius: 0px !important;
                                                                            padding-bottom: 10px;">
                                                                        <option value="">Tipo</option>
                                                                        <option value="factura">Factura</option>
                                                                        <option value="boleta">Boleta</option>
                                                                        <option value="nota_credito">N. Credito</option>
                                                                        <option value="guia_remision">G. Remision
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group input-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-ui-v-card"></div><input
                                                                type="text" id="ruc" name="ruc" class="rounded form-control"
                                                                placeholder="RUC">
                                                            <div class="input-group-append"><button
                                                                    class="btn btn-primary" type="button"
                                                                    onclick="busqueda(this); return false"><i
                                                                        class="icofont-search-document"></i></button>
                                                            </div>
                                                            <img src="assets/img/ajax-loader.gif" class="hidden ajaxgif"
                                                                style="position: absolute; margin-top: -10px; margin-left: 13px;">

                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-user-suited"></div><input
                                                                type="text" id="r_social" name="razon_social" class="rounded form-control"
                                                                placeholder="RAZON SOCIAL">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div><input
                                                                type="text" name="dir_fiscal"  class="rounded form-control"
                                                                placeholder="DIR FISCAL">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-ui-calendar"></div><input
                                                                  name="fecha_emision" placeholder="FECHA EMISION"
                                                                class="rounded form-control datepicker">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div><input
                                                                type="text" name="descripcion"
                                                                class="rounded form-control" placeholder="DESCRIPCION">

                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div>
                                                            <select class="rounded form-control" name="por_concepto">
                                                                <option value="">POR CONCEPTO</option>
                                                                <option value="servicio">SERVICIO</option>
                                                                <option value="producto">PRODUCTO</option>

                                                            </select>

                                                        </div>
                                                    </div>


                                                    <!-- segunda fila -->

                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div>
                                                            <select class="rounded form-control" name="moneda">
                                                                <option value="">TIPO DE MONEDA</option>
                                                                <option value="$">$ </option>
                                                                <option value="S/">S/</option>

                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div>
                                                            <select class="rounded form-control" id="tipo_pago">
                                                                <option value="">TIPO DE PAGO</option>
                                                                <option value="efectivo">EFECTIVO</option>
                                                                <option value="transferencia">TRANSFERENCIA</option>
                                                                <option value="credito">CREDITO</option>
                                                            </select>

                                                        </div>
                                                    </div>





                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div>
                                                            <select class="rounded form-control" name="estado_sunat">
                                                                <option value="">ESTADO SUNAT</option>
                                                                <option value="sunat_aceptado">ACECPTADO</option>
                                                                <option value="sunat_rechazado">RECHAZADO</option>
                                                                <option value="sunat_anulado">ANULADO</option>

                                                            </select>

                                                        </div>
                                                    </div>




                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div>
                                                            <select class="rounded form-control"
                                                                name="estado_cpe">
                                                                <option value="">ESTADO CPE</option>
                                                                <option value="estado_cancelado">CANCELADO</option>
                                                                <option value="estado_a_cuenta">A CUENTA</option>
                                                                <option value="estado_a_credito">A CREDITO</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div><input
                                                                type="text" name="monto_total" class="rounded form-control"
                                                                placeholder="MONTO TOTAL">

                                                        </div>
                                                    </div>


                                                    

                                                </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-12 col-md-10" align="left"><span><strong> Nota: al dejar un
                                                    campo vacio se entendera como sin Dato de Registro </strong></span>
                                        </div>
                                        <div class="col-12 col-md-2" align="right">
                                            <button type="submit" class="btn btn-success" data-dismiss="modal"
                                                 style="color:white; font-weight:700;"><span
                                                    class="mr-2 btn-icon icofont-basket"></span> Registrar</button>

                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <!--asdasd -->
                        <div id="buscador_venta"></div>

                        <!-- Modal para edicion de datos -->

                        <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <form>
                                                <input type="text" hidden="" id="id" name="">
                                                <div class="row">


                                                    <!-- <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-attachment"></div><input
                                                                type="text" name="" id="num_factura_u"
                                                                class="rounded form-control"
                                                                placeholder="NUMERO DE FACTURA">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-law-document"></div><input
                                                                type="text" name="" id="num_boleta_u" class="rounded form-control"
                                                                placeholder="NUMERO DE BOLETA">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-file-excel"></div>
                                                            <select class="rounded form-control" name="" id="anulado_u">
                                                                <option value="sin-anular">SIN ANULAR</option>
                                                                <option value="anulado">ANULADO</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-square-down"></div><input
                                                                type="text" name="" id="bajas_u" class="rounded form-control"
                                                                placeholder="BAJA">
                                                        </div>
                                                    </div>

                                                    <div></div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-ui-calendar"></div><input
                                                                id="date_u" name="date_u" placeholder="MM/DD/YYYY"
                                                                class="rounded form-control datepicker">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group input-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-ui-v-card"></div><input
                                                                type="text" name="" id="ruc_u" class="rounded form-control"
                                                                placeholder="RUC">
                                                            <div class="input-group-append"><button
                                                                    class="btn btn-primary" type="button"
                                                                    onclick="busqueda(this); return false"><i
                                                                        class="icofont-search-document"></i></button>
                                                            </div>
                                                            <img src="assets/img/ajax-loader.gif" class="hidden ajaxgif"
                                                                style="position: absolute; margin-top: -10px; margin-left: 13px;">

                                                        </div>

                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-user-suited"></div><input
                                                                type="text" name="" id="r_social_u" class="rounded form-control"
                                                                placeholder="RAZON SOCIAL">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-3">
                                                        <div class="form-group with-prefix-icon">
                                                            <div class="prefix-icon icofont-money"></div><input
                                                                type="text" name="" id="monto_u" class="rounded form-control"
                                                                placeholder="MONTO">
                                                        </div>
                                                    </div> -->

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" id="actualizadatos"
                                            data-dismiss="modal">Actualizar</button>

                                    </div>
                                </div>
                            </div>
                        </div>




    <div class="modal fade" id="modalMes" tabindex="-3" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel2">BUSQUEDA POR MES AÑO 2021</h4>
        </div>
        <div class="modal-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        
                        <select id="buscadorvivo" class="selectpicker "  onchange="fechaDinamica()">
                            
                            <option value="">Seleciona uno</option>
                            <option value="2021-01">ENERO</option>
                            <option value="2021-02">FEBRERO</option>
                            <option value="2021-03">MARZO</option>
                            <option value="2021-04">ABRIL</option>
                            <option value="2021-05">MAYO</option>
                            <option value="2021-06">JUNIO</option>
                            <option value="2021-07">JULIO</option>
                            <option value="2021-08">AGOSTO</option>
                            <option value="2021-09">SEPTIEMBRE</option>
                            <option value="2021-10">OCTUBRE</option>
                            <option value="2021-11">NOVIEMBRE</option>
                            <option value="2021-12">DICIEMBRE</option>


                        </select>
                        
                    </div>
                </div>
            </div>
        </div>

        

        
        </main>


        </div>
    </div>

    <div class="modal fade" id="modalImpuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
            <div class="modal-dialog " role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel3">Pago de Impuestos</h4>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <form id="update_impuesto"  method="POST" onsubmit="updateImpuesto(); return false">
                            <input type="text" class="rounded form-control"  name="monto_impuesto" id="monto_impuesto_up">
                            <input type="hidden" class="rounded form-control"  name="monto_impuesto_anual" id="monto_impuesto_anual">
                            <input type="hidden" class="rounded form-control"  name="monto_impuesto_mensual" id="monto_impuesto_mensual">
                            

                           
                            <br>
                            <select id="opcion_impuesto" name="opcion_impuesto" class="selectpicker ">
                                
                                <option value="">Seleciona una opcion</option>
                                <option value="Pagado">Pagado</option>
                                <option value="No Pagado">No Pagado</option>
                                 


                            </select>
                            <br><br>
                            <button class="text-white rounded form-control bg-success" type="submit">Guardar </button>
                        </form>
                        </div>
                    </div>
                </div>
    </div>




    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="assets/js/jquery-migrate-1.4.1.min.js"></script> -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.typeahead.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
    <script src="js/funciones_venta.js"></script>
    <script src="librerias/bootstrap/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript" src="librerias/datatable/pdf_make.js"></script>
    <script type="text/javascript" src="librerias/datatable/excel_make.js"></script>
    <script type="text/javascript" src="librerias/datatable/datatable.js"></script>

    <script>
    function gestor_venta(fecha) {

        $('#example2').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": true,
            "destroy": true,
            "sAjaxSource": "controller/gestor_venta.php?fechaGet="+fecha,
            "responsive": true,
            "iDisplayLength": "5",
            "aLengthMenu": [5, 50, 100, 150, 200, 250],
            "lengthMenu": false,
            "columns": [{
                    "sName": "COMPROBANTE",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[0]
                    }
                },
                {
                    "sName": "TIPO COMPROBANTE",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[1]
                    }
                },
                {
                    "sName": "RUC",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[2]
                    }
                },
                {
                    "sName": "RAZON SOCIAL",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[3]
                    }
                },
                {
                    "sName": "DIR FISCAL",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[4]
                    }
                },
                {
                    "sName": "FECHA EMISION",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[5]
                    }
                },
                {
                    "sName": "DESCRIPCION",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[6]
                    }
                },
                {
                    "sName": "POR CONCEPTO",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[7]
                    }
                },
                {
                    "sName": "TIPO MONEDA",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[8]
                    }
                },
                {
                    "sName": "TIPO DE PAGO",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[9]
                    }
                },
                {
                    "sName": "ESTADO SUNAT",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[10]
                    }
                },
                {
                    "sName": "ESTADO CPE",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[11]
                    }
                },
                {
                    "sName": "MONTO TOTAL",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[12]
                    }
                },
                {
                    "sName": "ACCIONES",
                    "bSearchable": true,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[13]
                    }
                }



            ]
            
        });

    };

    function metricas_venta(fecha) {
        
        fecha_actual = fecha;
         
         $.ajax({
            type: "POST",
            url: "componentes/metricas_venta.php",
            async: true,
            dataType: 'json',
            data: {
                fecha_envio: fecha_actual
            },
            success: function(data) {
                
                
                 
               data_mes = data["mes"].charAt(0).toUpperCase() + data["mes"].slice(1);
               
                $("#anual_actual").html(data["año"]);
                $("#total_num_anual").html(data["total_num_anual"]);
                $("#monto_anual_venta").html(data["total_anual"]);
                $("#mes_actual_venta").html(data_mes);
                $("#monto_mes_venta").html(data["total_mes"]);
                $("#num_venta").html(data["total_venta"]);
                $("#impuesto_venta").html(data["impuesto"]);
                $("#impuesto_total").html(data["impuesto_total"]);
                
                document.getElementById("monto_impuesto_up").value = data["impuesto_total_f"];
                document.getElementById("monto_impuesto_anual").value = data["año"];
                document.getElementById("monto_impuesto_mensual").value = data["num_mes"];
                
                
                
            }
        });



        

    }

    function fechaDinamica(){
        var fecha_1 = document.getElementById("buscadorvivo").value;
        $("#modalMes").modal('hide');
        
        
        metricas_venta(fecha_1);
        gestor_venta(fecha_1);
    }

    function openModal(){
        
        $("#modalImpuesto").modal('show');
    }

    $(document).ready(function() {
        var fecha = "2021-01-30";
        gestor_venta(fecha);
        metricas_venta(fecha);
        // $('#tabla_venta').load('componentes/tabla_venta.php');
        //$('#metricas_venta').load('componentes/metricas_venta.php');
        // $('#buscador_venta').load('componentes/buscador_venta.php');

    });

    function updateImpuesto(){
        
        $.ajax({
        type: "POST",
        url: "controller/regImpuesto.php",
        data: $('#update_impuesto').serialize(),
        success: function(data){

        
        
        $("#modalImpuesto").modal('hide');

        var anual = document.getElementById("monto_impuesto_anual").value;
        var mensual = document.getElementById("monto_impuesto_mensual").value;

        $fecha_compuesta = anual+"-"+mensual;
        metricas_venta($fecha_compuesta);
        
            
        }
        });
    
    }

    function regVenta(){
        
        $.ajax({
        type: "POST",
        url: "controller/regVenta.php",
        data: $('#regVenta').serialize(),
        success: function(data){

        alert(data);
        
        $("#modalNuevo").modal('hide');

        var anual = document.getElementById("monto_impuesto_anual").value;
        var mensual = document.getElementById("monto_impuesto_mensual").value;

        $fecha_compuesta = anual+"-"+mensual;
        metricas_venta($fecha_compuesta);
        
            
        }
        });
    
    }

    function updateVenta(){
        
        $.ajax({
        type: "POST",
        url: "controller/regImpuesto.php",
        data: $('#update_impuesto').serialize(),
        success: function(data){

        
        
        $("#modalImpuesto").modal('hide');

        var anual = document.getElementById("monto_impuesto_anual").value;
        var mensual = document.getElementById("monto_impuesto_mensual").value;

        $fecha_compuesta = anual+"-"+mensual;
        metricas_venta($fecha_compuesta);
        
            
        }
        });
    
    }

    // $(document).ready(function() {
    //     var table = $('#example').DataTable({
    //         lengthChange: false,
    //         buttons: ['excel', 'pdf'],


    //     });

    //     table.buttons().container()
    //         .appendTo('#example_wrapper .col-md-6:eq(0)');
    // });
    </script>

    <script>
    $(function($) {
        $.fn.datepicker.dates['es'] = {
            days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
            daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
            daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                "Octubre", "Noviembre", "Diciembre"
            ],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov",
                "Dic"
            ],
            today: "Hoy"
        };
    });

 
    </script>
  
    <script>
    $(document).ready(function() {

        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        $('.datepicker').datepicker({
            language: 'es-es',
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });




         
    })
    </script>
   



</body>

</html>