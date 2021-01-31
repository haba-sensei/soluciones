if(isset($_SESSION['consulta'])){
	if($_SESSION['consulta'] > 0){
        $idp=$_SESSION['consulta'];
        echo $idp;
		// $sql="SELECT * FROM tabla WHERE MONTH('$idp') = 10 AND YEAR('$idp') = 2016
        
        
        
        // SELECT * FROM ventas WHERE mes =(SELECT MAX('$idp') FROM ventas) and year = '$year' ";
        $mes_format = $idp;
        switch ($mes_format) {
            case "01":
                $mes_actual = "ENERO";
                break;
            case "02":
                $mes_actual = "FEBRERO";
                break; 
            case "03":
                $mes_actual = "MARZO";
                break;
            case "04":
                $mes_actual = "ABRIL";
                break;
            case "05":
                $mes_actual = "MAYO";
                break;   
            case "06":
                $mes_actual = "JUNIO";
                break;
            case "07":
                $mes_actual = "JULIO";
                break;
            case "08":
                $mes_actual = "AGOSTO";
                break;
            case "09":
                $mes_actual = "SEPTIEMBRE";
                break;
            case "10":
                $mes_actual = "OCTUBRE";
                break;
            case "11":
                $mes_actual = "NOVIEMBRE";
                break;
            case "12":
                $mes_actual = "DICIEMBRE";
                break;
         }
	}else{
		$sql="SELECT * FROM ventas WHERE mes =(SELECT MAX('$mes') FROM ventas) and year = '$year'";
	}
}else{
	$sql="SELECT * FROM ventas WHERE mes =(SELECT MAX('$mes') FROM ventas) and year = '$year'";
}
  
$result=mysqli_query($conexion,$sql);
while($ver=mysqli_fetch_row($result)){ 
     
    $datos=$ver[0]."||".//id
		   $ver[1]."||".//num_fact
		   $ver[2]."||".//num_boleta
		   $ver[3]."||".//anulado
		   $ver[4]."||".//bajas
		   $ver[5]."||".//dia
		   $ver[6]."||".//mes
           $ver[7]."||".//year
           $ver[8]."||".//ruc
           $ver[9]."||".//social
           $ver[10];//monto
           
          //fecha format 
         
         $anio = $ver[7];
         $mes_format = $ver[6];
         $dia = $ver[5];
         //sumatorias
         $Monto_vivo = $ver[10] + $Monto_vivo;
         
        switch ($mes_format) {
        case "01":
            $mes_actual = "ENERO";
            break;
        case "02":
            $mes_actual = "FEBRERO";
            break; 
        case "03":
            $mes_actual = "MARZO";
            break;
        case "04":
            $mes_actual = "ABRIL";
            break;
        case "05":
            $mes_actual = "MAYO";
            break;   
        case "06":
            $mes_actual = "JUNIO";
            break;
        case "07":
            $mes_actual = "JULIO";
            break;
        case "08":
            $mes_actual = "AGOSTO";
            break;
        case "09":
            $mes_actual = "SEPTIEMBRE";
            break;
        case "10":
            $mes_actual = "OCTUBRE";
            break;
        case "11":
            $mes_actual = "NOVIEMBRE";
            break;
        case "12":
            $mes_actual = "DICIEMBRE";
            break;
        
        }
           

}

$sql2="SELECT * FROM ventas WHERE  year = '$year'";
$result2=mysqli_query($conexion,$sql2);
    while($ver2=mysqli_fetch_row($result2)){ 
        $datos2=$ver2[0]."||".//id
		   $ver2[1]."||".//num_fact
		   $ver2[2]."||".//num_boleta
		   $ver2[3]."||".//anulado
		   $ver2[4]."||".//bajas
		   $ver2[5]."||".//dia
		   $ver2[6]."||".//mes
           $ver2[7]."||".//year
           $ver2[8]."||".//ruc
           $ver2[9]."||".//social
           $ver2[10];//monto

           $Monto_year = $ver2[10] + $Monto_year;
        }
//numero de ventas
        if(isset($_SESSION['consulta'])){
            if($_SESSION['consulta'] > 0){
                $idp=$_SESSION['consulta'];
                
        $sql3="SELECT * FROM ventas WHERE  mes = '$idp' and year = '$year'";
        }else{
            $sql3="SELECT * FROM ventas WHERE  mes = '$mes' and year = '$year'";
        }
        }else{
            $sql3="SELECT * FROM ventas WHERE  mes = '$mes' and year = '$year'";
        }   
        $result3=mysqli_query($conexion,$sql3);
        $rowcount=mysqli_num_rows($result3);
        //numero mas alto de compra
        
        if(isset($_SESSION['consulta'])){
            if($_SESSION['consulta'] > 0){
                $idp=$_SESSION['consulta'];
                
        $sql4="SELECT `ventas`.*,`ventas`.`monto`,`ventas`.`mes`, `ventas`.`year` FROM `ventas` WHERE `ventas`.`monto` =(SELECT MAX(monto)) AND `ventas`.`mes` = '$idp' AND `ventas`.`year` = '$year'";
        }else{
        $sql4="SELECT `ventas`.*,`ventas`.`monto`,`ventas`.`mes`, `ventas`.`year` FROM `ventas` WHERE `ventas`.`monto` =(SELECT MAX(monto)) AND `ventas`.`mes` = '$mes' AND `ventas`.`year` = '$year'";
        }
        }else{
        $sql4="SELECT `ventas`.*,`ventas`.`monto`,`ventas`.`mes`, `ventas`.`year` FROM `ventas` WHERE `ventas`.`monto` =(SELECT MAX(monto)) AND `ventas`.`mes` = '$mes' AND `ventas`.`year` = '$year'";
        }
        $result4=mysqli_query($conexion,$sql4);
        while($ver4=mysqli_fetch_row($result4)){ 
            $datos4=$ver4[0]."||".//id
               $ver4[1]."||".//num_fact
               $ver4[2]."||".//num_boleta
               $ver4[3]."||".//anulado
               $ver4[4]."||".//bajas
               $ver4[5]."||".//dia
               $ver4[6]."||".//mes
               $ver4[7]."||".//year
               $ver4[8]."||".//ruc
               $ver4[9]."||".//social
               $ver4[10];//monto
    
               $Monto_mayor = $ver4[10];
            }
              
       

?>


<div class="col col-12 col-md-6 col-xl-3">
    <div class="card animated fadeInUp delay-01s bg-light">
        <!-- <a href="" data-toggle="modal" data-target="#modalMes">-->
        <div class="card-body" style="border-left: 1px solid #d6b7b7;">
            <div class="row align-items-center">
                <div style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;"><span
                        style="padding-left: 30px; color:white;">Año Actual </span></div>
                <div style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                </div>
                <div style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                </div>
                <div class="col col-6" align="center"
                    style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                    <div class="p-0 opacity-50 icon fs-19 text-primary "><?php echo $year;  ?>
                    </div>
                </div>
                <div class="col col-6">
                    <h6 class="mt-0 mb-1">Monto Anual</h6>
                    <div class="count text-primary fs-20">S/ <?php echo $Monto_year;  ?></div>
                </div>
            </div>
        </div>
        <!-- </a> -->
    </div>
</div>
<div class="col col-12 col-md-6 col-xl-3">
    <div class="card animated fadeInUp delay-02s bg-light">
        <a href="" data-toggle="modal" data-target="#modalMes">
            <div class="card-body" style="border-left: 1px solid #d6b7b7;">
                <div class="row align-items-center">
                    <div style="position: absolute; background: #f58634; height: 26%; width: 40.3%; left: 0; top: 0;"><span
                            style="padding-left: 10px; color:white;">Selecciona el Mes</span></div>
                    <div
                        style="position: absolute; border-right: 1px solid #d6b7b7; height: 74%;  bottom: 0; left: 40%;">
                    </div>
                    <div style="position: absolute; border-bottom: 1px solid #d6b7b7; width: 40%;  bottom: 0; left: 0;">
                    </div>
                    <div class="col col-6" align="center"
                        style="position: relative; left: 54px; top: 8px; transform: translateX(-50%); ">
                        <div class="p-0 opacity-50 icon fs-19 text-primary "><?php 
                        if (empty($mes_actual)){
                                switch ($mes) {
                                case "01":
                                    $mes_actual = "ENERO";
                                    break;
                                case "02":
                                    $mes_actual = "FEBRERO";
                                    break; 
                                case "03":
                                    $mes_actual = "MARZO";
                                    break;
                                case "04":
                                    $mes_actual = "ABRIL";
                                    break;
                                case "05":
                                    $mes_actual = "MAYO";
                                    break;   
                                case "06":
                                    $mes_actual = "JUNIO";
                                    break;
                                case "07":
                                    $mes_actual = "JULIO";
                                    break;
                                case "08":
                                    $mes_actual = "AGOSTO";
                                    break;
                                case "09":
                                    $mes_actual = "SEPTIEMBRE";
                                    break;
                                case "10":
                                    $mes_actual = "OCTUBRE";
                                    break;
                                case "11":
                                    $mes_actual = "NOVIEMBRE";
                                    break;
                                case "12":
                                    $mes_actual = "DICIEMBRE";
                                    break;
                                
                                }
                        echo $mes_actual;

                        }else {
                            echo $mes_actual; 
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col col-6">
                        <h6 class="mt-0 mb-1">Monto Mensual</h6>
                        <div class="count text-primary fs-20">S/ <?php echo $Monto_vivo;  ?></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="col col-12 col-md-6 col-xl-3">
    <div class="card animated fadeInUp delay-03s bg-light">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col col-5">
                    <div class="p-0 opacity-50 icon fs-48 text-primary icofont-money-bag"></div>
                </div>
                <div class="col col-7">
                    <h6 class="mt-0 mb-1">Nro de Ventas </h6>
                    <div class="count text-primary fs-20"><?php echo $rowcount;  ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col col-12 col-md-6 col-xl-3">
    <div class="card animated fadeInUp delay-04s bg-light">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col col-5">
                    <div class="p-0 opacity-50 icon fs-48 text-primary icofont-dollar-plus">
                    </div>
                </div>
                <div class="col col-7">
                    <h6 class="mt-0 mb-1 text-nowrap">Venta del Mes</h6>
                    <div class="count text-primary fs-20">S/ <?php echo $Monto_mayor;  ?></div>
                </div>
            </div>
        </div>
    </div>
</div>