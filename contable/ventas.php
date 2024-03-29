<?php 
  session_start();

  unset($_SESSION['consulta']);
  include 'php/panelSeguridad.php';
  date_default_timezone_set('America/Lima');
  setlocale(LC_TIME, 'es_ES.UTF-8');
  setlocale(LC_TIME, 'spanish');
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

    <style>
    .left-col {
        float: left;
        width: 15%;
    }

    .center-col {
        float: left;
        width: 25%;
    }

    .right-col {
        float: left;
        width: 60%;
    }

    .buttons-html5 {
        height: 26px;
        padding-bottom: 13px;
    }
    </style>


    <!-- .main-loader -->
    <div class="page-box">
        <div class="app-container">
            <!-- Horizontal navbar -->
            <div id="navbar1" class="app-navbar horizontal">
                <div class="navbar-wrap"><button class="no-style navbar-toggle navbar-open d-lg-none"><span></span><span></span><span></span></button>
                    <div class="app-logo">
                        <div class="logo-wrap"><img src="https://www.solucionescctvysistemas.com/assets/img/logo.png" alt="" width="147" height="33"
                                class="logo-img"></div>
                    </div>

                    <div class="app-actions ">
                        <div class="hidden dropdown item"><button class="no-style dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-offset="0, 12"><span class="icon icofont-notification"></span> <span
                                    class="badge badge-danger badge-sm">5</span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-280 ">
                                <div class="menu-header">
                                    <h4 class="mt-0 mb-0 h5 menu-title">Notifications</h4><a href="#" class="text-danger">Clear All</a>
                                </div>
                                <ul class="list">
                                    <li><a href="#"><span class="icon icofont-heart"></span>
                                            <div class="content"><span class="desc">Sara Crouch liked your photo</span>
                                                <span class="date">17 minutes ago</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-users-alt-6"></span>
                                            <div class="content"><span class="desc">New user registered</span> <span class="date">23 minutes
                                                    ago</span></div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-share"></span>
                                            <div class="content"><span class="desc">Amanda Lie shared your post</span>
                                                <span class="date">25 minutes ago</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-users-alt-6"></span>
                                            <div class="content"><span class="desc">New user registered</span> <span class="date">32 minutes
                                                    ago</span></div>
                                        </a></li>
                                    <li><a href="#"><span class="icon icofont-ui-message"></span>
                                            <div class="content"><span class="desc">You have a new message</span> <span class="date">58 minutes
                                                    ago</span></div>
                                        </a></li>
                                </ul>
                                <div class="menu-footer"><button class="btn btn-primary btn-block">View all
                                        notifications <span class="ml-2 btn-icon icofont-tasks-alt"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown item"><button class="no-style dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-offset="0, 10"><span class="d-flex align-items-center"><img
                                        src="assets/content/user-400-1.jpg" alt="" width="40" height="40" class="mr-1 rounded-500"> <i
                                        class="icofont-simple-down"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-180">
                                <ul class="list">
                                    <li><a href="./php/logout.php" class="align-items-center"><span class="icon icofont-logout"></span> Log Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-skeleton horizontal">
                        <div class="left-part d-flex align-items-center"><span class="navbar-button bg animated-bg d-lg-none"></span> <span
                                class="sk-logo bg animated-bg d-none d-lg-block"></span> <span class="search d-none d-md-block bg animated-bg"></span>
                        </div>
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
                <div class="navbar-wrap"><button class="no-style navbar-toggle navbar-close icofont-close-line d-lg-none"></button>
                    <div class="app-logo">
                        <div class="logo-wrap"><img src="https://www.solucionescctvysistemas.com/assets/img/logo.png" alt="" width="147" height="33"
                                class="logo-img"></div>
                    </div>
                    <div class="main-menu">
                        <nav class="main-menu-wrap">
                            <ul class="menu-ul">

                                <li class="menu-item "><a class="item-link" href="compras.php"><span class="link-text"><i
                                                class="icofont-dollar-plus"></i></i> Compras</span></a>
                                </li>
                                <li class="menu-item "><a class="item-link" href="ventas.php"><span class="link-text"><i class="icofont-bar-code"></i>
                                            Ventas</span></a></li>


                            </ul>
                        </nav>
                    </div>
                    <div class="navbar-skeleton horizontal">
                        <div class="left-part d-flex align-items-center"><span class="navbar-button bg animated-bg d-lg-none"></span> <span
                                class="sk-logo bg animated-bg d-none d-lg-block"></span> <span class="search d-none d-md-block bg animated-bg"></span>
                        </div>
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
                                    <a href="javascript:" onclick="reporteAnual()">
                                        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                            <div class="row align-items-center">
                                                <div style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                    <span style="padding-left: 30px; color:white;">Año Actual </span>
                                                </div>
                                                <div style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                                </div>
                                                <div style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                                </div>
                                                <div class="col col-6" align="center"
                                                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); margin-bottom: 13px;">
                                                    <div class="p-0 opacity-50 icon fs-19 text-primary " id="anual_actual">

                                                    </div>
                                                    <input type="hidden" id="anual_">
                                                    <div
                                                        style="position: absolute; background: #f58634; height: 72%; width: 86.3%; left: 10px; top: 38px;">
                                                        <span style="padding-left: 0; color:white;" id="total_num_anual">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col col-6">
                                                    <h6 class="mt-0 mb-1">Total del Año</h6>
                                                    <div class="count text-primary fs-20" id="monto_anual_venta">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-02s bg-light">
                                    <a href="" data-toggle="modal" data-target="#modalMes">
                                        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                            <div class="row align-items-center">
                                                <div style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                    <span style="padding-left: 10px; color:white;">Selecciona el
                                                        Mes</span>
                                                </div>
                                                <div style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                                </div>
                                                <div style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                                </div>
                                                <div class="col col-6" align="center"
                                                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                                                    <div class="p-0 opacity-50 icon fs-19 text-primary " id="mes_actual_venta"
                                                        style="position:relative; top: -8px;">


                                                    </div>
                                                    <div
                                                        style="position: absolute; background: #f58634; height: 72%; width: 86.3%; left: 10px; top: 30px;">
                                                        <span style="padding-left: 0; color:white;" id="num_venta">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col col-6">
                                                    <h6 class="mt-0 mb-1">Total del Mes</h6>
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
                                    <a href="javascript:" onclick="openRenta()">
                                        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                            <div class="row align-items-center">
                                                <div style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                    <span style="padding-left: 22px; color:white;">Estado
                                                        Renta</span>
                                                </div>
                                                <div style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                                </div>
                                                <div style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                                </div>
                                                <div class="col col-6" align="center"
                                                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                                                    <div class="p-0 opacity-50 icon fs-19 text-primary " id="retencion">


                                                    </div>
                                                </div>
                                                <div class="col col-6">
                                                    <h6 class="mt-0 mb-1">Total Renta del Mes</h6>
                                                    <div class="count text-primary fs-20" id="impuesto_retencion">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card animated fadeInUp delay-04s bg-light">
                                    <a href="javascript:" onclick="openModal()">
                                        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                                            <div class="row align-items-center">
                                                <div style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;">
                                                    <span style="padding-left: 28px; color:white;">Estado
                                                        IGV</span>
                                                </div>
                                                <div style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                                                </div>
                                                <div style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                                                </div>
                                                <div class="col col-6" align="center"
                                                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                                                    <div class="p-0 opacity-50 icon fs-19 text-primary " id="impuesto_venta">


                                                    </div>
                                                </div>
                                                <div class="col col-6">
                                                    <h6 class="mt-0 mb-1">Total Igv del Mes</h6>
                                                    <div class="count text-primary fs-20" id="impuesto_total">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>


                                </div>
                            </div>








                        </div>

                        <div class="page-content">
                            <div class="mb-0 card">
                                <div class="card-body table-responsive" style="overflow-x: hidden!important;">

                                    <table id="example2" class="table table-condensed display responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr class="text-white" style="background:#f58634;">
                                                <th scope="col">N° Comprobante</th>
                                                <th scope="col">Tipo Comprobante</th>
                                                <th scope="col">Ruc</th>
                                                <th scope="col">Razón Social</th>
                                                <th scope="col">Fecha Emisión</th>
                                                <th scope="col">Estado Sunat</th>
                                                <th scope="col">Estado CPE</th>

                                                <th scope="col">Monto Total</th>
                                                <th scope="col">Acciones</th>


                                                <th scope="col">Dirección Fiscal</th>

                                                <th scope="col">Descripción </th>
                                                <th scope="col">Por Concepto</th>
                                                <th scope="col">Tipo de Moneda</th>



                                                <th scope="col">Tipo de Pago</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="add-action-box"><button class="btn btn-lg btn-square rounded-pill" style="background:#f58634; color:white;"
                                    data-toggle="modal" data-target="#modalNuevo"><span class="btn-icon icofont-plus"></span></button></div>
                        </div>



                        <!-- Modal para registros nuevos -->





            </main>


        </div>
    </div>


    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-xl" role="document">
            <form id="reg_Venta">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">REGISTRO DE VENTAS</h4>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-12 col-md-3">

                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-attachment"></div>
                                        <div class="input-group ">
                                            <input name="num_comprobante" id="num_comprobante" class="rounded form-control" type="text"
                                                placeholder="N° Comprobante" style="border-top-left-radius: 0 !important;
                                                                    border-bottom-left-radius: 0 !important;
                                                                    border-top-right-radius: 0px !important;
                                                                    border-bottom-right-radius: 0px !important;">
                                            <div class="input-group-addon">
                                                <select class="rounded form-control" name="tipo_comprobante" id="tipo_comprobante"
                                                    style="padding-left: 0px;
                                                                                                                                                padding-right: 0px;
                                                                                                                                                border-top-left-radius: 0 !important;
                                                                                                                                                border-bottom-left-radius: 0 !important;
                                                                                                                                                border-top-right-radius: 6px !important;
                                                                                                                                                border-bottom-right-radius: 6px !important;
                                                                                                                                                padding-bottom: 10px;
                                                                                                                                                border-style: solid;
                                                                                                                                                border-color: #ffffff;
                                                                                                                                                background: #336cfb;
                                                                                                                                                color: #f7f7f7;">
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
                                        <div class="prefix-icon icofont-ui-v-card"></div><input type="text" id="ruc" name="ruc"
                                            class="rounded form-control" placeholder="RUC">
                                        <div class="input-group-append"><button class="btn btn-primary" type="button"
                                                onclick="busqueda(this); return false"><i class="icofont-search-document"></i></button>
                                        </div>
                                        <img src="assets/img/ajax-loader.gif" class="hidden ajaxgif"
                                            style="position: absolute; margin-top: -10px; margin-left: 13px;">

                                    </div>

                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-user-suited"></div><input type="text" id="razon_social" name="razon_social"
                                            class="rounded form-control" placeholder="RAZON SOCIAL">
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div><input type="text" name="dir_fiscal" id="dir_fiscal"
                                            class="rounded form-control" placeholder="DIR FISCAL">
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-ui-calendar"></div><input name="fecha_emision" id="fecha_emision"
                                            placeholder="FECHA EMISION" class="rounded form-control datepicker">
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div><input type="text" id="descripcion" name="descripcion"
                                            class="rounded form-control" placeholder="DESCRIPCION">

                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div>
                                        <select class="rounded form-control" id="por_concepto" name="por_concepto">
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
                                        <select class="rounded form-control" name="moneda" id="moneda">
                                            <option value="">TIPO DE MONEDA</option>
                                            <option value="$">$ </option>
                                            <option value="S/">S/</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div>
                                        <select class="rounded form-control" id="tipo_pago" name="tipo_pago">
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
                                        <select class="rounded form-control" id="estado_sunat" name="estado_sunat">
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
                                        <select class="rounded form-control" id="estado_cpe" name="estado_cpe">
                                            <option value="">ESTADO CPE</option>
                                            <option value="estado_cancelado">CANCELADO</option>
                                            <option value="estado_a_cuenta">A CUENTA</option>
                                            <option value="estado_a_credito">A CREDITO</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div><input type="text" name="monto_total" id="monto_total"
                                            class="rounded form-control" placeholder="MONTO TOTAL">

                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12 col-md-10" align="left"><span><strong> Nota: al dejar un
                                    campo vacio se entendera como sin Dato de Registro
                                </strong></span>
                        </div>
                        <div class="col-12 col-md-2" align="right">
                            <button onclick="regVenta();" class="btn btn-success" data-dismiss="modal" style="color:white; font-weight:700;"><span
                                    class="mr-2 btn-icon icofont-basket"></span>
                                Registrar</button>

                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <!--asdasd -->
    <div id="buscador_venta"></div>

    <!-- Modal para edicion de datos -->

    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form id="update_Venta">

                            <div class="row">
                                <input type="hidden" name="id_up" id="id_up">
                                <div class="col-12 col-md-3">

                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-attachment"></div>
                                        <div class="input-group ">
                                            <input name="num_comprobante_up" id="num_comprobante_up" class="rounded form-control" type="text"
                                                placeholder="N° Comprobante" style="border-top-left-radius: 0 !important;
                                                                    border-bottom-left-radius: 0 !important;
                                                                    border-top-right-radius: 0px !important;
                                                                    border-bottom-right-radius: 0px !important;">
                                            <div class="input-group-addon">
                                                <select class="rounded form-control" id="tipo_comprobante_up" name="tipo_comprobante_up" style="padding-left: 0px;
                                                    padding-right: 0px;
                                                    border-top-left-radius: 0 !important;
                                                    border-bottom-left-radius: 0 !important;
                                                    border-top-right-radius: 6px !important;
                                                    border-bottom-right-radius: 6px !important;
                                                    padding-bottom: 10px;
                                                    border-style: solid;
                                                    border-color: #ffffff;
                                                    background: #336cfb;
                                                    color: #f7f7f7;">
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
                                        <div class="prefix-icon icofont-ui-v-card"></div><input type="text" id="ruc_up" name="ruc_up"
                                            class="rounded form-control" placeholder="RUC">
                                        <div class="input-group-append"><button class="btn btn-primary" type="button"
                                                onclick="busquedaUpdate(this); return false"><i class="icofont-search-document"></i></button>
                                        </div>
                                        <img src="assets/img/ajax-loader.gif" class="hidden ajaxgif"
                                            style="position: absolute; margin-top: -10px; margin-left: 13px;">

                                    </div>

                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-user-suited"></div><input type="text" id="razon_social_up"
                                            name="razon_social_up" class="rounded form-control" placeholder="RAZON SOCIAL">
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div><input type="text" name="dir_fiscal_up" id="dir_fiscal_up"
                                            class="rounded form-control" placeholder="DIR FISCAL">
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-ui-calendar"></div><input id="fecha_emision_up" name="fecha_emision_up"
                                            placeholder="FECHA EMISION" class="rounded form-control datepicker">
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div><input type="text" name="descripcion_up" id="descripcion_up"
                                            class="rounded form-control" placeholder="DESCRIPCION">

                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div>
                                        <select class="rounded form-control" id="por_concepto_up" name="por_concepto_up">
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
                                        <select class="rounded form-control" id="moneda_up" name="moneda_up">
                                            <option value="">TIPO DE MONEDA</option>
                                            <option value="$">$ </option>
                                            <option value="S/">S/</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div>
                                        <select class="rounded form-control" id="tipo_pago_up" name="tipo_pago_up">
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
                                        <select class="rounded form-control" id="estado_sunat_up" name="estado_sunat_up">
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
                                        <select class="rounded form-control" id="estado_cpe_up" name="estado_cpe_up">
                                            <option value="">ESTADO CPE</option>
                                            <option value="estado_cancelado">CANCELADO</option>
                                            <option value="estado_a_cuenta">A CUENTA</option>
                                            <option value="estado_a_credito">A CREDITO</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-md-3">
                                    <div class="form-group with-prefix-icon">
                                        <div class="prefix-icon icofont-money"></div><input type="text" name="monto_total_up" id="monto_total_up"
                                            class="rounded form-control" placeholder="MONTO TOTAL">

                                    </div>
                                </div>




                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" onclick="updateVenta();" data-dismiss="modal">Actualizar</button>

                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="modalMes" tabindex="-3" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">BUSQUEDA POR MES AÑO 2021</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="hidden" id="fecha_actual_" value="<?=date("Y-m") ?>">
                                <select id="buscadorvivo" class="selectpicker " onchange="fechaDinamica()">

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
            </div>
        </div>
    </div>



    <div class="modal fade" id="modalImpuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel3">Pago de Impuestos</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form id="update_impuesto" method="POST" onsubmit="updateImpuesto(); return false">
                                    <label for="monto_impuesto_up">IGV 18%</label>
                                    <input type="text" class="rounded form-control" name="monto_impuesto" id="monto_impuesto_up">
                                    <br>
                                    <input type="hidden" class="rounded form-control" name="monto_impuesto_anual" id="monto_impuesto_anual">
                                    <input type="hidden" class="rounded form-control" name="monto_impuesto_mensual" id="monto_impuesto_mensual">



                                    <br>
                                    <label for="opcion_impuesto">Acciones</label>
                                    <select id="opcion_impuesto" name="opcion_impuesto" class="selectpicker ">

                                        <option value="">Seleciona una opcion</option>
                                        <option value="Pagado">Pagado</option>

                                        <option value="No Pagado">No Pagado</option>




                                    </select>
                                    <br><br>
                                    <button class="text-white rounded form-control bg-success" type="submit">Pagar Impuesto
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRenta" tabindex="-2" role="dialog" aria-labelledby="myModalLabel4">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel3">Pago de Renta</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form id="update_renta" method="POST" onsubmit="updateRenta(); return false">

                                    <label for="monto_igv_up">Renta 5%</label>
                                    <input type="text" class="rounded form-control" name="monto_igv" id="monto_igv_up">
                                    <input type="hidden" class="rounded form-control" name="monto_renta_anual" id="monto_renta_anual">
                                    <input type="hidden" class="rounded form-control" name="monto_renta_mensual" id="monto_renta_mensual">

                                    <br>
                                    <label for="opcion_renta_up">Acciones</label>
                                    <select id="opcion_renta_up" name="opcion_renta" class="selectpicker ">

                                        <option value="">Seleciona una opcion</option>
                                        <option value="Pagado">Pagado</option>

                                        <option value="No Pagado">No Pagado</option>




                                    </select>
                                    <br><br>
                                    <button class="text-white rounded form-control bg-success" type="submit">Pagar Impuesto
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
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
    $(function($) {
        $.fn.datepicker.dates['es'] = {
            days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes",
                "Sábado",
                "Domingo"
            ],
            daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
            daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                "Agosto",
                "Septiembre",
                "Octubre", "Noviembre", "Diciembre"
            ],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago",
                "Sep", "Oct",
                "Nov",
                "Dic"
            ],
            today: "Hoy"
        };
    });

    function gestor_venta(fecha, anual) {

        $('#example2').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": true,
            "destroy": true,
            "sAjaxSource": "controller/gestor_venta.php?fechaGet=" + fecha + "&fechaAnual=" + anual,
            "responsive": true,
            "iDisplayLength": "10",
            'lengthMenu': [
                [10, 25, 50, -1],
                [10, 25, 50, 'Todos']
            ],
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
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[3]
                    }
                },
                {
                    "sName": "FECHA EMISION",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[5]
                    }
                },
                {
                    "sName": "ESTADO SUNAT",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        switch (full[10]) {
                            case 'sunat_aceptado':
                                var res =
                                    "<button class='btn btn-success btn-sm btn-square rounded-pill'><span class='btn-icon icofont-ui-check' style='color:white;'><span style='display:none;'>Aceptado</span></span></button>";
                                break;

                            case 'sunat_rechazado':
                                var res =
                                    "<button class='btn btn-danger btn-sm btn-square rounded-pill'><span class='btn-icon icofont-ui-close' style='color:white;'><span style='display:none;'>Rechazado</span></span></button>";
                                break;

                            case 'sunat_anulado':
                                var res =
                                    "<button class='btn btn-warning btn-sm btn-square rounded-pill'><span class='btn-icon icofont-ui-remove' style='color:white;'><span style='display:none;'>Anulado</span></span></button>";
                                break;
                        }

                        return res
                    }
                },
                {
                    "sName": "ESTADO CPE",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        switch (full[11]) {
                            case 'estado_cancelado':
                                var res =
                                    "<button class='btn btn-success btn-sm btn-square rounded-pill'><span class='btn-icon icofont-ui-check' style='color:white;'><span style='display:none;'>Cancelado</span></span></button>";
                                break;

                            case 'estado_a_cuenta':
                                var res =
                                    "<button class='btn btn-warning btn-sm btn-square rounded-pill'><span class='btn-icon icofont-dollar-plus' style='color:white;'><span style='display:none;'>A Cuenta</span></span></button>";
                                break;

                            case 'estado_a_credito':
                                var res =
                                    "<button class='btn btn-danger btn-sm btn-square rounded-pill'><span class='btn-icon icofont-calendar' style='color:white;'><span style='display:none;'>A Credito</span></span></button>";
                                break;
                        }

                        return res
                    }
                },
                {
                    "sName": "MONTO TOTAL",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return "S/ " + full[12]
                    }
                },
                {
                    "sName": "ACCIONES",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return "<button class='btn btn-info btn-sm btn-square rounded-pill' data-toggle='modal'  data-target='#modalEdicion' onclick='agregaform_venta(" +
                            full[13] +
                            ")'><span class='btn-icon icofont-ui-edit' style='color:white;'></span></button> <button class='btn btn-error btn-sm btn-square rounded-pill' onclick='preguntarSiNo_venta(" +
                            full[13] + ")'><span class='btn-icon icofont-ui-delete'></span></button>";

                    }
                },
                {
                    "sName": "DIR FISCAL",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[4]
                    }
                },
                {
                    "sName": "DESCRIPCION",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[6]
                    }
                },
                {
                    "sName": "POR CONCEPTO",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[7]
                    }
                },
                {
                    "sName": "TIPO DE MONEDA",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[8]
                    }
                },
                {
                    "sName": "TIPO DE PAGO",
                    "bSearchable": false,
                    "bSortable": false,
                    "mRender": function(data, type, full) {

                        return full[9]

                    }
                }



            ],
            dom: "<'top'<'left-col'l><'center-col'B><'right-col'f>>rtip'",

            buttons: [

                {
                    extend: 'excel',
                    messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.',
                    "exportOptions": {
                        "columns": [0, 1, 2, 3, 4, 5, 6, 13, 12, 7]
                    }
                },
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LETTER',
                    "exportOptions": {
                        "columns": [0, 1, 2, 3, 4, 5, 6, 13, 12, 7]
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



                data_mes = data["mes"].charAt(0).toUpperCase() + data["mes"].slice(
                    1);

                $("#anual_actual").html(data["año"]);
                $("#total_num_anual").html(data["total_num_anual"]);
                $("#monto_anual_venta").html(data["total_anual"]);
                $("#mes_actual_venta").html(data_mes);
                $("#monto_mes_venta").html(data["total_mes"]);
                $("#num_venta").html(data["total_venta"]);
                $("#impuesto_venta").html(data["impuesto"]);
                $("#retencion").html(data["retencion"]);
                $("#impuesto_retencion").html(data["impuesto_igv"]);
                $("#impuesto_total").html(data["impuesto_total"]);

                document.getElementById("monto_impuesto_up").value = data["impuesto_total_f"];
                document.getElementById("monto_igv_up").value = data["impuesto_igv_up"];
                document.getElementById("monto_impuesto_anual").value = data["año"];
                document.getElementById("monto_impuesto_mensual").value = data["num_mes"];
                document.getElementById("monto_renta_anual").value = data["año"];
                document.getElementById("monto_renta_mensual").value = data["num_mes"];
                document.getElementById("anual_").value = data["año"];


            }
        });





    }

    function fechaDinamica() {
        var fecha_1 = document.getElementById("buscadorvivo").value;


        $("#modalMes").modal('hide');
        var anual = "s";

        metricas_venta(fecha_1);
        gestor_venta(fecha_1, anual);
    }

    function fechaEstatica(fecha_estatica) {
        var anual = "s";
        metricas_venta(fecha_estatica);
        gestor_venta(fecha_estatica, anual);
    }


    function openModal() {

        $("#modalImpuesto").modal('show');
    }

    function openRenta() {

        $("#modalRenta").modal('show');
    }

    $(document).ready(function() {
        var fecha_f = document.getElementById("fecha_actual_").value;
        var anual = "s";

        gestor_venta(fecha_f, anual);
        metricas_venta(fecha_f);
        fechaEstatica(fecha_f);
        // $('#tabla_venta').load('componentes/tabla_venta.php');
        //$('#metricas_venta').load('componentes/metricas_venta.php');
        // $('#buscador_venta').load('componentes/buscador_venta.php');

        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form')
            .parent() :
            "body";
        $('.datepicker').datepicker({
            language: 'es-es',
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
    });

    function updateImpuesto() {

        $.ajax({
            type: "POST",
            url: "controller/regImpuesto.php",
            data: $('#update_impuesto').serialize(),
            success: function(data) {



                $("#modalImpuesto").modal('hide');

                var anual = document.getElementById("monto_impuesto_anual").value;
                var mensual = document.getElementById("monto_impuesto_mensual")
                    .value;

                $fecha_compuesta = anual + "-" + mensual;
                metricas_venta($fecha_compuesta);


            }
        });

    }

    function updateRenta() {

        $.ajax({
            type: "POST",
            url: "controller/regRenta.php",
            data: $('#update_renta').serialize(),
            success: function(data) {



                $("#modalRenta").modal('hide');

                var anual = document.getElementById("monto_renta_anual").value;
                var mensual = document.getElementById("monto_renta_mensual").value;

                $fecha_compuesta = anual + "-" + mensual;
                metricas_venta($fecha_compuesta);


            }
        });

    }

    function regVenta() {
        var info = $('#reg_Venta').serialize();


        $.ajax({
            type: "POST",
            url: "controller/regVentas.php",
            data: info,
            success: function(data) {
                $("#modalNuevo").modal('hide');

                var anual = document.getElementById("monto_impuesto_anual").value;
                var mensual = document.getElementById("monto_impuesto_mensual").value;

                $fecha_compuesta = anual + "-" + mensual;

                var anual1 = "s";

                metricas_venta($fecha_compuesta);
                gestor_venta($fecha_compuesta, anual1);
                fechaEstatica($fecha_compuesta);

                document.getElementById("num_comprobante").value = "";
                document.getElementById("tipo_comprobante").value = "";
                document.getElementById("ruc").value = "";
                document.getElementById("razon_social").value = "";
                document.getElementById("dir_fiscal").value = "";
                document.getElementById("fecha_emision").value = "";
                document.getElementById("descripcion").value = "";
                document.getElementById("por_concepto").value = "";
                document.getElementById("moneda").value = "";
                document.getElementById("tipo_pago").value = "";
                document.getElementById("estado_sunat").value = "";
                document.getElementById("estado_cpe").value = "";
                document.getElementById("monto_total").value = "";

            }
        });

    }

    function updateVenta() {

        var info = $('#update_Venta').serialize();


        $.ajax({
            type: "POST",
            url: "controller/updateVentas.php",
            data: info,
            success: function(data) {
                $("#modalEdicion").modal('hide');

                var anual = document.getElementById("monto_impuesto_anual").value;
                var mensual = document.getElementById("monto_impuesto_mensual").value;

                $fecha_compuesta = anual + "-" + mensual;
                $anual1 = "s";
                metricas_venta($fecha_compuesta);
                gestor_venta($fecha_compuesta, $anual1);
                fechaEstatica($fecha_compuesta);
            }
        });

    }


    function agregaform_venta(id) {


        $.ajax({
            type: "POST",
            dataType: "json",
            url: "controller/consulta_venta.php",
            data: {
                information: id
            },
            success: function(r) {
                $("#id_up").val(r.id_up);
                $("#num_comprobante_up").val(r.num_comprobante);
                $("#tipo_comprobante_up").val(r.tipo_comprobante);
                $("#ruc_up").val(r.ruc);
                $("#razon_social_up").val(r.razon_social);
                $("#dir_fiscal_up").val(r.dir_fiscal);
                $("#fecha_emision_up").val(r.fecha_emision);
                $("#descripcion_up").val(r.descripcion);
                $("#por_concepto_up").val(r.por_concepto);
                $("#moneda_up").val(r.moneda);
                $("#tipo_pago_up").val(r.tipo_pago);
                $("#estado_sunat_up").val(r.estado_sunat);
                $("#estado_cpe_up").val(r.estado_cpe);
                $("#monto_total_up").val(r.monto_total);


            }
        });



    }

    function reporteAnual() {
        var anual = document.getElementById("anual_").value;
        var fecha_compuesta = document.getElementById("fecha_actual_").value;

        gestor_venta(fecha_compuesta, anual);

    }
    </script>




</body>

</html>