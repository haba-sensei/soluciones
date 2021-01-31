<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
    date_default_timezone_set("America/Lima");
    //extraemos la fecha usando la funcion date 
    // d: dia
    // m: mes
    // Y: ańo en cuatro dígitos
    $mes = date("m"); 
    $year = date("Y");
    $mes_actual= date("m");
 ?>
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
	
	


<script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.typeahead.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
    <script src="js/funciones_venta.js"></script>
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
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: ['excel', 'pdf'],
        
       
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
    </script>