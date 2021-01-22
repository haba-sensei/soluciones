<?php
error_reporting(E_PARSE);
session_start();

$ID = $_POST['ruc']; 
$nombEmpresa = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['telefono'];
$dir = $_POST['direccion'];
$cod = $_POST['CodCotiza'];
$fecha = $_POST['fecha'];
$total = $_POST['total'];
$total_final = $total;
$aSubmitVal = $_POST['operacion'];


$F_entrega = $_POST['F_entrega'];
$F_pago = $_POST['F_pago'];
$F_despacho = $_POST['F_despacho'];
$H_entrega = $_POST['H_entrega'];

$total = $_POST['total'];

include '../library/configServer.php';
include '../library/consulSQL.php';

include_once '../library/config.inc.php';
include 'plantilla.php';
require '../library/conexion.php';
include 'numerosAletras.php';







if (
    !$ID == '' &&
    !$nombEmpresa == '' &&
    !$correo == '' &&
    !$tel == '' &&
    !$dir == ''
) {
    $verificar_cliente = ejecutarSQL::consultar("select * from clientes where ID='" . $ID . "'");
    $num_cliente_row = mysqli_num_rows($verificar_cliente);

    if ($num_cliente_row <= 0) {
        if (
            consultasSQL::InsertSQL(
                'clientes',
                'ID, NombreEmpresa, Correo, Telefono, Direccion',
                "'$ID','$nombEmpresa','$correo','$tel','$dir'"
            )
        );
    }

    $verificar_cotizacion = ejecutarSQL::consultar("select * from cotizacion_online where id_cotizacion='" . $cod . "'");
    $num_cotizacion_row = mysqli_num_rows($verificar_cotizacion);

    if ($num_cotizacion_row <= 0) {

       

        switch ($aSubmitVal) {
            case 'cotizacion':
                $estado = 0;
                break;
            case 'compra':
                $estado = 1;
                consultasSQL::InsertSQL(
                    'detalle_compra_online',
                    'id_cotizacion, forma_entrega, forma_pago, fecha_despacho, horario_entrega',
                    " '$cod' ,'$F_entrega','$F_pago','$F_despacho', '$H_entrega'"
                );
                break;
        }
        
        consultasSQL::InsertSQL(
            'cotizacion_online',
            'id_cotizacion, ID, fecha_cotizacion, GranTotal, Estado',
            "'$cod','$ID','$fecha','$total_final', '$estado'"
        );
        
        

        

        foreach ($_SESSION['products'] as $product) {
            $product_name = $product['NombreProd'];
            $product_price = $product['Precio'];
            $product_code = $product['CodigoProd'];
            $product_qty = $product['product_qty'];

            $ordenU = ejecutarSQL::consultar(
                'SELECT `producto`.*, `perfil`.*, `producto`.`nro_cot` FROM `producto`	, `perfil`;'
            );

            while ($ordenP = mysqli_fetch_assoc($ordenU)) {
                $product_ganancia = $ordenP['ganancia'];
                $product_medio = $ordenP['medio'];
                $product_price_total =
                    ($product_price * ($product_ganancia + $product_medio)) /
                    100 +
                    $product_price;

                $subtotal = $product_price_total * $product_qty;
            }

            if (
                consultasSQL::InsertSQL(
                    'detalle_cotizacion_online',
                    'id_cotizacion, CodigoProd, Cantidad, SubTotal',
                    "'$cod','$product_code','$product_qty','$subtotal'"
                )
            );
        }
    } else {
        $_cotizacion = ejecutarSQL::consultar("select * from detalle_cotizacion_online where id_cotizacion='" . $cod . "'");
    }

    if($aSubmitVal){

        include 'base_cotizacion.php';

        $pdf->Output("../assets/pdf/$cod.pdf", 'F');


        $orden = $cod.'.pdf';
        $orden_ = $cod;


        $arr = array( "orden_pdf" => $orden,"orden_"    => $orden_, "correo"    => $correo );
        echo json_encode($arr);
    }	
    }





?>
 
                       
 