<?php
 
 require '../../library/dataTablesProdStock.php';
 
  
 $table_data->get('producto','CodigoProd',array('Imagen','CodigoProd', 'NombreProd','Modelo','Marca','Detalle','Peso','Compra','Precio','CodigoCat','Stock'));
 
 
  
  