function agregardatos_venta(num_factura, num_boleta, anulado, bajas, date, ruc, r_social, monto) {

    cadena = "num_factura=" + num_factura +
        "&num_boleta=" + num_boleta +
        "&anulado=" + anulado +
        "&bajas=" + bajas +
        "&date=" + date +
        "&ruc=" + ruc +
        "&r_social=" + r_social +
        "&monto=" + monto;

    $.ajax({
        type: "POST",
        url: "php/agregarDatos_venta.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla_venta').load('componentes/tabla_venta.php');
                $('#metricas_venta').load('componentes/metricas_venta.php');
                $('#buscador_venta').load('componentes/buscador_venta.php');
                alertify.success("agregado con exito :)");
                window.location.reload(true);
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}


function actualizaDatos_venta() {


    id = $('#id').val();
    num_factura = $('#num_factura_u').val();
    num_boleta = $('#num_boleta_u').val();
    anulado = $('#anulado_u').val();
    bajas = $('#bajas_u').val();
    date = $('#date_u').val();
    ruc = $('#ruc_u').val();
    r_social = $('#r_social_u').val();
    monto = $('#monto_u').val();

    cadena = "id=" + id +
        "&num_factura=" + num_factura +
        "&num_boleta=" + num_boleta +
        "&anulado=" + anulado +
        "&bajas=" + bajas +
        "&date=" + date +
        "&ruc=" + ruc +
        "&r_social=" + r_social +
        "&monto=" + monto;

    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_venta.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla_venta').load('componentes/tabla_venta.php');
                $('#metricas_venta').load('componentes/metricas_venta.php');
                $('#buscador_venta').load('componentes/buscador_venta.php');
                alertify.success("Actualizado con exito :)");
                window.location.reload(true);
            } else {
                console.log(cadena);
                alertify.error("Fallo ");
            }
        }
    });

}

function preguntarSiNo_venta(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatos_venta(id) },
        function() { alertify.error('Se cancelo') });
}

function preguntarSiNo_compra(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatos_compra(id) },
        function() { alertify.error('Se cancelo') });
}


function eliminarDatos_venta(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_venta.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla_venta').load('componentes/tabla_venta.php');
                $('#metricas_venta').load('componentes/metricas_venta.php');
                $('#buscador_venta').load('componentes/buscador_venta.php');
                alertify.success("Eliminado con exito!");
                window.location.reload(true);
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}

function eliminarDatos_compra(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_compra.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {

                window.location.reload(true);
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}

(function($) {
    $.ajaxblock = function() {
        $("body").prepend("<div id='ajax-overlay'><div id='ajax-overlay-body' class='center'><i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><span class='sr-only'>Loading...</span></div></div>");
        $("#ajax-overlay").css({
            position: 'absolute',
            color: '#FFFFFF',
            top: '0',
            left: '0',
            width: '100%',
            height: '100%',
            position: 'fixed',
            background: 'rgba(39, 38, 46, 0.67)',
            'text-align': 'center',
            'z-index': '9999'
        });
        $("#ajax-overlay-body").css({
            position: 'absolute',
            top: '40%',
            left: '50%',
            width: '120px',
            height: '48px',
            'margin-top': '-12px',
            'margin-left': '-60px',
            //background: 'rgba(39, 38, 46, 0.1)',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            'border-radius': '10px'
        });
        $("#ajax-overlay").fadeIn(50);
    };
    $.ajaxunblock = function() {
        $("#ajax-overlay").fadeOut(100, function() {
            $("#ajax-overlay").remove();
        });
    };
})(jQuery);

function busqueda(ruc) {
    //$this.button('loading');
    $.ajaxblock();
    var documento = $("#ruc").val();

    if (documento == '') {
        alert("Documento Vacio");
        $.ajaxunblock();
    } else {
        $.ajax({
            type: "POST",
            url: "../sunat/consulta.php",
            data: {
                "ruc": $("#ruc").val()
            },
            dataType: "json",
        }).done(function(result) {



            $('#razon_social').val(result['razonSocial']);

            $('#dir_fiscal').val(result['direccion'] + " - " + result['distrito']);

            $.ajaxunblock();


        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("Documento Invalido");
            $.ajaxunblock();
        });


    }

}


function busquedaUpdate(ruc) {
    //$this.button('loading');
    $.ajaxblock();
    var documento = $("#ruc_up").val();

    if (documento == '') {
        alert("Documento Vacio");
        $.ajaxunblock();
    } else {
        $.ajax({
            type: "POST",
            url: "../sunat/consulta.php",
            data: {
                "ruc": $("#ruc_up").val()
            },
            dataType: "json",
        }).done(function(result) {



            $('#razon_social_up').val(result['razonSocial']);

            $('#dir_fiscal_up').val(result['direccion'] + " - " + result['distrito']);

            $.ajaxunblock();


        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("Documento Invalido");
            $.ajaxunblock();
        });


    }

}