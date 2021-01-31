<?php 

require 'ventaController.php';
$fecha =   $_GET['fechaGet'];

$table_data->get('ventas','id',array(
                              'num_comprobante',
                              'tipo_comprobante', 
                              'ruc',
                              'razon_social',
                              'dir_fiscal',
                              'fecha_emision',
                              'descripcion',
                              'por_concepto',
                              'moneda',
                              'tipo_pago',
                              'estado_sunat',
                              'estado_cpe',
                              'monto_total',
                              'id'
                               
                            ), $fecha);

