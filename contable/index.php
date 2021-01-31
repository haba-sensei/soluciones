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
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="public-layout">
    <div class="app-loader main-loader">
        <div class="loader-box">
            <div class="bounceball"></div>
            <div class="text">ConVen<span>app</span></div>
        </div>
    </div>
    <!-- .main-loader -->
    <div class="page-box">
        <div class="app-container page-sign-in">
            <div class="content-box">
                <div class="content-header">
                    <div class="app-logo">
                        <div class="logo-wrap"><img src="https://www.solucionescctvysistemas.com/assets/img/logo.png" alt="" width="147" height="33" class="logo-img"></div>
                    </div>
                </div>
                <div class="content-body">
                    <div class="w-100" style="position: relative; top: -79px;">
                        <h2 class="h4 mt-0 mb-1" style="color: #ffffff;">Inicio de session</h2>
                        <p class="text-muted">Ingresa para acceder a tu cuenta</p>
                        <form action="php/login.php" method="post" role="form" class="FormCatElec margin-bottom-0" data-form="login">
                            <div class="form-group"><input class="form-control" type="text" name="nombre-login" id="email" placeholder="Usuario"></div>
                            <div class="form-group"><input class="form-control" type="password" name="clave-login" id="password" placeholder="Contraseña"></div>

                            <div class="actions justify-content-between"><button type="submit" class="btn btn-primary"><span class="btn-icon icofont-login mr-2"></span>Ingresar</button></div>
                        </form>
                        <br>
                        <div class="m-t-20 m-b-40 p-b-40">
                           <div class="ResFormL animated fadeInDown"> </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="js/login.js" type="text/javascript"></script>
</body>

</html>