<?php 
        include '../../library/configServer.php';
        include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza'];
        $id_prod =$_POST['id_prod']; 
        $cod_prod =$_POST['cod_prod'];  
        $cantidad =$_POST['cant'];  

        $precio_producto_by = ejecutarSQL::consultar("SELECT `producto`.`CodigoProd`, `producto`.`Precio` FROM `producto` WHERE `producto`.`CodigoProd` = '$cod_prod';");
        while($fila1=mysqli_fetch_array($precio_producto_by)){            
            $precio_producto_base = $fila1['Precio']; 
        }   

		$detalle_cotizacion = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`, `detalle_cotizacion_online`.`CodigoProd` FROM `detalle_cotizacion_online` WHERE `detalle_cotizacion_online`.`id` = '$id_prod' ");
        while($fila2=mysqli_fetch_array($detalle_cotizacion)){            
            $cantidad_precio = $fila2['SubTotal']; 
        }  
		
        $cotizacion = ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion` FROM `cotizacion_online` WHERE `cotizacion_online`.`id_cotizacion` = '$NumPedido';");
        while($fila3=mysqli_fetch_array($cotizacion)){
            $GranTotal = $fila3['GranTotal']; 
        } 
        
        $nueva_cantidad_add = $precio_producto_base * $cantidad;

        consultasSQL::UpdateSQL("detalle_cotizacion_online", " Cantidad='$cantidad', SubTotal='$nueva_cantidad_add' ", "id='$id_prod'");
 
        $update_gran_total = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.`id_cotizacion`, SUM(SubTotal) as total FROM `detalle_cotizacion_online` WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' ");

        while($fila4=mysqli_fetch_array($update_gran_total)){      

            $gran_cantidad_update = $fila4['total']; 

        } 

        consultasSQL::UpdateSQL("cotizacion_online", " GranTotal='$gran_cantidad_update' ", "id_cotizacion='$NumPedido'");

     
        



      
       