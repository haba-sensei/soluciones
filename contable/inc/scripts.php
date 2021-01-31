
    <script>
    $(document).ready(function() {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        
        $('#tabla').load('componentes/tabla.php');
        $('#metricas').load('componentes/metricas.php');
        $('#buscador').load('componentes/buscador.php');
       
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#guardarnuevo').click(function() {
            num_factura = $('#num_factura').val();
            num_boleta = $('#num_boleta').val();
            anulado = $('#anulado').val();
            bajas = $('#bajas').val();
            date = $('#date').val();
            ruc = $('#ruc').val();
            r_social = $('#r_social').val();
            monto = $('#monto').val();
            agregardatos(num_factura, num_boleta, anulado, bajas, date, ruc, r_social, monto);
        });



        $('#actualizadatos').click(function() {
            actualizaDatos();
        });

    });
    </script>
