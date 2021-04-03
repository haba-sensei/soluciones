<!--
Author: Haba_Sensei
Empresa: Elysium 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
<?php
    
	include '../library/configServer.php';
	include '../library/consulSQL.php';
	include '../process/securityPanel.php';
?>


<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>::SOLUCIONES CCTV Y SISTEMAS::</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <?php include '../inc/header.php'   ?>

<body>
    <!-- begin page-cover -->

    <div class="page-cover"></div>
    <!-- end page-cover -->

    <!-- begin #page-loader -->

    <!--
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
-->

    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Panel</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <a data-toggle="nav-profile">

                            <div class="info">
                            <?php
									include '../inc/titulos_header_admin.php';
								?>

                            </div>
                        </a>
                    </li>

                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header active">Mapa del Sitio</li>

                    <?php 
					  include '../inc/sidebar.php';
					
					 ?>

                    <div id="content" class="content">
                        <!-- begin breadcrumb -->
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="javascript:">Ordenes</a></li>
                            <li class="breadcrumb-item active">Ver Orden</li>
                        </ol>
                        <!-- end breadcrumb -->
                        <!-- begin page-header -->
                        <h1 class="page-header">Actualizar Ordenes<small> Modulo de Ordenes</small></h1>

                        <?php 

							$NumPedido= $_GET['id_cotizacion'];
							$type= $_GET['type'];
							
						?>
                        <style>
							.ajut_centrado_orden {
								vertical-align: middle !important;
								text-align: center;
							}

							.border_hidden {
								border-left-color: rgb(255 255 255 / 0%) !important;
								border-bottom-color: rgb(255 255 255 / 0%) !important;
							}

							.btn-new {
								background: #0d74b3 !important;
								color: white;
								font-weight: 600;
							}

							.btn-elim {
								background: #ff3502 !important;
								color: white;
								font-weight: 600;
							}

							@media (min-width: 576px) {
								.modal-dialog-centered {
									min-height: calc(100% - (9.75rem * 2));
								}
							}

							h2 {
								color: #0d74b3 !important;
								font-weight: 700;
							}

							.btn.btn-default,
							.btn.btn-default.disabled,
							.btn.btn-default.disabled:focus,
							.btn.btn-default.disabled:hover,
							.btn.btn-default[disabled],
							.btn.btn-default[disabled]:focus,
							.btn.btn-default[disabled]:hover {
								color: #fff;
								background: rgb(8 70 107);
								border-color: transparent;
							}

								@media (min-width: 768px) {
								.modal-xl {
								width: 90%;
								max-width:1200px;
								}
								}
								div.dataTables_wrapper div.dataTables_info {
									padding-top: 8px;
									white-space: nowrap;
									color: white;
								}
								
                        </style>
                      

                        <div id="caja_orden"></div> 


                        <?php include '../inc/scripts_interno.php' ?>


                        <div class="modal fade" id="modalNumProd" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="container">
                                            <div class="row" id="cuerpoNumProd">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="modal fade" id="modalDescuento" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="container">
                                            <div class="row" id="cuerpoDescuento">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalFormaPago" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="container">
                                            <div class="row" id="cuerpoFormaPago">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalMedioPago" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="container">
                                            <div class="row" id="cuerpoMedioPago">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalDelivery" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="container">
                                        <form id="deliveryForm" >
                                            <div class="row" id="cuerpoDelivery">
 
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="modal fade" id="modalNewProd" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
								<div class="modal-header" style="background: #131619;  border-bottom-color: #131619;">
									<h3 class="modal-title" style="color: white; font-weight: 600;">Agregar Nuevo Articulo</h3>
									<span style="float: right; color:white;" id="caja_loading_prod"></span>
									 
									</div>
                                    <div class="modal-body" style="background: #131619;">
                                         
										<div class="table-responsive" >
											<table id="table_new_prod" class="table table-condensed display responsive nowrap" style="width:100%" >
												<thead class="btn-new">
													<tr>
														<th>Imagen</th>
														<th>Cod</th>
														<th>Articulo</th>
														<th>Modelo</th> 
														<th>Marca</th>
														<th>Stock</th>
														<th>Precio</th>
														<th>Opciones</th> 
													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>

										 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                        cargarOrden('<?=$NumPedido?>', '<?=$type?>');

                        function cargarOrden(num_cotiza, type) {
                            $.ajax({
                                type: "POST",
                                url: "../process/cotiza/CotizaController.php",
                                data: {
                                    num_cotiza: num_cotiza,
                                    type: type
                                },
                                beforeSend: function() {
                                    $("#caja_orden").html('Cargando Data Kit <i class="fas fa-spinner fa-spin"></i>');
                                },
                                success: function(data) {
                                    $('#caja_orden').html(data);
                                }
                            });
                        }

                        function modalCantidadProd(num_cotiza, cod_prod) {


                            $.ajax({
                                type: "POST",
                                url: "../process/pedido/NumProdPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
                                    cod_prod: cod_prod
                                },
                                beforeSend: function() {
                                    $("#caja_loading").html('Cargando Data Kit <i class="fas fa-spinner fa-spin"></i>');

                                },
                                success: function(data) {
                                    $("#caja_loading").html('');
                                    $('#cuerpoNumProd').html(data);
                                    $('#modalNumProd').modal('show');


                                }
                            });
                        }

                        function actualizarCantidad(num_cotiza, id_prod, cod_prod) {
                            cant = document.getElementById('num_value_cantidad').value;

                            $.ajax({
                                type: "POST",
                                url: "../process/pedido/UpdateProdPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
                                    id_prod: id_prod,
                                    cant: cant,
                                    cod_prod: cod_prod
                                },
                                beforeSend: function() {
                                    $("#caja_loading").html('Cargando Data Kit <i class="fas fa-spinner fa-spin"></i>');
                                    $('#modalNumProd').modal('hide');
                                },
                                success: function(data) {
                                    $("#caja_loading").html('');

                                    swal("Actualizado con Exito", "", "success");

                                    cargarOrden('<?=$NumPedido?>', '<?=$type?>');

                                }

                            });


                        }

                        function elimProd(id_prod, cod_cotiza) {

                            swal({
                                    title: "Seguro que desea Eliminar?",
                                    text: "Esta operacion es definitiva!",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonClass: "btn-danger",
                                    confirmButtonText: "Eliminar!",
                                    closeOnConfirm: true
                                },
                                function() {

                                    $.ajax({
                                        type: "POST",
                                        url: "../process/pedido/ElimProdPedidoController.php",
                                        data: {
											cod_cotiza: cod_cotiza,
                                            id_prod: id_prod
                                        },
                                        beforeSend: function() {
                                            $("#caja_loading").html('Cargando Data Kit <i class="fas fa-spinner fa-spin"></i>');
                                        },
                                        success: function(data) {
                                            $("#caja_loading").html('');
                                            cargarOrden('<?=$NumPedido?>', '<?=$type?>');

                                            if (data == "eliminado") {

                                                swal("Eliminado con Exito", "", "success");

                                            } else {

                                                swal("Error 404", "", "error");

                                            }

                                        }
                                    });



                                });





                        }

						function AddProdNew(id_prod, num_cotiza){
							 
							$.ajax({
                                type: "POST",
                                url: "../process/pedido/AddProdPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
                                    id_prod: id_prod
                                },
                                beforeSend: function() {
                                    $("#caja_loading_prod").html('Cargando Data Kit <i class="fas fa-spinner fa-spin"></i>');

                                },
                                success: function(data) {
                                    $("#caja_loading_prod").html('');
									 
                                     if(data == "lleno"){
										swal("Este Producto Ya esta Agregado", "", "error");
									 }else{
										swal("Agregado con Exito", "", "success");
										cargarOrden('<?=$NumPedido?>', '<?=$type?>');
									 }
                                    
									
                                }
                            }); 

						}

						function modalDescuento(num_cotiza){

							$.ajax({
                                type: "POST",
                                url: "../process/pedido/ModalDescPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza
                                },
                                success: function(data) {
                                     
                                    $('#cuerpoDescuento').html(data);
                                    $('#modalDescuento').modal('show');


                                }
                            }); 
 						  
						}

                        function modalFormaPago(num_cotiza){

                            $.ajax({
                                type: "POST",
                                url: "../process/pedido/ModalFormaPagoPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza
                                },
                                success: function(data) {
                                    
                                    $('#cuerpoFormaPago').html(data);
                                    $('#modalFormaPago').modal('show');


                                }
                            }); 

                        }

                        function modalMedioPago(num_cotiza){

                            $.ajax({
                                type: "POST",
                                url: "../process/pedido/ModalMedioPagoPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza
                                },
                                success: function(data) {
                                    
                                    $('#cuerpoMedioPago').html(data);
                                    $('#modalMedioPago').modal('show');


                                }
                            }); 

                        }

                        function modalDelivery(num_cotiza){

                            $.ajax({
                                type: "POST",
                                url: "../process/pedido/ModalDeliveryPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza
                                },
                                success: function(data) {
                                    
                                    $('#cuerpoDelivery').html(data);
                                    $('#modalDelivery').modal('show');


                                }
                            }); 

                        }

						function addNewDescuento(num_cotiza){
							cant = document.getElementById('valor_descuento').value;

							$.ajax({
                                type: "POST",
                                url: "../process/pedido/NewDescPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
									cant: cant
                                },
                                success: function(data) {
									$('#modalDescuento').modal('hide');
									swal("Agregado con Exito", "", "success");  
									cargarOrden('<?=$NumPedido?>', '<?=$type?>');
                                }
                            }); 



						}

                        function addNewFormaPago(num_cotiza){
							cant = document.getElementById('valor_FormaPago').value;
                             
							$.ajax({
                                type: "POST",
                                url: "../process/pedido/NewFormaPagoPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
									cant: cant
                                },
                                success: function(data) {
                                    
									$('#modalFormaPago').modal('hide');
									swal("Agregado con Exito", "", "success");  
									cargarOrden('<?=$NumPedido?>', '<?=$type?>');
                                }
                            }); 



						}

                        function addNewMedioPago(num_cotiza){
							cant = document.getElementById('valor_MedioPago').value;
                             
							$.ajax({
                                type: "POST",
                                url: "../process/pedido/NewMedioPagoPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
									cant: cant
                                },
                                success: function(data) {
                                    
									$('#modalMedioPago').modal('hide');
									swal("Agregado con Exito", "", "success");  
									cargarOrden('<?=$NumPedido?>', '<?=$type?>');
                                }
                            }); 



						}

                        function addNewDelivery(num_cotiza){
                            var serialize = $('#deliveryForm').serialize();
                            serialize = serialize + '&' + $.param({
                                'num_cotiza': num_cotiza
                            });
                            $.ajax({
                                type: "POST",
                                url: "../process/pedido/NewDeliveryPedidoController.php",
                                data: serialize,
                                async: true,
                                success: function(data) { 
									$('#modalDelivery').modal('hide');
									swal("Agregado con Exito", "", "success");  
									cargarOrden('<?=$NumPedido?>', '<?=$type?>');
                                }
                            }); 


                        }

						function ResetDescuento(num_cotiza){

							cant = 0;
							$.ajax({
                                type: "POST",
                                url: "../process/pedido/NewDescPedidoController.php",
                                data: {
                                    num_cotiza: num_cotiza,
									cant: cant
                                },
                                success: function(data) {
									$('#modalDescuento').modal('hide');
									swal("Reset con Exito", "", "success");  
									cargarOrden('<?=$NumPedido?>', '<?=$type?>');
                                }
                            }); 
						}

                        function registro_compra(num_cotiza){
                            
							$.ajax({
                                type: "POST",
                                url: "../process/cotiza/ApprovedCotizaController.php",
                                data: {
                                    num_cotiza: num_cotiza
                                },
                                success: function(data) {
									 
									swal("Registrado Con Exito! Sera Redirigido a Pedidos", "", "success");  
                                    setTimeout(function(){ window.location="actualizarPedido_online.php?id_cotizacion="+num_cotiza }, 3000);
									cargarOrden('<?=$NumPedido?>', '<?=$type?>');
                                }
                            }); 
                        }

                       
                        

						$('#table_new_prod').DataTable({
							"processing": true,
							"serverSide": true,
							"searching": true,
							"sAjaxSource": "../process/producto/actualizarStck.php",
							"responsive": true,
							"iDisplayLength": "5",
							"aLengthMenu": [5, 50, 100, 150, 200, 250],
							"lengthMenu": false,
							"columns": [{
							"sName": "Imagen",
							"bSearchable": false,
							"bSortable": false,
							"mRender": function(data, type, full) {

							return '<img src=../assets/img-products/'+full[0]+' width="50" height="50" />'
							}
							},
							{
							"sName": "CodigoProd",
							"bSearchable": true,
							"bSortable": true,
							"mRender": function(data, type, full) {
							return full[1]
							}
							},
							{
							"sName": "NombreProd",
							"bSearchable": true,
							"bSortable": true,
							"mRender": function(data, type, full) {
							return full[2]
							}
							},
							{
							"sName": "Modelo",
							"bSearchable": true,
							"bSortable": true,
							"mRender": function(data, type, full) {
							return full[3]
							}
							},
							{
							"sName": "Marca",
							"bSearchable": true,
							"bSortable": true,
							"mRender": function(data, type, full) {
							return full[4]
							}
							}, 
							{
							"sName": "Stock",
							"bSearchable": true,
							"bSortable": true,
							"mRender": function(data, type, full) { 
							return full[10]  
							}
							},
							{
							"sName": "Venta",
							"bSearchable": false,
							"bSortable": false,
							"mRender": function(data, type, full) {

							var taza_dia = <?php echo number_format($globalTasaCambio_dolar, 2); ?>;
							var ope = full[8] * taza_dia;
							const options = {
							minimumFractionDigits: 2,
							maximumFractionDigits: 2
							};
							const total_sol = Number(ope).toLocaleString('en', options);
							const total_dolar = Number(full[8]).toLocaleString('en', options);
							// var result = parseFloat(ope).toFixed(2);
							return '$ ' + total_dolar + '<br>' + 'S/  ' + total_sol

							}
							},
							{
							"sName": "Opciones",
							"bSearchable": false,
							"bSortable": false,
							"mRender": function(data, type, full) {

								var num_order = "<?=$NumPedido?>";

								return " <button class='btn btn-new btn-block ' style='margin-top: 8px;' onclick='AddProdNew(&quot;"+full[1]+"&quot; , &quot;"+num_order+"&quot;)'><i class='fas fa-plus fa-fw'></i> AGREGAR </button>"

								

							}
							}
							]

						});

                          
                       
                  
                        </script>






</body>

</html>