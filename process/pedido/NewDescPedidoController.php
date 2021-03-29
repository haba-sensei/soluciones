<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        $descuento =$_POST['cant']; 

        consultasSQL::UpdateSQL("cotizacion_online", "descuento='$descuento' ", "id_cotizacion='$NumPedido'");

 