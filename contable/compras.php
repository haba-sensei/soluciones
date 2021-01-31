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
    <meta name="keywords" content="ConVen-App">
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
    <link rel="stylesheet" href="librerias/bootstrap/datatables/button/buttons.dataTables.min.css">
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
                        <div class="dropdown item hidden"><button class="no-style dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-offset="0, 12"><span class="icon icofont-notification"></span> <span
                                    class="badge badge-danger badge-sm">5</span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-280 ">
                                <div class="menu-header">
                                    <h4 class="h5 menu-title mt-0 mb-0">Notifications</h4><a href="#"
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
                                        notifications <span class="btn-icon ml-2 icofont-tasks-alt"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown item"><button class="no-style dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-offset="0, 10"><span class="d-flex align-items-center"><img
                                        src="assets/content/user-400-1.jpg" alt="" width="40" height="40"
                                        class="rounded-500 mr-1"> <i class="icofont-simple-down"></i></span></button>
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
                        <div class="row" id="metricas">

                        </div>

                        <div class="page-content">
                            <div class="card mb-0">
                                <div class="card-body">

                                    <div class="table-responsive " id="tabla">





                                    </div>
                                </div>
                            </div>
                            <div class="add-action-box"><button class="btn btn-primary btn-lg btn-square rounded-pill"
                                    data-toggle="modal" data-target="#modalNuevo"><span
                                        class="btn-icon icofont-plus"></span></button></div>
                        </div>



                        <!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">REGISTRO DE COMPRA</h4>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div class="row">
                        <!-- primera fila -->
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-attachment"></div><input
                                        type="text" id="num_factura"
                                        class="form-control rounded"
                                        placeholder="NUMERO DE FACTURA">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group input-group with-prefix-icon">
                                    <div class="prefix-icon icofont-ui-v-card"></div><input
                                        type="text" id="ruc" class="form-control rounded"
                                        placeholder="RUC">
                                    <div class="input-group-append"><button
                                            class="btn btn-primary" type="button"
                                            onclick="busqueda(this); return false"><i
                                                class="icofont-search-document"></i></button>
                                    </div>
                                    <img src="assets/img/ajax-loader.gif" class="ajaxgif hidden"
                                        style="position: absolute; margin-top: -10px; margin-left: 13px;">

                                </div>

                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-user-suited"></div><input
                                        type="text" id="r_social" class="form-control rounded"
                                        placeholder="RAZON SOCIAL">
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-ui-calendar"></div><input
                                        id="date" name="date" placeholder="MM/DD/YYYY"
                                        class="form-control rounded datepicker_ven_registro">
                                </div>
                            </div>

                        <!-- segunda fila -->

                        <div class="col-12 col-md-3">
                        <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-money"></div>
                                    <select class="form-control rounded" id="moneda">
                                        <option value="dolar">DOLARES</option>
                                        <option value="sol">SOLES</option>

                                    </select>

                                </div>
                            </div>

                    <div class="col-12 col-md-3">
                <div class="form-group with-prefix-icon">
                            <div class="prefix-icon icofont-money"></div>
                            <select class="form-control rounded" id="tipo_pago">
                                <option value="efectivo">EFECTIVO</option>
                                <option value="transferencia">TRANSFERENCIA</option>
                                <option value="credito">CREDITO</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-money"></div><input
                                        type="text" id="guia_remision" class="form-control rounded"
                                        placeholder="GUIA REMISION">
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-money"></div><input
                                        type="text" id="nota_credito" class="form-control rounded"
                                        placeholder="NOTA CREDITO">
                                </div>
                            </div>


                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-money"></div><input
                                        type="text" id="nro_pedido" class="form-control rounded"
                                        placeholder="NRO PEDIDO">
                                </div>
                            </div>


                            <div class="col-12 col-md-3">
                <div class="form-group with-prefix-icon">
                            <div class="prefix-icon icofont-money"></div>
                            <select class="form-control rounded" id="estado_fact">
                                <option value="aceptado">ACECPTADO</option>
                                <option value="nota_credito">NOTA CREDITO</option>
                                <option value="anulado">ANULADO</option>
                                <option value="rechazado">RECHAZADO</option>
                            </select>

                        </div>
                    </div>


                    <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-money"></div><input
                                        type="text" id="monto" class="form-control rounded"
                                        placeholder="MONTO">
                                </div>
                            </div>

                            <div class="col-12 col-md-3">
                <div class="form-group with-prefix-icon">
                            <div class="prefix-icon icofont-money"></div>
                            <select class="form-control rounded" id="descrip_fact">
                                <option value="servicio">SERVICIO</option>
                                <option value="producto">PRODUCTO</option>
                               
                            </select>

                        </div>
                    </div>
<!-- 

                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-law-document"></div><input
                                        type="text" id="num_boleta" class="form-control rounded"
                                        placeholder="NUMERO DE BOLETA">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-file-excel"></div>
                                    <select class="form-control rounded" id="anulado">
                                        <option value="sin-anular">SIN ANULAR</option>
                                        <option value="anulado">ANULADO</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-square-down"></div><input
                                        type="text" id="bajas" class="form-control rounded"
                                        placeholder="BAJA">
                                </div>
                            </div> -->

                            <div></div>
                            
                            
                           
                           

                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-12 col-md-10" align="left"><span><strong> Nota: al dejar un
                            campo vacio se entendera como sin Dato de Registro </strong></span>
                </div>
                <div class="col-12 col-md-2" align="right">
                    <button type="submit" class="btn  btn-success" data-dismiss="modal"
                        id="guardarnuevo" style="color:white; font-weight:700;"><span
                            class="btn-icon icofont-basket mr-2"></span> Registrar</button>

                </div>
            </div>
        </div>
    </div>
</div>

                        <!--asdasd -->
                        <div id="buscador"></div>

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
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-attachment"></div><input
                                        type="text" name="" id="num_factura_u"
                                        class="form-control rounded"
                                        placeholder="NUMERO DE FACTURA">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-law-document"></div><input
                                        type="text" name="" id="num_boleta_u"
                                        class="form-control rounded"
                                        placeholder="NUMERO DE BOLETA">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-file-excel"></div>
                                    <select class="form-control rounded" name="" id="anulado_u">
                                        <option value="sin-anular">SIN ANULAR</option>
                                        <option value="anulado">ANULADO</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-square-down"></div><input
                                        type="text" name="" id="bajas_u"
                                        class="form-control rounded" placeholder="BAJA">
                                </div>
                            </div>

                            <div></div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-ui-calendar"></div><input
                                        id="date_u" name="date_u" placeholder="MM/DD/YYYY"
                                        class="form-control rounded datepicker_ven_update">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group input-group with-prefix-icon">
                                    <div class="prefix-icon icofont-ui-v-card"></div><input
                                        type="text" name="" id="ruc_u"
                                        class="form-control rounded" placeholder="RUC">
                                    <div class="input-group-append"><button
                                            class="btn btn-primary" type="button"
                                            onclick="busqueda(this); return false"><i
                                                class="icofont-search-document"></i></button>
                                    </div>
                                    <img src="assets/img/ajax-loader.gif" class="ajaxgif hidden"
                                        style="position: absolute; margin-top: -10px; margin-left: 13px;">

                                </div>

                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-user-suited"></div><input
                                        type="text" name="" id="r_social_u"
                                        class="form-control rounded" placeholder="RAZON SOCIAL">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group with-prefix-icon">
                                    <div class="prefix-icon icofont-money"></div><input
                                        type="text" name="" id="monto_u"
                                        class="form-control rounded" placeholder="MONTO">
                                </div>
                            </div>

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









            </main>


        </div>
    </div>






    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.typeahead.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/jquery.dataTables.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/dataTables.bootstrap4.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/dataTables.buttons.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.bootstrap4.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/jszip.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/pdfmake.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/vfs_fonts.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.html5.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.print.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.colVis.min.js"></script>

    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['excel', 'pdf'],


        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
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


    $('.datepicker').datepicker({
        language: "es"
    });
    </script>
    <script>
    $(document).ready(function() {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            language: 'es-es',
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>
    <script>
    $(document).ready(function() {
        var date_input = $('input[name="date_u"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            language: 'es-es',
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('#tabla').load('componentes/tabla.php');
        $('#metricas').load('componentes/metricas.php');
        $('#buscador').load('componentes/buscador.php');

    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#guardarnuevo').click(function() {
            num_factura = $('#num_factura').val();
            num_boleta = $('#num_boleta').val();
            anulado = $('#anulado').val();
            bajas = $('#bajas').val();
            date = $('#date').val();
            ruc = $('#ruc').val();
            r_social = $('#r_social').val();
            monto = $('#monto').val();
            agregardatos(num_factura, num_boleta, anulado, bajas, date, ruc, r_social, monto);
        });



        $('#actualizadatos').click(function() {
            actualizaDatos();
        });

    });
    </script>



</body>
<!-- Mirrored from medic-app-html.type-code.pro/dist-horizontal/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jan 2020 23:56:39 GMT -->

</html>