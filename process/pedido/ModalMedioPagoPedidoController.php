<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        
		$cotizacion = ejecutarSQL::consultar("SELECT `detalle_compra_online`.*, `detalle_compra_online`.`id_cotizacion`
        FROM `detalle_compra_online`
        WHERE `detalle_compra_online`.`id_cotizacion` = '$NumPedido';");
        while($fila=mysqli_fetch_array($cotizacion)){
            echo '   
            <select id="valor_MedioPago" class="form-control" style="color: black;" >
            ';  
                 switch ($fila['medio_pago']) {
                    case 'Tarjeta':
                    echo '
                    <option value="Tarjeta">Tarjeta</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Deposito">Deposito</option>
                    ';
                    break;

                    case 'Efectivo':
                    echo '
                    <option value="Efectivo">Efectivo</option>
                    <option value="Deposito">Deposito</option>
                    <option value="Tarjeta">Tarjeta</option> 
                    ';
                    break;

                    case 'Deposito':
                    echo '
                    <option value="Deposito">Deposito</option>
                    <option value="Efectivo">Efectivo</option> 
                    <option value="Tarjeta">Tarjeta</option> 
                    ';
                    break;
                     
                     default:
                     echo '
                     <option value="">Selecciona una Opcion</option>
                     <option value="Efectivo">Efectivo</option>
                     <option value="Deposito">Deposito</option>
                     <option value="Tarjeta">Tarjeta</option>
                     ';
                         break;
                 }
           
         echo ' 
         </select>
         
         <br><br><br>
         <button class="btn btn-block btn-new " onclick="addNewMedioPago(&quot;'.$NumPedido.'&quot;)" > Agregar Medio de Pago</button>
         
         
         ';
    }