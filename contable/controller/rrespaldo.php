<?php  

if(isset($_SESSION['consulta'])){
	if($_SESSION['consulta'] > 0){
		$idp=$_SESSION['consulta'];
		$sql="SELECT * FROM ventas WHERE mes ='$idp' and year = '$year'";
	}else{
		$sql="SELECT * FROM ventas WHERE mes ='$mes' and year = '$year'";
	}
}else{
	$sql="SELECT * FROM ventas WHERE mes ='$mes' and year = '$year'";
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
?>
        <tr>


            <?php 
			if ($ver[1] == "Sin Datos"){

				echo '<td><span class="badge badge-danger" style="color:white; font-weight: 700;">Sin Factura</span></td>';
				
			}else {
				echo '<td><strong>'.$ver[1].'</strong></td>';
			}
			
			if ($ver[2] == "Sin Datos"){

				echo '<td><span class="badge badge-danger" style="color:white; font-weight: 700;">Sin Boleta</span></td>';
				
			}else {
				echo '<td><strong>'.$ver[2].'</strong></td>';
			}
			
			if ($ver[3] == "sin-anular"){

				echo '<td><span class="badge badge-info" style="color:white; font-weight: 700;">SIN ANULAR</span></td>';
				
			}elseif ($ver[3] == "anulado") {
				echo '<td><span class="badge badge-danger" style="color:white; font-weight: 700;">ANULADO</span></td>';
			}

			if ($ver[4] == "Sin Datos"){

				echo '<td><span class="badge badge-danger" style="color:white; font-weight: 700;">Sin Bajas</span></td>';
				
			}else {
				echo '<td><strong>'.$ver[4].'</strong></td>';
			}


			?>
            <td><strong><?php echo $ver[7]."-".$ver[6]."-".$ver[5] ?></strong></td>
            <td><strong><?php echo $ver[8] ?></strong></td>
            <td><strong><?php echo $ver[9] ?></strong></td>
            <td><strong>S/ <?php echo $ver[10] ?></strong></td>
            <td>
                <div class="actions">
                    <button class="btn btn-info btn-sm btn-square rounded-pill" data-toggle="modal"
                        data-target="#modalEdicion" onclick="agregaform_venta('<?php echo $datos ?>')"><span
                            class="btn-icon icofont-ui-edit"></span></button>
                    <button class="btn btn-error btn-sm btn-square rounded-pill"
                        onclick="preguntarSiNo_venta('<?php echo $ver[0] ?>')"><span
                            class="btn-icon icofont-ui-delete"></span></button>
                </div>
            </td>
        </tr>
		<?php 
		}
			 ?>