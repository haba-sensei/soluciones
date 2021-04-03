<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza']; 
        
		$cotizacion = ejecutarSQL::consultar("SELECT `detalle_compra_online`.*, `detalle_compra_online`.`id_cotizacion`
        FROM `detalle_compra_online`
        WHERE `detalle_compra_online`.`id_cotizacion` = '$NumPedido';");
        while($fila=mysqli_fetch_array($cotizacion)){
            echo '   
            <select id="valor_moneda" class="form-control" style="color: black;" >
            ';  
                 switch ($fila['moneda']) {
                    case 'dolares':
                    echo '
                    <option value="dolares">Dolares</option>
                    <option value="soles">Soles</option>
                    ';
                    break;

                    case 'soles':
                    echo '
                    <option value="soles">Soles</option>
                    <option value="dolares">Dolares</option> 
                    
                    ';
                    break;
                     
                     default:
                     echo '
                     <option value="">Selecciona una Opcion</option>
                     <option value="soles">Soles</option>
                     <option value="dolares">Dolares</option> 
                     ';
                         break;
                 }
           
         echo ' 
         </select>
         
         <br><br><br>
         <button type="button" class="btn btn-block btn-new " onclick="addNewMoneda(&quot;'.$NumPedido.'&quot;)" > Cambiar Tipo de Moneda </button>
         
         
         ';
    }