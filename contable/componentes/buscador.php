<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT id,num_factura,num_boleta,anulado,bajas,date,ruc,r_social,monto
						from compras";
				$result=mysqli_query($conexion,$sql);

				//definimos el area geografica del cual deseamos la fecha
date_default_timezone_set("America/Lima");
//extraemos la fecha usando la funcion date 
// d: dia
// m: mes
// Y: ańo en cuatro dígitos
$mes = date("m"); 
$año = date("Y");
$enero =  "01";
$febrero =  "02";
$marzo =  "03";
$abril =  "04";
$mayo =  "05";
$junio =  "06";
$julio =  "07";
$agosto =  "08";
$septiembre =  "09";
$octubre =  "10";
$noviembre =  "11";
$diciembre =  "12";


 ?>


<div class="modal fade" id="modalMes" tabindex="-3" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2">BUSQUEDA POR MES AÑO 2020</h4>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <select id="buscadorvivo" class="selectpicker "  >
                                
                                <option value="<?php echo $mes;  ?>">Seleciona uno</option>
                                <option value="<?php echo $enero;  ?>">ENERO</option>
                                <option value="<?php echo $febrero;  ?>">FEBRERO</option>
                                <option value="<?php echo $marzo;  ?>">MARZO</option>
                                <option value="<?php echo $abril;  ?>">ABRIL</option>
                                <option value="<?php echo $mayo;  ?>">MAYO</option>
                                <option value="<?php echo $junio;  ?>">JUNIO</option>
                                <option value="<?php echo $julio;  ?>">JULIO</option>
                                <option value="<?php echo $agosto;  ?>">AGOSTO</option>
                                <option value="<?php echo $septiembre;  ?>">SEPTIEMBRE</option>
                                <option value="<?php echo $octubre;  ?>">OCTUBRE</option>
                                <option value="<?php echo $noviembre;  ?>">NOVIEMBRE</option>
                                <option value="<?php echo $diciembre;  ?>">DICIEMBRE</option>


                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>
           





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

  

            <script type="text/javascript">
            $(document).ready(function() {
                $('#buscadorvivo').select2();

                $('#buscadorvivo').change(function() {
                    $.ajax({
                        type: "post",
                        data: 'valor=' + $('#buscadorvivo').val(),
                        url: 'php/crearsession.php',
                        success: function(r) {
                            
                            $('#metricas').load('componentes/metricas.php');
                            $('#tabla').load('componentes/tabla.php');
                            
                        }
                    });
                });
            });
            </script>