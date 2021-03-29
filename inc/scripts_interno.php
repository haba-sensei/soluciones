<!-- ================== BEGIN BASE JS ================== -->
<!--
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
-->
<script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>



<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>
<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
<script src="../assets/js/theme/default.min.js"></script>
<script src="../assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<!--
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
-->
<script src="../assets/plugins/flot/jquery.flot.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="../assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>

<script src="../assets/js/demo/dashboard.min.js"></script>
<script src="../assets/plugins/notifications/ohsnap.js"></script>

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="../assets/plugins/data/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="../assets/plugins/data/datatables.net-bs/js/dataTables.bootstrap.js" type="text/javascript"></script>

<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="../assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
<script src="../assets/js/demo/ui-modal-notification.demo.min.js"></script>
<script src="../assets/plugins/datepicker/moment.min.js"></script>
<script src="../assets/plugins/datepicker/daterangepicker.min.js"></script>
<script src="../assets/js/demo/form-plugins.demo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
<script>
$(document).ready(function() {
    App.init();
    TableManageButtons.init();
    FormPlugins.init();
});
</script>

<script src="../assets/js/config_cotiza.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/admin.js"></script>
<script>
$(document).ready(function() {

    $('#example2').DataTable({ 
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

                    return '<img src=../assets/img-products/' + full[0] + ' width="50" height="50" />'
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
                "sName": "Compra",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[7] * taza_dia.value;
                    const options = {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    };
                    const total_sol = Number(ope).toLocaleString('en', options);
                    const total_dolar = Number(full[7]).toLocaleString('en', options);
                    // var result = parseFloat(ope).toFixed(2);
                    return '$ ' + total_dolar + '<br>' + 'S/  ' + total_sol
                }
            },
            {
                "sName": "Venta",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[8] * taza_dia.value;
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

                    return " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='updateInventario.php?CodigoProd=" +
                        full[1] +
                        "'> <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' onclick='return confirm('estas seguro de eliminar?');' href='delprod.php?CodigoProd=" +
                        full[1] + "'> <i style='color:#FFF' class='fa fa-trash'></i>  </a>"



                }
            },
            {
                "sName": "Detalle",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {
                    return full[5]
                }
            },

            {
                "sName": "Categoria",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {


                    return full[11]
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
                "sName": "Peso",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return full[6]
                }
            }
        ]

    });

    $('#agotado_table').DataTable({
        "processing": true,
        "serverSide": true,
        "searching": true,
        "sAjaxSource": "../process/producto/actualizarStckAgotado.php",
        "responsive": true,
        "iDisplayLength": "5",
        "aLengthMenu": [5, 50, 100, 150, 200, 250],
        "lengthMenu": false,
        "columns": [{
                "sName": "Imagen",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return '<img src=../assets/img-products/' + full[0] + ' width="50" height="50" />'
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
                "sName": "Compra",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[7] * taza_dia.value;
                    const options = {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    };
                    const total_sol = Number(ope).toLocaleString('en', options);
                    const total_dolar = Number(full[7]).toLocaleString('en', options);
                    // var result = parseFloat(ope).toFixed(2);
                    return '$ ' + total_dolar + '<br>' + 'S/  ' + total_sol
                }
            },
            {
                "sName": "Venta",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[8] * taza_dia.value;
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

                    return " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='updateInventario.php?CodigoProd=" +
                        full[1] +
                        "'> <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' onclick='return confirm('estas seguro de eliminar?');' href='delprod.php?CodigoProd=" +
                        full[1] + "'> <i style='color:#FFF' class='fa fa-trash'></i>  </a>"



                }
            },
            {
                "sName": "Detalle",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {
                    return full[5]
                }
            },

            {
                "sName": "Categoria",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {


                    return full[11]
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
                "sName": "Peso",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return full[6]
                }
            }

        ]

    });

    $('#stock_table').DataTable({
        "processing": true,
        "serverSide": true,
        "searching": true,
        "sAjaxSource": "../process/producto/actualizarStck_lista.php",
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
                "sName": "Compra",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[7] * taza_dia.value;
                    const options = {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    };
                    const total_sol = Number(ope).toLocaleString('en', options);
                    const total_dolar = Number(full[7]).toLocaleString('en', options);
                    // var result = parseFloat(ope).toFixed(2);
                    return '$ ' + total_dolar + '<br>' + 'S/  ' + total_sol
                }
            },
            {
                "sName": "Venta",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[8] * taza_dia.value;
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

                    return " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='updateInventario.php?CodigoProd=" +
                        full[1] +
                        "'> <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' onclick='return confirm('estas seguro de eliminar?');' href='delprod.php?CodigoProd=" +
                        full[1] + "'> <i style='color:#FFF' class='fa fa-trash'></i>  </a>"



                }
            },
            {
                "sName": "Detalle",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {
                    return full[5]
                }
            },

            {
                "sName": "Categoria",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {


                    return full[11]
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
                "sName": "Peso",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return full[6]
                }
            }
        ]

    });

   



});
$(function() {
    $('#art_agotado').DataTable({
        "processing": true,
        "serverSide": true,
        "sAjaxSource": "../process/producto/art_agotado.php",
        "responsive": true,
        "iDisplayLength": "5",
        "aLengthMenu": [5, 50, 100, 150, 200, 250],
        "lengthMenu": false,
        "columns": [{
                "sName": "Imagen",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return '<img src=../assets/img-products/' + full[0] + ' width="50" height="50" />'
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
                "sName": "Detalle",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {
                    return full[5]
                }
            },
            {
                "sName": "Compra",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[7] / taza_dia.value;
                    const options = {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    };
                    const total_sol = Number(ope).toLocaleString('en', options);
                    const total_dolar = Number(full[7]).toLocaleString('en', options);
                    // var result = parseFloat(ope).toFixed(2);
                    return '$ ' + total_dolar + '<br>' + 'S/  ' + total_sol
                }
            },
            {
                "sName": "Venta",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    var taza_dia = document.getElementById("tasa_cambio_dia");
                    var ope = full[8] / taza_dia.value;
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
                "sName": "Categoria",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {


                    return full[11]
                }
            },
            {
                "sName": "Stock",
                "bSearchable": true,
                "bSortable": true,
                "mRender": function(data, type, full) {

                    if (full[10] == 0) {
                        $(full[10]).remove();
                    } else {
                        console.log(full[10]);
                        return full[10]
                    }


                }
            },
            {
                "sName": "Peso",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return full[6]
                }
            },
            {
                "sName": "Opciones",
                "bSearchable": false,
                "bSortable": false,
                "mRender": function(data, type, full) {

                    return " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='updateInventario.php?CodigoProd=" +
                        full[1] +
                        "'> <i style='color:#FFF' class='fa fa-edit'></i> Editar </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' onclick='return confirm('estas seguro de eliminar?');' href='delprod.php?CodigoProd=" +
                        full[1] + "'> <i style='color:#FFF' class='fa fa-trash'></i> Eliminar </a>"



                }
            }
        ],
        // "rowCallback": function( row, data, index ) {
        //         // if (data["Estado"] === null) {
        //         //     $(row).remove();
        //         // }
        //         console.log(full);
        // }
    });
})





$(function() {
    $('#example3').DataTable({
        iDisplayLength: 5,
        aLengthMenu: [5, 50, 100, 150, 200, 250],
        "lengthMenu": false,
    });
})
</script>
<script>
$(function() {
    $('#example1').DataTable({
        iDisplayLength: 8,
        aLengthMenu: [8, 50, 100, 150, 200, 250],
        "lengthMenu": false,
    });
})
</script>


<script>
$("#on").draggable({
    disabled: true
});
</script>