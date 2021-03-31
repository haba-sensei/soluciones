<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        $F_entrega =$_POST['F_entrega']; 
        $distritos_v =$_POST['distritos_v']; 
        $costo_adicional =$_POST['costo_adicional']; 
        $dir_envio =$_POST['dir_envio']; 
        $referencia =$_POST['referencia']; 
          
        consultasSQL::UpdateSQL("detalle_compra_online", " forma_entrega='$F_entrega', distrito='$distritos_v', costo_adicional='$costo_adicional', dir_envio='$dir_envio', referencia='$referencia' ", "id_cotizacion='$NumPedido'");
 