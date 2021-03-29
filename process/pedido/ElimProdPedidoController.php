<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php'; 

        $id_prod =$_POST['id_prod'];    
        $num_cotiza =$_POST['cod_cotiza'];  

        if(consultasSQL::DeleteSQL('detalle_cotizacion_online', "id='$id_prod' ")){

            $update_gran_total = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.`id_cotizacion`, SUM(SubTotal) as total FROM `detalle_cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$num_cotiza' ");

            while($fila4=mysqli_fetch_array($update_gran_total)){      
    
                $gran_cantidad_update = $fila4['total']; 
    
            } 
            consultasSQL::UpdateSQL("cotizacion_online", " GranTotal='$gran_cantidad_update' ", "id_cotizacion='$num_cotiza'");
     


            echo "eliminado";
        }else { 
            echo "404"; 
        }
        