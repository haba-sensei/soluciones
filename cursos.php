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
    background: url(assets/img/bg/bg5_movil.jpeg) no-repeat center center;
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
    <a href="javascript:" class="ajust_login_new" onclick="mostrarLogin();"><i class="icon-user"></i> LOGIN CLIENTES</a>

</div>
<!-- aqui -->


	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php include 'inc/links.php';?>
	<link rel="stylesheet" href="assets/css/forum.css" type="text/css">
	</head>
	<body>
	<?php include 'inc/navbar.php';?>


</nav>
</div>
<section style="    background: #f5f5f5;     padding-bottom: 1%;">
	<div id="get_quote" class="ajuste">
			<div class="container  animated fadeInUp">
				<div class="row">
					<div class="col-md-9">
						<h3 class="hidden-xs">¿ Empieza tu Futuro con Nosotros Separe su Vacante ?</h3>
					</div>
					<div class="col-md-3">
						 <button class="button-two bton-serv hidden-xs" onclick="window.location.href='formulario_cursos.php'"><span>¿ RESERVAR ?</span></button>
					</div>
				</div><!-- End row -->
			</div><!-- End container -->
		</div>
	<div class="container" id="service" style="    margin-top: -11px;">
<h1 class="section-title txt-rotate" data-period="2000" data-rotate='[ "Cursos Técnicos Rentables Empieza Ya" ]'></h1> 
	<hr style="margin-bottom: 1px solid #333;"> 
	 <p class="mb-5 " style="margin-top: 17px;
    margin-bottom: 23px;" align="center">Los cursos técnico, son programas cortos (mínimo de 1 mes), con una alta empleabilidad y de buenos ingresos, que permiten mejorar de manera 
    significativa la calidad de vida, Debido a la gran demanda de talento en el sector empresarial, los cursos técnicos tienen mayores posibilidades de inserción laboral.</p>
</section>

<style>
.timeline{
    list-style-type:none;
    margin:0;
    padding:0;
    position:relative;
   
}

.timeline>li{
    position:relative;
    min-height:50px;
    padding:20px 0
}
.timeline .timeline-time{
    position:absolute;
    left:0;
    width:18%;
    text-align:right;
    top:30px
}
.timeline .timeline-time .date,.timeline .timeline-time .time{
    display:block;
    font-weight:600
}
.timeline .timeline-time .date{
    line-height:16px;
    font-size:12px
}
.timeline .timeline-time .time{
    line-height:24px;
    font-size:20px;
    color:#242a30
}
.timeline .timeline-icon{
    left:15%;
    position:absolute;
    width:10%;
    text-align:center;
    top:40px
}
.timeline .timeline-icon a{
    text-decoration:none;
    width:20px;
    height:20px;
    display:inline-block;
    border-radius:20px;
    background:#d9e0e7;
    line-height:10px;
    color:#fff;
    font-size:14px;
    border:5px solid #2d353c;
    transition:border-color .2s linear
}
.timeline .timeline-body{
    margin-left: 2%;
    margin-right: 2%;
    background: #ffffff;
    position: relative;
    padding: 20px 25px;
    
    border-radius: 6px;
}

.timeline .timeline-body>div+div{
    margin-top:15px
}
.timeline .timeline-body>div+div:last-child{
    margin-bottom:-20px;
    padding-bottom:20px;
    border-radius:0 0 6px 6px
}
.timeline-header{
    padding-bottom:10px;
    border-bottom:1px solid #e2e7eb;
    line-height:30px
}
.timeline-header .userimage{
    float:left;
    width:34px;
    height:34px;
    border-radius:40px;
    overflow:hidden;
    margin:-2px 10px -2px 0
}
.timeline-header .username{
    font-size:16px;
    font-weight:600
}
.timeline-header .username,.timeline-header .username a{
    color:#2d353c
}
.timeline img{
    max-width:100%;
    display:block
}
.timeline-content{
    letter-spacing:.25px;
    line-height:18px;
    font-size:13px
}
.timeline-content:after,.timeline-content:before{
    content:'';
    display:table;
    clear:both
}
.timeline-title{
    margin-top:0
}
.timeline-footer{
    background:#ffffff;
    border-top:1px solid #e2e7ec;
    padding-top:15px
}
.timeline-footer a:not(.btn){
    color:#575d63
}
.timeline-footer a:not(.btn):focus,.timeline-footer a:not(.btn):hover{
    color:#2d353c
}
.timeline-likes{
    color:#6d767f;
    font-weight:600;
    font-size:12px
}
.timeline-likes .stats-right{
    float:right
}
.timeline-likes .stats-total{
    display:inline-block;
    line-height:20px
}
.timeline-likes .stats-icon{
    float:left;
    margin-right:5px;
    font-size:9px
}
.timeline-likes .stats-icon+.stats-icon{
    margin-left:-2px
}
.timeline-likes .stats-text{
    line-height:20px
}
.timeline-likes .stats-text+.stats-text{
    margin-left:15px
}
.timeline-comment-box{
    background:#f2f3f4;
    margin-left:-25px;
    margin-right:-25px;
    padding:20px 25px
}
.timeline-comment-box .user{
    float:left;
    width:34px;
    height:34px;
    overflow:hidden;
    border-radius:30px
}
.timeline-comment-box .user img{
    max-width:100%;
    max-height:100%
}
.timeline-comment-box .user+.input{
    margin-left:44px
}

.btn-activo{    
    
    background: #4bea0b;
    
}
.btn-inactivo{    
    
    background: #ea170b;
    
}
.h4-ajust{    font-size: 20px;
    margin: 0.6em 0;}

 .span-ajust{color: #0a0a0a;
    font-weight: 700;} 
    
  .jode2 { margin-left: 25%; }
  
@media( max-width: 480px ) {
 .jode {font-size: 1.1em !important;}
 .jode2 {margin-left: 10%;}
}
    
</style>

  <!-- end bg-cover -->
	 <!-- end container -->
    <section id="content" style="    background: rgba(0,0,0,.15);">

    <div class="container" style="width: 90%!important;">
    <div class="contact-info-wrapper clearfix">
    <div class="row">
                
    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">ENSAMBLAJE DE PC</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo del ensamblaje de computadoras 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/computo.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_ensamblaje.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-success jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
									
									
								</div>
								<!-- end timeline-body -->
                            </li>
</ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">CAMARAS CCTV-IP</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de la seguridad y vigilancia 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/cctv.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_camaras.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-success jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            </ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">CABLEADO EIA/TIA</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de cableado estructurado 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/redes.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_cableado.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-success jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            
                            
                            
                                </div>
                            <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">ALARMA DE SEGURIDAD</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de alarmas contra robo e incendios 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/alarmas.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_alarmas.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-danger jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
									
									
								</div>
								<!-- end timeline-body -->
                            </li>
</ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">RADIO ENLACES 5.8</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de radio enlaces 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/radioenlaces.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_radioenlace.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-danger jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            </ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">AUTOMATIZACIÓN</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de la domotica 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/domotica.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_automatizacion.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-danger jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            
                            </div>
                            <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">CERCOS ELECTRICOS</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de cercos electricos 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/cerco.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_cerco.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-primary jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
									
									
								</div>
								<!-- end timeline-body -->
                            </li>
</ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">ACCESO BIOMETRICO</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de control y acceso biometrico 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/biometrico.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_biometrico.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-primary jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            </ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">VIDEO PORTEROS</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de video porteros y intercomunicadores 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/intercom.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_videoportero.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-primary jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            
                            </div>
                            <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">ELECTRONICA BASICA </h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de la electronica 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/electronica.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_electronica.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-warning jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
									
									
								</div>
								<!-- end timeline-body -->
                            </li>
</ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">ELECTRICIDAD BASICA</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de la electricidad 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/electricidad.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_electricidad.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-warning jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
									</div>
								</div>
								<!-- end timeline-body -->
                            </li>
                            
                            
                            </ul>
    </div>

    <div class="col-md-4 col-sm-8 col-xs-12  tab-pane show active" id="profile-post">
    <ul class="timeline">
    
    <li>
								
								<!-- end timeline-icon -->
								<!-- begin timeline-body -->
								<div class="timeline-body content">
                               
									<div class="timeline-header">
										<span class="userimage"><img src="assets/img/user/user-12.jpg" alt="" /></span>
										<span class="username">Duracion 1 Mes</span>
                                        <span class="pull-right span-ajust">Cupos 8 / 10</span>
                                        <a href="javascript:;" class="" data-click="panel-reload"><i class="fa fa-redo"></i></a>
									</div>
									<div class="timeline-content">
										<h4 class="template-title h4-ajust">PAGINAS WEBS</h4>
										<p align="justify">Dirigido a. Profesionales técnicos, estudiantes y público en general interesados en incursionar en el mundo de la programacion de webs 100% practicas en taller.</p>
										<p class="m-t-20">
											<img src="assets/img/cover/cover-14.jpg" alt="" />
										</p>
									</div>
									<div class="timeline-footer">
										<a href="curso_web.php" style="color:white;  padding: 10px 60px!important;   " class="btn-sm btn-warning jode2"><i class="glyphicon glyphicon-book fa-fw fa-lg m-r-3"></i>Ver Curso</a>
										
					</section>
					</script>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "1626920177570816", // Facebook page ID
            whatsapp: "+51 986838333", // WhatsApp number
            line: "https://line.me/ti/p/9NRe_hdeb1", // Line QR code URL
            call_to_action: "Hola, Estamos en Linea las 24h!", // Call to action
            button_color: "#FF0000", // Color of button
           position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,line;", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

</script>
<!-- /WhatsHelp.io widget -->

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

<?php include 'inc/slider_bottom.php';?>
	<?php include 'inc/footer.php';?>
	<?php include 'inc/scripts.php';?>





	</body>
	
	
	</html>
