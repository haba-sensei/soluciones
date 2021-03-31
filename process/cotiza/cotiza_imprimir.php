<?php
    include '../../library/configServer.php';
    include '../../library/consulSQL.php';

    $num_cotiza = $_GET['num_cotiza'];   
 
    $cotizacion_online_cons = ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion` FROM `cotizacion_online` WHERE `cotizacion_online`.`id_cotizacion` = '$num_cotiza'");

    while ($lista1 = mysqli_fetch_assoc($cotizacion_online_cons)) {
         
        $ID_cliente = $lista1['ID'];
        $fecha_cotizacion = $lista1['fecha_cotizacion'];
        $GranTotal = $lista1['GranTotal'];
        $descuento = $lista1['descuento'];
        $estado = $lista1['Estado'];
         
      
        $cliente_cons = ejecutarSQL::consultar("SELECT `clientes`.*, `clientes`.`ID` FROM `clientes` WHERE `clientes`.`ID` = '$ID_cliente'");

        while ($lista2 = mysqli_fetch_assoc($cliente_cons)) {
             
            $NombreEmpresa = $lista2['NombreEmpresa'];
            $Direccion = $lista2['Direccion'];
            $ID_cliente_2 = $lista2['ID']; 
            
            if($estado == 0){
                
                include '../numerosAletras_soles.php';
                include 'plantilla_cotiza.php'; 
                include 'base_imprimir_cotiza.php';
        
                $pdf->Output('orden.pdf','I');
            }else {

                echo "esta cotizacion no ha sido registrada";

            }

        }
    }    
    
       

?>
 
                       
 