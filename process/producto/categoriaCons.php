<?php 
session_start();
 
$cod_category =  $_POST["categoria"];

include '../../library/configServer.php';
include '../../library/consulSQL.php';
        
$codi =  ejecutarSQL::consultar("SELECT `categoria`.`CodigoCat`, `categoria`.`Nombre` FROM `categoria` WHERE `categoria`.`CodigoCat` = '$cod_category')");
while($codigo=mysqli_fetch_array($codi)){ 
$nombre=$codigo['Nombre'];

echo $nombre;
}


?>