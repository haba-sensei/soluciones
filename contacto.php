	<!--
Author: SOLUCIONES
Empresa: SOLUCIONES CCTV Y SISTEMAS 
Copyrigt: Uso Comercial 
Licencia: Proveedor de servicios

-->
	<?php
	error_reporting(E_PARSE);
	session_start();
	include 'library/configServer.php';
	include 'library/consulSQL.php';
	include 'library/config.php';

	?>

	<!DOCTYPE html>
	<html lang="en">
	<link rel="shortcut icon" href="assets/img/favicon.png">
	
<!-- CCS REDES SOCIALES  -->
</script>
<script src="https://kit.fontawesome.com/23bdc1261d.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="assets/img/favicon.png">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        media="all">
        
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
     <!-- Template Main CSS File -->
  
<!-- CCS REDES SOCIALES  -->

<!-- ACA  -->
<style>
@media (max-width: 767px) {
    /* .bann{
        display:none;
    } */
}

.bann {
    background: #00b3e3;
    color: white;
    font-weight: 700;
    font-size: 14px;
    text-align: center;
    padding-top: 16px;
    padding-bottom: 16px;
}

.ajust_login_new {
    color: #333;
    border-radius: 6px;
    padding: 7px 14px;
    background: white;
    margin-left: 99px;
}

@media (max-width: 767px) {
    .bann_1 {
        display: none;
    }

    .ajust_login_new {
        margin-left: 0px;
        margin-top: 9px;
        display: inline-block;
    }

    .img_ajust_new {
        height: 29px;
    }
    #content-area5 .caption {
    position: absolute!important;
    top: 40%!important;
    padding: 90px 0 178px!important;
    }
    #content-area5 .landing {
    float: left;
    width: 82%!important;
    overflow: hidden;
    position: relative;
    }
    #content-area5 {
    background: url(assets/img/bg/bg5_movil.jpg) no-repeat center center;
    background-size: cover;
    height: 63%;
    }
}
</style>
<div class="">
    <a href="infoCat.php?CodigoCat=C000008">
        <img alt="" class="img_ajust_new" src="assets/img/1.gif" style="width: 100%;">
    </a>
</div>
<div class="bann">

    <span> Recibe un DESCUENTO EXCLUSIVO en tu primera COMPRA al registrarse en nuestra tienda en linea. </span>
    <a href="javascript:" class="ajust_login_new" onclick="mostrarLogin();"><i class="icon-user"></i> LOGIN CLIENTES
    </a>

</div>
<!-- aqui -->

	<head>
	    <?php include 'inc/links.php'; ?>
	</head>

	<body>
  <style>
  #search-button {
    padding: 25px 18px 0px!important;
  }
  
  #search_button {
    position: relative;
    top: -14px!important;
  }
  </style>
	    <?php include 'inc/navbar.php'; ?>

	    </nav>
	    </div>

</section>
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Estamos Cada Vez más Cerca de Ti Ubicanos ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='sucursal.php'"><span>¿ SUCURSALES ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Datos de Contactos Soluciones " ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Listo para empezar un proyecto con nosotros? Contáctenos a través de nuestros Formulario de Contactar. o por otros medios de contactos, números
     telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>

</section>
	   

	        <div class="col-md-12" style="background:white; padding-bottom: 20px;   padding-top: 10px;">
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;     padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-map-marker"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>Tienda Principal Soluciones</h5>
	                        <p>Av. el Sol / Av. Revolución </p>
	                        <p>Lt. 13 - Mz. H - Gp. 15 - St. 1</p>
	                        <p>Villa el Salvador - Lima Peru </p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;    width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 34px;"
	                                class="fa fa-phone"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>Numeros Telefonicos Soluciones</h5>
	                        <p>Informes / Asesoria +51 968-933-814</p>
	                        <p>Ventas / Soporte +51 986-838-333</p>
	                        <p>Averias / Garantia +51 996-727-562</p>

	                    </div>
	                </div>
	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;    width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-envelope"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>Correos Electronicos Soluciones</h5>
	                        <p>ventas@solucionescctvysistemas.com</p>
	                        <p>soporte@solucionescctvysistemas.com</p>
	                        <p>gerencia@solucionescctvysistemas.com</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-color: #da551c;     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-bank"></i></a> </div>
	                     <div class="icon-content ajust-cont"><br>
	                        <h5>Medios de Pagos Soluciones</h5>
	                        <p> Visa, Mastercard <br>discover card, diners club <br>
	                             American Express</p>

	                    </div>
	                </div>
	            </div>
	            </section>
	            
 </style>

	        <div class="col-md-12" style="    margin-top: 19px;margin-bottom: 28px;">
	            <div class="text-center header-wrap">
	                <h3 style="    font-size: 28px; color:red;">Asesores De Ventas</h3>
	                <hr style="margin-bottom: 8px solid #333;">
	                <p class="description">Si Decea Solicitar un Servicio o contactarnos, Por favor Contactanos Mediante de Nuestro Formulario de Contactar.
	            o por otros medios de contactos, números telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>
	            </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/1.jpg" alt="">
                </a>
                <div class="text-center team-social-icon">
                  <ul>
                   
                      
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center team-content">
                <h4>Jhonny Olarte </h4>
                 <p>Numero Telefonico:986838333</p>
                 
                <p>Contactar Asesor de Ventas </p>
                <p> Tienda Lima Cercado</p>
                
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/2.jpg" alt="">
                </a>
                <div class="text-center team-social-icon">
                  <ul>
                    
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center team-content">
                <h4>Enoc Peña</h4>
                 <p>Numero Telefonico:996727562</p>
                 
                 <p>Contactar Asesor de Ventas </p>
                <p> Tienda Villa el Salvador</p>
                
                
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/3.jpg" alt="">
                </a>
                <div class="text-center team-social-icon">
                  <ul>
					 
                    
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center team-content">
                <h4>Jesus Crespo</h4>
                 <p>Numero Telefonico:996727562</p>
                 
                <p>Contactar Asesor de Ventas </p>
                <p> Tienda Pachacamac</p>
               
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/4.jpg" alt="">
                </a>
                <div class="text-center team-social-icon">
                  <ul>
					  
                    
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center team-content">
                <h4>David Olarte</h4>
                 <p>Numero Telefonico:986838333</p>
                
                 <p>Contactar Asesor de Ventas </p>
                <p> Tienda Villa el Salvador</p>
                
                
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->
    </section>



	        <style>
	        .a {
	            ::placeholder {
	                /* Chrome, Firefox, Opera, Safari 10.1+ */
	                color: red;
	                opacity: 1;
	                /* Firefox */
	            }

	            :-ms-input-placeholder {
	                /* Internet Explorer 10-11 */
	                color: red;
	            }

	            ::-ms-input-placeholder {
	                /* Microsoft Edge */
	                color: red;
	            }
	        }
	        
	        
	        
	        
	        </section>
	        </style>

	        <div class="col-md-12" style="    margin-top: 19px;margin-bottom: 28px;">
	            <div class="text-center header-wrap">
	                <h3 style="    font-size: 28px; color:red;">Por Favor sus Datos</h3>
	                <hr style="margin-bottom: 8px solid #333;">
	                <p class="description">Si Decea Solicitar un Servicio o contactarnos, Por favor Contactanos Mediante de Nuestro Formulario de Contactar.
	            o por otros medios de contactos, números telefónicos o correo electrónicos en un plazo de 1 Hr como maximo sera respondido por el personal del area de soporte o servicios.</p>
	            </div>
	        </div>
	        </div>
	        </div>
	        <div class="contact-form-wrapper" style="background: #f5f5f5; padding-bottom: 26px;    padding-top: 26px;">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12">

	                        <form id="contactForm" method="POST" action="send_mail_contactanos.php" class="contact-form"
	                            data-toggle="validator">
	                            <div class="row">
	                                <div class="col-md-6 col-xs-12">
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group ">
	                                                <input type="text" class="form-control ha"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" id="nombre"
	                                                    name="nombre" placeholder=" Nombre y Apellidos" required
	                                                    data-error="Porfavor introduzca su nombre">
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <input class="form-control"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" type="email"
	                                                    id="correo" name="correo" placeholder=" Correo Electronico"
	                                                    required data-error="Porfabor introduzca su correo">
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <input type="text" class="form-control"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" id="telefono"
	                                                    name="telefono" placeholder="Numero de Celular" required
	                                                    data-error="Porfavor introduzca su telefono">
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-xs-12">
	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <textarea class="form-control"
	                                                    style="border: 2px solid rgba(25, 89, 213, 0.64);" id="mensaje"
	                                                    name="mensaje" placeholder="Por Favor Escriba su Mensaje" rows="9"
	                                                    data-error="Escriba su mensaje" required></textarea>
	                                                <div class="help-block with-errors"></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12 col-xs-12">
	                                    <button type="submit" class="btn btn-common">Enviar mensaje</button>
	                                    <div id="msgSubmit" class="hidden text-center h3"></div>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                </div>
	                
	      </section>                
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Cuentas Bancarias Soluciones " ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Nuestras cuentas están a nombre de soluciones cctv y sistemas s.a.c, o a nombre de su
representante legal jhonny david olarte gamboa. Toda cancelación con cheque sera
    de manera presencial, no aceptamos cheques con depositos en blanco.</p>

</section>
	   

	        </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-image: radial-gradient(circle at 33.36% 95.72%, #ffcf4e 0, #ffbe40 16.67%, #faa92c 33.33%, #ef900f 50%, #e37600 66.67%, #db5f00 83.33%, #d74a00 100%);     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-bank"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>BANCO DE CREDITO BCP</h5>
	                        <p> S/: 194-357-125-00-0-31 <br>$: 191-02423292-1-68 <br>
	                            CCI S/: 002-19413571250003198 <br>CCI $: 002-19110242329216853 <br></p>
	                            
	                         
	                            

	                    </div>
	                </div>
	            </div>

	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-image: radial-gradient(circle at 45.31% 103.62%, #70c900 0, #4fc700 25%, #13c40d 50%, #00c120 75%, #00be2f 100%);
	     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-bank"></i></a> </div>
	                   <div class="icon-content ajust-cont"><br>
	                        <h5>BANCO INTERBANK</h5>
	                        <p> S/: 4403003222018 <br>$: 4403003222025 <br>
	                            CCI S/: 00344000300322201855 <br>CCI $: 00344000300322202550 <br></p>

	                    </div>
	                </div>
	            </div>
	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-image: radial-gradient(circle at 30.93% 102.38%, #ff8a45 0, #ff7744 16.67%, #ff5e41 33.33%, #ff383b 50%, #f00037 66.67%, #e40038 83.33%, #db003e 100%);     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-bank"></i></a> </div>
	                     <div class="icon-content ajust-cont"><br>
	                        <h5>BANCO SCOTIABANK</h5>
	                        <p>  S/:081-0517938 <br> $:081-0517938 <br>
	                             CCI S/:009-022-200810517938-57 <br>CCI  $:009-022-200810517938-57 <br></p>

	                    </div>
	                </div>
	            </div>
	            <div class="col-md-3" align="center">
	                <div class="icon-bx-wraper bx-style-1 p-a15 center col" style="    border-width: 1px;
    border-style: solid;
    border-color: #2c5b8f;      padding-top: 23px;">
	                    <div class="icon-bx-sm m-b20 radius" style="  display: inline-block;
    text-align: center;  border-radius: 100%;    background-image: linear-gradient(350deg, #5974a6 0, #0f5699 50%, #003b8c 100%);     width: 70px;
    height: 70px;
    line-height: 80px; "> <a href="#" class="icon-cell" style="color: #ffffff;"><i style="    font-size: 37px;"
	                                class="fa fa-bank"></i></a> </div>
	                    <div class="icon-content ajust-cont"><br>
	                        <h5>BANCO CONTINENTAL BBVA</h5>
	                        <p>  S/:0011-0323-0200389677 <br> $:0011-0323-0200389677 <br>
	                             CCI S/:011-323-000200389677-32 <br>CCI  $:011-323-000200389677-32 <br></p>
	                    </div>
	                </div>
	            </div>
	            
	             </section>
      
	              </div>
	                <h2 align="center" style=" color:red;   font-size: 28px;     margin: 0.5em 1px 9px 10px !important;">Nuestra Ubicacion</h2> 
	                <hr style="margin-bottom: 1px solid #333;">
	                <p align="center" class="mb-5">Estamos en diferentes distritos de Lima, Nuestras sucursales toda nuestras tiendas estan ubicados en Google maps para ver otras sucursales
	                 mas cerca a usted ingresasar a ver sucursales .</p>

	                <div id="google-map" style="    margin-top: 25px;">  
	                    <iframe
	                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.5385969082613!2d-76.93922278584533!3d-12.21176719135753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105bb274902c075%3A0xeaf78596f47e208d!2ssoluciones+cctv+y+sistemas!5e0!3m2!1ses!2spe!4v1547750528633"
	                        width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
	                </div>
	           </div>
			</section>

	         
	            
	            <!-- sucribte  -->

    </section>


    <style>
    .box_subs {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .input_subs {
        width: 50%;
        margin: auto;
        margin-bottom: 22px;
        margin-top: 22px;
    }

    .close_session {
        width: 50px;
        height: 50px;
        order: 2;
        padding: 5px;
        box-sizing: border-box;
        border-radius: 50%;
        cursor: pointer;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.4) 2px 2px 6px;
        transition: all 0.5s ease 0s;
        position: absolute;
        z-index: 200;
        display: block;
        border: 0px;
        background: rgb(255 159 0) !important;
        right: 3px;
        top: 155px;
    }

    .out_cli {
        color: white;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        display: list-item;
        margin: auto;
        font-size: 30px;
        padding: 4px;
        padding-right: 1px;
    }
    </style>
    <section class="p-5 mt-4 text-center bg-primary box_subs">
        <div class="container p-3">
            <h3>SUBSCRIBETE AHORA</h3>
            <form action="process/subscript.php" method="POST">
                <input type="email" name="correo-subs" class="form-control input_subs"
                    placeholder="Ingresa tu Correo Electronico">
                <button type="submit" class="btn btn-warning">Subscribete</button>
            </form>
        </div>
       
    </section>
     <!-- sucribte  -->

	            <?php include 'inc/slider_bottom.php'; ?>

	            <?php include 'inc/footer.php'; ?>
	            <?php include 'inc/scripts.php'; ?>


	</body>

	</html>
