<?php 

require 'compraController.php';
$fecha =   $_GET['fechaGet'];

$fecha_anual = $_GET['fechaAnual'];


 
$table_data->get('compras','id',array(
                              'num_comprobante',
                              'tipo_comprobante', 
                              'ruc',
                              'razon_social',
                              'dir_fiscal',
                              'fecha_emision',
                              'moneda',
                              'tipo_pago',
                              'estado_sunat',
                              'estado_cpe',
                              'monto_total',
                              'id'
                               
                            ), $fecha, $fecha_anual);

