<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include '../php/configServer.php';
include '../php/consulSQL.php';
//sleep(2);
$nombre = $_POST['nombre-login'];
$clave = md5($_POST['clave-login']);


if (!$nombre == "" && !$clave == "") {
    $verAfil = ejecutarSQL::consultar("select * from afiliado where NombreAfil='$nombre' and Clave='$clave'");
    
        $AfilC = mysqli_num_rows($verAfil);
        if ($AfilC > 0) {
            $_SESSION['NombreAfil'] = $nombre;
            $_SESSION['Clave'] = $clave;
            echo '<script> location.href="compras.php"; </script>';
        } else {
            echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Usuario Incorrecto </div> </div>';
        }
    
    
} else {
    echo '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 100%">Campos Vacios</div> </div>';
}