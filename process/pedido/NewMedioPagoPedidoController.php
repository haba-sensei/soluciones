<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        $medio_pago =$_POST['cant']; 

        consultasSQL::UpdateSQL("detalle_compra_online", "medio_pago='$medio_pago' ", "id_cotizacion='$NumPedido'");
 