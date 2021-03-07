<?php
include 'configServer.php';
include 'consulSQL.php';
 

$nombre_distrito = $_POST['z'];

 
$verDelivery = ejecutarSQL::consultar("SELECT `distritos`.*, `distritos`.`nombre` FROM `distritos` WHERE `distritos`.`nombre` = '$nombre_distrito';");

 
   
    while($datos_delivery=mysqli_fetch_array($verDelivery)){
    
       $precio_delivery=$datos_delivery['precio'];
 
    }

   
    echo $precio_delivery; 
     
?>