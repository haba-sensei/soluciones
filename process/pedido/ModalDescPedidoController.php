<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza'];
     
        
		$cotizacion = ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`
        FROM `cotizacion_online`
        WHERE `cotizacion_online`.`id_cotizacion` = '$NumPedido';");
        while($fila=mysqli_fetch_array($cotizacion)){
            echo '   
            <input type="number" id="valor_descuento"   style="color: black;" class="form-control" value="'.$fila['descuento'].'">
            <br><br><br>
            <button class="btn btn-new " style="width: 45%; margin-right: 10%;" onclick="addNewDescuento(&quot;'.$NumPedido.'&quot;)" > Agregar Descuento</button>
            <button class="btn btn-elim " style="width: 45%;" onclick="ResetDescuento(&quot;'.$NumPedido.'&quot;)" > Reset Descuento</button>
        ';}  
		          
	 

 