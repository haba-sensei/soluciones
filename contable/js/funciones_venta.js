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

function agregaform_venta(datos) {

    d = datos.split('||');

    $('#id').val(d[0]);
    $('#num_factura_u').val(d[1]);
    $('#num_boleta_u').val(d[2]);
    $('#anulado_u').val(d[3]);
    $('#bajas_u').val(d[4]);
    $('#date_u').val(d[7] + "/" + d[6] + "/" + d[5])
    $('#ruc_u').val(d[8]);
    $('#r_social_u').val(d[9]);
    $('#monto_u').val(d[10]);


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
    $.ajax({
        data: { "nruc": $("#ruc").val() },
        type: "POST",
        dataType: "json",
        url: "sunat/consulta.php",
    }).done(function(data, textStatus, jqXHR) {
        if (data['success'] != "false" && data['success'] != false) {
            $("#json_code").text(JSON.stringify(data, null, '\t'));

            var res = JSON.stringify(data['result']['RUC']);
            // alert(data['result']['RUC']);
            //console.log(JSON.stringify(respuesta));
            $('#direccion').val(data['result']['Direccion']);
            $('#r_social').val(data['result']['RazonSocial']);
            $('#tipo').val(data['result']['Tipo']);
            if (typeof(data['result']) != 'undefined') {

                //$("#tbody").html("");
                $.each(data['result'], function(i, v) {
                    //$("#tbody").append('<tr><td>'+i+'<\/td><td>'+v+'<\/td><\/tr>');

                });
            }

            $.ajaxunblock();
        } else {
            if (typeof(data['msg']) != 'undefined') {
                alert(data['msg']);
                $('#direccion').val('');
                $('#tipo').val('');
                $('#r_social').val('');
            }
            //$this.button('reset');
            $.ajaxunblock();
        }
    }).fail(function(jqXHR, textStatus, errorThrown) {
        alert("Solicitud fallida:" + textStatus);
        $.ajaxunblock();
    });
}