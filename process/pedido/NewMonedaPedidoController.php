<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        $moneda =$_POST['moneda']; 
         
          
        consultasSQL::UpdateSQL("detalle_compra_online", " moneda='$moneda'", "id_cotizacion='$NumPedido'");
 