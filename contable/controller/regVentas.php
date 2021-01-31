<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include '../php/configServer.php';
include '../php/consulSQL.php';


$num_comprobante = $_POST['num_comprobante']; 
$tipo_comprobante = $_POST['tipo_comprobante'];
$ruc = $_POST['ruc'];
$razon_social = $_POST['razon_social'];
$dir_fiscal = $_POST['dir_fiscal'];
$fecha_emision = $_POST['fecha_emision'];
$descripcion = $_POST['descripcion'];
$por_concepto = $_POST['por_concepto'];
$moneda = $_POST['moneda'];
$tipo_pago = $_POST['tipo_pago'];
$estado_sunat = $_POST['estado_sunat'];
$estado_cpe = $_POST['estado_cpe'];
$monto_total = $_POST['monto_total'];

 

consultasSQL::InsertSQL("ventas", 
                        "num_comprobante, 
                        tipo_comprobante,
                        ruc,
                        razon_social,
                        dir_fiscal, 
                        fecha_emision,
                        descripcion,
                        por_concepto,
                        moneda, 
                        tipo_pago, 
                        estado_sunat, 
                        estado_cpe, 
                        monto_total", 
                        "'$num_comprobante',
                         '$tipo_comprobante',
                          '$ruc',
                          '$razon_social',
                          '$dir_fiscal',
                          '$fecha_emision',
                          '$descripcion',
                          '$por_concepto',
                          '$moneda',
                          '$tipo_pago',
                          '$estado_sunat',
                          '$estado_cpe',
                          '$monto'
                         "); 

echo $num_comprobante;

       