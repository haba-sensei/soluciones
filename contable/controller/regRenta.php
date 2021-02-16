<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include '../php/configServer.php';
include '../php/consulSQL.php';


$estado = $_POST['opcion_renta'];
$monto_igv = $_POST['monto_igv'];
$anual = $_POST['monto_renta_anual'];
$mensual = $_POST['monto_renta_mensual'];
 

consultasSQL::UpdateSQL("impuestos", "igv='$monto_igv', estado_renta='$estado' ", "mensual='$mensual'");