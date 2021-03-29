<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php'; 

    $num_cotiza =$_POST['num_cotiza'];   
    $id_prod =$_POST['id_prod'];   



    $filtro_producto_by = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.`id_cotizacion`, `detalle_cotizacion_online`.`CodigoProd` FROM `detalle_cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$num_cotiza' AND `detalle_cotizacion_online`.`CodigoProd` = '$id_prod'");
        
    $num_filtro = mysqli_num_rows($filtro_producto_by);

    if($num_filtro >= 1){
        echo "lleno";
    }else {
        $precio_producto_by = ejecutarSQL::consultar("SELECT `producto`.`CodigoProd`, `producto`.`Precio` FROM `producto` WHERE `producto`.`CodigoProd` = '$id_prod';");
        while($fila1=mysqli_fetch_array($precio_producto_by)){            
            $precio_producto_base = $fila1['Precio']; 
        }

        consultasSQL::InsertSQL("detalle_cotizacion_online", "id_cotizacion, CodigoProd, Cantidad, SubTotal", " '$num_cotiza', '$id_prod', '1', '$precio_producto_base' ");

        $update_gran_total = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.`id_cotizacion`, SUM(SubTotal) as total FROM `detalle_cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$num_cotiza' ");

        while($fila4=mysqli_fetch_array($update_gran_total)){      

            $gran_cantidad_update = $fila4['total']; 

        } 
        consultasSQL::UpdateSQL("cotizacion_online", " GranTotal='$gran_cantidad_update' ", "id_cotizacion='$num_cotiza'");
 
       


    }

