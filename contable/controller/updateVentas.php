<?php
session_start();

include '../php/configServer.php';
include '../php/consulSQL.php';

$id_update = $_POST['id_up'];
$num_comprobante = $_POST['num_comprobante_up']; 
$tipo_comprobante = $_POST['tipo_comprobante_up'];
$ruc = $_POST['ruc_up'];
$razon_social = $_POST['razon_social_up'];
$dir_fiscal = $_POST['dir_fiscal_up'];
$fecha_emision = $_POST['fecha_emision_up'];
$descripcion = $_POST['descripcion_up'];
$por_concepto = $_POST['por_concepto_up'];
$moneda = $_POST['moneda_up'];
$tipo_pago = $_POST['tipo_pago_up'];
$estado_sunat = $_POST['estado_sunat_up'];
$estado_cpe = $_POST['estado_cpe_up'];
$monto_total = $_POST['monto_total_up'];

consultasSQL::UpdateSQL("ventas", "
                        num_comprobante='$num_comprobante', 
                        tipo_comprobante='$tipo_comprobante',
                        ruc='$ruc',
                        razon_social='$razon_social',
                        dir_fiscal='$dir_fiscal', 
                        fecha_emision='$fecha_emision',
                        descripcion='$descripcion',
                        por_concepto='$por_concepto',
                        moneda='$moneda', 
                        tipo_pago='$tipo_pago', 
                        estado_sunat='$estado_sunat', 
                        estado_cpe='$estado_cpe', 
                        monto_total='$monto_total'
                        ",
                        "id='$id_update'");
 
       