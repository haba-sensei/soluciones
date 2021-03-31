<?php 
include '../../library/configServer.php';
include '../../library/consulSQL.php';

        $NumPedido =$_POST['num_cotiza'];
     
        
		$cotizacion = ejecutarSQL::consultar("SELECT `detalle_compra_online`.*, `detalle_compra_online`.`id_cotizacion`
        FROM `detalle_compra_online`
        WHERE `detalle_compra_online`.`id_cotizacion` = '$NumPedido';");
        while($fila=mysqli_fetch_array($cotizacion)){
            echo '  
            
            
             
             
            <div class="form-group col-md-4">
                
                <label style="float:left; color: black;"  >Forma de Entrega <sup>*</sup></label>
                <select class="form-control" style="font-size: 15px; color: black;" name="F_entrega" id="F_entrega" >
                    <option value="'.$fila['forma_entrega'].'" > '.$fila['forma_entrega'].' </option>
                    <option value="Tienda">Despacho en Tienda</option>
                    <option value="Lima">Delivery Lima </option>
                    <option value="Provincia">Delivery Provincia </option>


                </select>

            </div>
                
            <div class="col-md-4"> 
                    <label style="float:left; color: black;" >Forma de Delivery <sup>*</sup></label>
                    <select class="form-control" style="font-size: 15px; color: black;" name="distritos_v" id="distritos_v">
                    <option value="'.$fila['distrito'].'" > '.$fila['distrito'].' </option>
                    </select>
            </div>
                <div class="col-md-4">
                <label style="float:left; color: black;">Costo Delivery <sup>*</sup></label>
                <input type="text" style="color: black;" name="costo_adicional" id="costo_adicional" value="'.$fila['costo_adicional'].'" placeholder="0.00" class="form-control" >
                </div> 
           

            
                <div class="col-md-6">
                <label style="float:left; color: black;">Direccion <sup>*</sup></label>
                <input type="text" style="color: black;" name="dir_envio" id="dir_envio" value="'.$fila['dir_envio'].'" placeholder="Direccion de Envio" class="form-control">
                </div>
                <div class="col-md-6">
                <label style="float:left; color: black;">Referencia <sup>*</sup></label>
                <input type="text" style="color: black;" name="referencia"  id="referencia" value="'.$fila['referencia'].'" placeholder="Referencia" class="form-control">
                </div> 
                <br><br><br><br>
            
            
            <a href="javascript:" class="btn btn-new btn-block" onclick="addNewDelivery(&quot;'.$NumPedido.'&quot;)" > Agregar Delivery</a>
           
            ';
            echo "
<script >
$('#F_entrega').change(function(){
    var x = $(this).val();
       
     $.ajax({
         url: '../library/delivery.php',
         type: 'post',
         data: {
         x: x
         },
         dataType: 'json',
         success:function(response){ 
            var len = response.length;
         
             $('#distritos_v').empty(); 
             $('#distritos_v').append('<option > Selecciona una Opción </option>');
             var i = 0;
            for( var i = 0; i < len; i++){
                         
                var lista = response[i]['lista'];

                $('#distritos_v').append(lista);
                
            }
         }
     });
    });

    $('#distritos_v').change(function(){
        var z = $(this).val();

        $.ajax({
            url: '../library/delivery_costo.php',
            type: 'post',
            data: {
            z: z
            }, 
            success:function(response){

                document.getElementById('costo_adicional').value = response;

            }
        });
    });
</script>
           
        ";}  
		          
	 ?>


 