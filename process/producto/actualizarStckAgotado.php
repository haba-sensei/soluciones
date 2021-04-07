<?php
 
 require '../../library/dataTablesProdAgotado.php';
 
  
 $table_data->get('producto','CodigoProd',array('Imagen','CodigoProd', 'NombreProd','Modelo','Marca','Detalle','Peso','Compra','Precio','CodigoCat','Stock','codigoBarras', 'unidadMedida'));
 
 
 
  