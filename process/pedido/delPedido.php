<?php
session_start();
include '../../../library/configServer.php';
include '../../../library/consulSQL.php';

//sleep(5);
 $ordenList= $_GET['id_cotizacion'];

$cons=  ejecutarSQL::consultar("select * from cotizacion_online where id_cotizacion='".$ordenList."'");
$totalcateg = mysqli_num_rows($cons);
//print_r($codeCateg);
if($totalcateg>0){
    if(consultasSQL::DeleteSQL('categoria', "id_cotizacion='".$ordenList."'")){
        echo '<img src="../../assets/img/correcto.png" class="center-all-contens"><br><p class="text-center lead">Categoría eliminada éxitosamente</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarCat.php";
							$(location).attr("href",url);
							},1500);
							</script>';
    }else{
       echo '<img src="../../assets/img/incorrecto.png" class="center-all-contens"><br><p class="text-center lead">Ha ocurrido un error.<br>Por favor intente nuevamente</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarCat.php";
							$(location).attr("href",url);
							},1500);
							</script>'; 
    }
}else{
    echo '<img src="../../assets/img/incorrecto.png" class="center-all-contens"><br><p class="text-center lead">El código de la categoria no existe</p>
							<p class="lead text-cente">
							La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
							<a href="../../actualizarCat.php" class="btn btn-primary btn-lg">Volver a administración</a>
							<script>
							setTimeout(function(){
							url ="../../actualizarCat.php";
							$(location).attr("href",url);
							},1500);
							</script>	';	
    }
