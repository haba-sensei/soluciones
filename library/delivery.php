<?php
include 'configServer.php';
include 'consulSQL.php';
 

$tipo_delivery = $_POST['x'];

 
$verDelivery = ejecutarSQL::consultar("SELECT `distritos`.*, `distritos`.`tipo` FROM `distritos` WHERE `distritos`.`tipo` = '$tipo_delivery';");

$users_arr = array();
   
while($datos_delivery=mysqli_fetch_array($verDelivery)){
    

        $ubicacion_delivery=$datos_delivery['nombre'];
        // $precio_delivery=$datos_delivery['precio'];
        $objLista = " <option value='".$datos_delivery['nombre']."' > ".$datos_delivery['nombre']." </option> ";
         
       $distritos_array[] = array(
        'lista' => $objLista        
         
       ); 
       
     
    }

   
    echo json_encode($distritos_array);
    

    

     

?>