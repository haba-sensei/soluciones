<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        
		$cotizacion = ejecutarSQL::consultar("SELECT `detalle_compra_online`.*, `detalle_compra_online`.`id_cotizacion`
        FROM `detalle_compra_online`
        WHERE `detalle_compra_online`.`id_cotizacion` = '$NumPedido';");
        while($fila=mysqli_fetch_array($cotizacion)){
            echo '   
            <select id="valor_FormaPago" class="form-control" style="color: black;" >
            ';  
                 switch ($fila['forma_pago']) {
                    case 'Al Contado':
                    echo '
                    <option value="Al Contado">Al Contado</option>
                    <option value="A Cuenta">A Cuenta</option>
                    ';
                    break;

                    case 'A Cuenta':
                    echo '
                    <option value="A Cuenta">A Cuenta</option>
                    <option value="Al Contado">Al Contado</option>
                    
                    ';
                    break;
                     
                     default:
                     echo '
                     <option value="">Selecciona una Opcion</option>
                     <option value="Al Contado">Al Contado</option>
                     <option value="A Cuenta">A Cuenta</option>
                     ';
                         break;
                 }
           
         echo ' 
         </select>
         
         <br><br><br>
         <button class="btn btn-block btn-new " onclick="addNewFormaPago(&quot;'.$NumPedido.'&quot;)" > Agregar Forma de Pago</button>
         
         
         ';
    }