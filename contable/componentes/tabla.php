<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
    date_default_timezone_set("America/Lima");
    //extraemos la fecha usando la funcion date 
    // d: dia
    // m: mes
    // Y: ańo en cuatro dígitos
    $mes = date("m"); 
    $year = date("Y");
    $mes_actual= date("m");
 ?>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/jquery.typeahead.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="librerias/select2/css/select2.css">
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="librerias/bootstrap/datatables/button/buttons.dataTables.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
	<table class="table " id="example">
    <thead>
        <tr class="bg-primary text-white">
            <th scope="col">N-Factura</th>
            <th scope="col">N-Boleta</th>
            <th scope="col">Anulado</th>
            <th scope="col">Bajas</th>
            <th scope="col">Fecha-Emision</th>
            <th scope="col">Ruc</th>
            <th scope="col">Razon-Social</th>
            <th scope="col">Monto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php  

if(isset($_SESSION['consulta'])){
	if($_SESSION['consulta'] > 0){
		$idp=$_SESSION['consulta'];
		$sql="SELECT * FROM compras WHERE mes ='$idp' and year = '$year'";
	}else{
		$sql="SELECT * FROM compras WHERE mes ='$mes' and year = '$year'";
	}
}else{
	$sql="SELECT * FROM compras WHERE mes ='$mes' and year = '$year'";
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
                        data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')"><span
                            class="btn-icon icofont-ui-edit"></span></button>
                    <button class="btn btn-error btn-sm btn-square rounded-pill"
                        onclick="preguntarSiNo('<?php echo $ver[0] ?>')"><span
                            class="btn-icon icofont-ui-delete"></span></button>
                </div>
            </td>
        </tr>
		<?php 
		}
			 ?>
    </tbody>
    
</table>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.typeahead.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/jquery.dataTables.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/dataTables.bootstrap4.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/dataTables.buttons.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.bootstrap4.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/jszip.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/pdfmake.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/vfs_fonts.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.html5.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.print.min.js"></script>
    <script src="librerias/bootstrap/datatables/button/buttons.colVis.min.js"></script>

    <script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: ['excel', 'pdf'],
        
       
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
    </script>
   