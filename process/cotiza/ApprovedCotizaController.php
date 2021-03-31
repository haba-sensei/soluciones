<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';
date_default_timezone_set("America/Lima");

        $NumPedido =$_POST['num_cotiza'];  
        $fecha_actual =  date('Y-m-d'); 
         
        consultasSQL::UpdateSQL("cotizacion_online", "fecha_cotizacion='$fecha_actual', Estado='1' ", "id_cotizacion='$NumPedido'");
        consultasSQL::InsertSQL("detalle_compra_online", "id_cotizacion, moneda", " '$NumPedido', 'soles' ");