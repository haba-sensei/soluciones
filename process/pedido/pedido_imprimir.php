<?php
    include '../../library/configServer.php';
    include '../../library/consulSQL.php';

    $num_cotiza = $_GET['num_cotiza'];   
 
    $cotizacion_online_cons = ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `detalle_compra_online`.*, `cotizacion_online`.`id_cotizacion`, `detalle_compra_online`.`id_cotizacion` FROM `cotizacion_online`, `detalle_compra_online` WHERE `cotizacion_online`.`id_cotizacion` = '$num_cotiza' AND `detalle_compra_online`.`id_cotizacion` = `cotizacion_online`.`id_cotizacion`");

    while ($lista1 = mysqli_fetch_assoc($cotizacion_online_cons)) {
         
        $ID_cliente = $lista1['ID'];
        $fecha_cotizacion = $lista1['fecha_cotizacion'];
        $GranTotal = $lista1['GranTotal'];
        $descuento = $lista1['descuento'];
        $estado = $lista1['Estado'];
        $taza_cambio = $lista1['taza_cambio'];
        $forma_entrega = $lista1['forma_entrega'];
        $forma_pago = $lista1['forma_pago'];
        $medio_pago = $lista1['medio_pago'];
        $distrito = $lista1['distrito'];
        $costo_adicional = $lista1['costo_adicional'];
        $dir_envio = $lista1['dir_envio'];
        $referencia = $lista1['referencia'];
        $moneda = $lista1['moneda'];
        $a_cuenta = $lista1['a_cuenta'];
        $tarjeta_5_porciento = $lista1['tarjeta_5_porciento'];
      
        $cliente_cons = ejecutarSQL::consultar("SELECT `clientes`.*, `clientes`.`ID` FROM `clientes` WHERE `clientes`.`ID` = '$ID_cliente'");

        while ($lista2 = mysqli_fetch_assoc($cliente_cons)) {
             
            $NombreEmpresa = $lista2['NombreEmpresa'];
            $Direccion = $lista2['Direccion'];
            $ID_cliente_2 = $lista2['ID']; 

            if($estado == 2 || $estado == 4){
                
                switch ($moneda) {
                    case 'soles':
                        include '../numerosAletras_soles.php';
                    break;

                    case 'dolares':
                        include '../numerosAletras_dolares.php';
                    break;
                }

                
                include 'plantilla_pedido.php'; 
                include 'base_imprimir_pedido.php';
        
                $pdf->Output('orden.pdf','I');
            }else {

                echo "este pedido no ha sido aprobado";

            }

        }
    }    
    
       

?>
 
                       
 