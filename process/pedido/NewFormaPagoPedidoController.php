<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        $forma_pago =$_POST['cant']; 

        consultasSQL::UpdateSQL("detalle_compra_online", "forma_pago='$forma_pago' ", "id_cotizacion='$NumPedido'");
 