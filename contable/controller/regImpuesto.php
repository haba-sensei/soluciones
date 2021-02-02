<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include '../php/configServer.php';
include '../php/consulSQL.php';


$estado = $_POST['opcion_impuesto'];
$monto = $_POST['monto_impuesto'];
$monto_igv = $_POST['monto_igv'];
$anual = $_POST['monto_impuesto_anual'];
$mensual = $_POST['monto_impuesto_mensual'];
 

consultasSQL::UpdateSQL("impuestos", "monto='$monto', igv='$monto_igv', estado='$estado' ", "mensual='$mensual'");