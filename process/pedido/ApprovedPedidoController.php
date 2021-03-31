<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';
date_default_timezone_set("America/Lima");

        $NumPedido =$_POST['num_cotiza']; 
        $a_cuenta =$_POST['a_cuenta']; 
        $tarjeta_5_porciento =$_POST['tarjeta_5_porciento']; 
        $fecha_actual =  date('Y-m-d'); 
         
        consultasSQL::UpdateSQL("cotizacion_online", "fecha_cotizacion='$fecha_actual', Estado='2' ", "id_cotizacion='$NumPedido'");
        consultasSQL::UpdateSQL("detalle_compra_online", "a_cuenta='$a_cuenta', tarjeta_5_porciento='$tarjeta_5_porciento' ", "id_cotizacion='$NumPedido'");
 