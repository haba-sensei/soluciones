<?php
session_start();

include '../php/configServer.php';
include '../php/consulSQL.php';
header("Content-Type: application/json", true);

$id = $_POST['information']; 

 $verVenta = ejecutarSQL::consultar("SELECT `ventas`.*, `ventas`.`id` FROM `ventas`WHERE `ventas`.`id` = '$id';");

    while ($h=mysqli_fetch_array($verVenta)) {
        $id_up=$h['id'];
        $num_comprobante=$h['num_comprobante'];
        $tipo_comprobante=$h['tipo_comprobante'];
        $ruc=$h['ruc'];
        $razon_social=$h['razon_social'];
        $dir_fiscal=$h['dir_fiscal'];
        $fecha_emision=$h['fecha_emision'];
        $descripcion=$h['descripcion'];
        $por_concepto=$h['por_concepto'];
        $moneda=$h['moneda'];
        $tipo_pago=$h['tipo_pago'];
        $estado_sunat=$h['estado_sunat'];
        $estado_cpe=$h['estado_cpe'];
        $monto_total=$h['monto_total'];
        

         $output = array(
            'id_up' => $id_up,
            'num_comprobante' => $num_comprobante,
            'tipo_comprobante' => $tipo_comprobante, 
            'ruc' => $ruc,
            'razon_social' => $razon_social,
            'dir_fiscal' => $dir_fiscal,
            'fecha_emision' => $fecha_emision,
            'descripcion' => $descripcion,
            'por_concepto' => $por_concepto,
            'moneda' => $moneda,
            'tipo_pago' => $tipo_pago,
            'estado_sunat' => $estado_sunat,
            'estado_cpe' => $estado_cpe,
            'monto_total' => $monto_total
            
        );

        echo json_encode( $output );
    }





