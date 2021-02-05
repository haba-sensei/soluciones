<?php 
	session_start();
	include '../php/configServer.php';
    include '../php/consulSQL.php';
 
    date_default_timezone_set('America/Lima');
    setlocale(LC_TIME, 'es_ES.UTF-8');
    setlocale(LC_TIME, 'spanish');
 
 
    
      $fecha =   $_POST['fecha_envio'];

    
      $numAnual = strftime("%Y", strtotime($fecha));  
      $numMes_format = date("m", strtotime($fecha)); 
      $numMes = strftime("%B", strtotime($fecha) );  


     
        
      $verMes = ejecutarSQL::consultar("SELECT * FROM compras WHERE MONTH(fecha_emision) = $numMes_format AND YEAR(fecha_emision) = $numAnual");
        
      $total_venta = mysqli_num_rows($verMes);
     
      $total_mensual = 0;

      while($datos_mes=mysqli_fetch_assoc($verMes)){

        $total_mensual = $total_mensual + $datos_mes['monto_total'];

        $total_mes = number_format($total_mensual, 2);
           
          
      }

      $total_anual_acum = 0;

      $verAnual = ejecutarSQL::consultar("SELECT * FROM compras WHERE YEAR(fecha_emision) = $numAnual");
      
      $total_num_anual = mysqli_num_rows($verAnual);

      while($datos_anual=mysqli_fetch_assoc($verAnual)){

        $total_anual_acum = $total_anual_acum + $datos_anual['monto_total'];

        $total_anual = number_format($total_anual_acum, 2);
         
        
      }

      $verImpuesto = ejecutarSQL::consultar("SELECT `impuestos`.`anual`, `impuestos`.`mensual`, `impuestos`.* FROM `impuestos` WHERE `impuestos`.`mensual` = '$numMes_format' AND `impuestos`.`anual` = '$numAnual'");
      
      $total_num_impuesto = mysqli_num_rows($verImpuesto);

      if ($total_num_impuesto == 0) {
        $impuesto = "No Pagado";
        $monto = 0;
         
        consultasSQL::InsertSQL("impuestos", "anual, mensual, monto, estado", "'$numAnual', '$numMes_format', '$monto','$impuesto' "); 
           
        // consultasSQL::UpdateSQL("usuarios", "correo='$correo', last_login='$last_login_up' ", "correo='$correo'");
      }else {

        while($datos_impuesto=mysqli_fetch_assoc($verImpuesto)){

          $impuesto =  $datos_impuesto['estado'];
          $impuesto_total =  number_format($datos_impuesto['monto'], 2);
          $impuesto_total_f =  number_format($datos_impuesto['monto'], 2, '.', '');

           
          $impuesto_igv_up =  number_format($datos_impuesto['igv'], 2, '.', '');
          
        }

      }
      
     


        $arreglo_data=array (
            'año' => $numAnual,
            'total_num_anual' => "Nro. Total: ".$total_num_anual,
            'total_anual' => "S/ ".$total_anual,
            'mes' => $numMes,
            'num_mes' => $numMes_format,
            'total_mes' => "S/ ".$total_mes,
            'total_venta' => "Nro. Total: ".$total_venta,
            'impuesto' => $impuesto,
            'impuesto_total_f' => $impuesto_total_f,
            'impuesto_total' => "S/ ".$impuesto_total,
            'impuesto_igv_up' => $impuesto_igv_up
            
        );
    echo json_encode($arreglo_data);
    