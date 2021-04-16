<?php 
include '../library/configServer.php';
include '../library/consulSQL.php'; 

        $id_prod =$_POST['id_pedido'];    

  consultasSQL::UpdateSQL("cotizacion_online", " Estado='2' ", "id_cotizacion='$id_prod'");
  echo "exito";