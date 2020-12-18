$(document).ready(function() {
	 //////////////////////////////////////////////////*PRODUCTO AJAX */
/*Envio del formulario con Ajax para Añadir Usuario*/
    $('#add-user').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-user').serialize();
         var metodo=$('#add-user').attr('method');
         var peticion=$('#add-user').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#ResForm").html('Añadiendo Usuario <br><img src="../assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#ResForm").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#ResForm").html(data);
            }
        });
        return false;
    });
	
	/*Envio del formulario con Ajax para añadir producto
    $('#add-product form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-product form').serialize();
         var metodo=$('#add-product form').attr('method');
         var peticion=$('#add-product form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("res-form-add").html('Añadiendo Producto <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("res-form-add").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("res-form-add").html(data);
            }
        });
        return false;
    });
  */
    /*Envio del formulario con Ajax para eliminar producto*/
    $('#del-prod-form form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-prod-form form').serialize();
         var metodo=$('#del-prod-form form').attr('method');
         var peticion=$('#del-prod-form form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-prod").html('Eliminando producto <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-prod").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-prod").html(data);
            }
        });
        return false;
    });
    /*Actualizar producto con ajax*/
    $('.button-UPR').click(function() {
	var myId = $(this).val();
        $('#update-product form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-product form#'+myId).serialize();
             var metodo=$('#update-product form#'+myId).attr('method');
             var peticion=$('#update-product form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });
     //////////////////////////////////////////////////*CATEGORIA AJAX */
     
    /*Envio del formulario con Ajax para añadir categoria*/
    $('#add-categori form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-categori form').serialize();
         var metodo=$('#add-categori form').attr('method');
         var peticion=$('#add-categori form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-categori").html('Añadiendo categoria <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-add-categori").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-categori").html(data);
            }
        });
        return false;
    });

    /*Envio del formulario con Ajax para eliminar categoria*/
    $('#del-categori form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-categori form').serialize();
         var metodo=$('#del-categori form').attr('method');
         var peticion=$('#del-categori form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-cat").html('Eliminando categoria <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-cat").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-cat").html(data);
            }
        });
        return false;
    });
	/*Actualizar categoria con ajax*/
    $('.button-UC').click(function() {
	var myId = $(this).val();
        $('#update-category form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-category form#'+myId).serialize();
             var metodo=$('#update-category form#'+myId).attr('method');
             var peticion=$('#update-category form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });

    /*Envio del formulario con Ajax para agregar proveedor*/
    $('#add-provee form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-provee form').serialize();
         var metodo=$('#add-provee form').attr('method');
         var peticion=$('#add-provee form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-prove").html('Agregando proveedor <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-add-prove").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-prove").html(data);
            }
        });
        return false;
    });

    /*Envio del formulario con Ajax para eliminar proveedor*/
    $('#del-prove form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-prove form').serialize();
         var metodo=$('#del-prove form').attr('method');
         var peticion=$('#del-prove form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-prove").html('Eliminando proveedor <br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-prove").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-prove").html(data);
            }
        });
        return false;
    });
    
    
    /*Actualizar proveedores con ajax*/
    $('.button-UPPE').click(function() {
	var myId = $(this).val();
        $('#update-proveedor form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-proveedor form#'+myId).serialize();
             var metodo=$('#update-proveedor form#'+myId).attr('method');
             var peticion=$('#update-proveedor form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('<br><img src="assets/img/Update.gif" class="center-all-contens"><br>Actualizando...');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });
    
    
    
    /*Envio del formulario con Ajax para agregar administrador*/
    $('#add-admin form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#add-admin form').serialize();
         var metodo=$('#add-admin form').attr('method');
         var peticion=$('#add-admin form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-add-admin").html('Agregando Administrador...<br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-add-admin").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-add-admin").html(data);
            }
        });
        return false;
    });
    
    /*Envio del formulario con Ajax para eliminar administrador*/
    $('#del-admin form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-admin form').serialize();
         var metodo=$('#del-admin form').attr('method');
         var peticion=$('#del-admin form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-admin").html('Eliminando Administrador<br><img src="assets/img/enviando.gif" class="center-all-contens">');
            },
            error: function() {
                $("#res-form-del-admin").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-admin").html(data);
            }
        });
        return false;
    });
    
    /*Actualizar pedido con ajax*/
    $('.button-UPPE').click(function()
     {
	var myId = $(this).val();
        $('#update-pedido form#'+myId).submit(function(e) {
             e.preventDefault();
             var informacion=$('#update-pedido form#'+myId).serialize();
             var metodo=$('#update-pedido form#'+myId).attr('method');
             var peticion=$('#update-pedido form#'+myId).attr('action');
             $.ajax({
                type: metodo,
                url: peticion,
                data:informacion,
                beforeSend: function(){
                    $("div#"+myId).html('<img style="width:30px;" src="assets/img/loading.gif"><label style="font-weight: bold; font-size: 16px;">&nbsp;&nbsp;Actualizando...</label>');
                },
                error: function() {
                    $("div#"+myId).html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    $("div#"+myId).html(data);
                }
            });
            return false;
        });
    });
    
    /*Envio del formulario con Ajax para eliminar pedido*/
    
   $('#del-pedido form').submit(function(e) {
         e.preventDefault();
         var informacion=$('#del-pedido form').serialize();
         var metodo=$('#del-pedido form').attr('method');
         var peticion=$('#del-pedido form').attr('action');
         $.ajax({
            type: metodo,
            url: peticion,
            data:informacion,
            beforeSend: function(){
                $("#res-form-del-pedido").html('<img style="width:30px;" src="assets/img/loading.gif"><label style="font-weight: bold; font-size: 16px;">&nbsp;&nbsp;Espere mientras se elimina el pedido</label>');
            },
            error: function() {
                $("#res-form-del-pedido").html("Ha ocurrido un error en el sistema");
            },
            success: function (data) {
                $("#res-form-del-pedido").html(data);
            }
        });
        return false;
    });
		 });
		
