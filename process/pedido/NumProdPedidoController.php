<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza'];
        $cod_prod =$_POST['cod_prod'];   
        
		$detalle_cotizacion = ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`, `detalle_cotizacion_online`.`CodigoProd`
        FROM `detalle_cotizacion_online`
        WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' AND `detalle_cotizacion_online`.`CodigoProd` = '$cod_prod'");
        while($fila=mysqli_fetch_array($detalle_cotizacion)){
            echo '   
            <input type="number" id="num_value_cantidad"   style="color: black;" class="form-control" value="'.$fila['Cantidad'].'">
            <br><br><br>
            <button class="btn btn-block btn-new " onclick="actualizarCantidad(&quot;'.$NumPedido.'&quot; , &quot;'.$fila['id'].'&quot; , &quot;'.$cod_prod.'&quot;)" > Agregar Cantidad </button>
        ';}  
		          
	 

 