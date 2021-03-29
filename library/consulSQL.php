<?php
/* Clase para ejecutar las consultas a la Base de Datos*/
class ejecutarSQL {
    public static function conectar(){
        if(!$con=  ($GLOBALS["___mysqli_ston"] = mysqli_connect(SERVER, USER, PASS))){
            die("Error en el servidor, verifique sus datos");
        }
        if (!mysqli_select_db($GLOBALS["___mysqli_ston"], constant('BD'))) {
            die("Error al conectar con la base de datos, verifique el nombre de la base de datos");
        }
        /* Codificar la información de la base de datos a UTF8*/
        ((bool)mysqli_set_charset($con, "utf8"));
        return $con;  
    }
    public static function consultar($query) {
        if (!$consul = mysqli_query( ejecutarSQL::conectar(), $query)) {
            die(mysqli_error($GLOBALS["___mysqli_ston"]).'Error en la consulta SQL ejecutada');
        }
        return $consul;
    }  
}
/* Clase para hacer las consultas Insertar, Eliminar y Actualizar */
class consultasSQL{
    public static function InsertSQL($tabla, $campos, $valores) {
        if (!$consul = ejecutarSQL::consultar("insert into $tabla ($campos) VALUES($valores)")) {
            die("Ha ocurrido un error al insertar los datos en la tabla $tabla");
        }
        return $consul;
    }
    public static function DeleteSQL($tabla, $condicion) {
        if (!$consul = ejecutarSQL::consultar("delete from $tabla where $condicion")) {
            die("Ha ocurrido un error al eliminar los registros en la tabla $tabla");
        }
        return $consul;
    }
    public static function UpdateSQL($tabla, $campos, $condicion) {
        if (!$consul = ejecutarSQL::consultar("update $tabla set $campos where $condicion")) {
            die("Ha ocurrido un error al actualizar los datos en la tabla $tabla");
        }
        return $consul;
    }
}
$conn=@mysqli_connect(SERVER, USER, PASS, BD);
    if(!$conn){
        die("imposible conectarse: ".mysqli_error($conn));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }



// date("Y-m-d")
    date_default_timezone_set("America/Lima");
    $ch = curl_init();
    $fecha = date("Y-m-d");  
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.sunat.cloud/cambio/'.$fecha);
    $result = curl_exec($ch);
    curl_close($ch);

    $obj = json_decode($result);
    
    if ( @fopen("https://google.com", "r") ) 
        {
        $status = "true";
        } 
        else 
        {
        $status = "false";
        } 
    //display connection status


    if ( isset($obj->error) ) {

        $taza_dia_cons = ejecutarSQL::consultar("SELECT `taza_cambio`.*, `taza_cambio`.`id` FROM `taza_cambio` WHERE `taza_cambio`.`id` = '1';");
       
        while($tazaC=mysqli_fetch_array($taza_dia_cons)){ 
        $compra_dolar=$tazaC['taza'];        
        }

        $globalTasaCambio_dolar = number_format($compra_dolar, 2);
        
        

    }else {


        if($status == "false"){

            $taza_dia_cons = ejecutarSQL::consultar("SELECT `taza_cambio`.*, `taza_cambio`.`id` FROM `taza_cambio` WHERE `taza_cambio`.`id` = '1';");
       
            while($tazaC=mysqli_fetch_array($taza_dia_cons)){ 
            $compra_dolar=$tazaC['taza'];        
            }
    
            $globalTasaCambio_dolar =  number_format($compra_dolar, 2);

        }else {

            date_default_timezone_set("America/Lima");
            $ch = curl_init();
            $fecha = date("Y-m-d");  
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'https://api.sunat.cloud/cambio/'.$fecha);
            $result = curl_exec($ch);
            curl_close($ch);
    
            $obj = json_decode($result);
    
            $compra_dolar_data = $obj->$fecha->compra;
            $compra_dolar = number_format($compra_dolar_data, 2);
            // $obj->$fecha->compra
            consultasSQL::UpdateSQL("taza_cambio", "id='1', taza='$compra_dolar'", "id='1'");
    
            $taza_dia_cons = ejecutarSQL::consultar("SELECT `taza_cambio`.*, `taza_cambio`.`id` FROM `taza_cambio` WHERE `taza_cambio`.`id` = '1';");
           
            while($tazaC=mysqli_fetch_array($taza_dia_cons)){ 
            $compra_dolar=$tazaC['taza'];        
            }
    
            $globalTasaCambio_dolar = number_format($compra_dolar, 2);


        }

        
        
       

    }