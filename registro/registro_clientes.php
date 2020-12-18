<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>::SOLUCIONES CCTV Y SISTEMAS::</title>
</head>
<body background="images/login.jpg" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #f58634; ">CREA UNA CUENTA AQUÍ</h2>
		<center><div class="Ingreso">

	
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b></b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color:  #0b0b0b;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder=".." />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #0b0b0b;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder=".."/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color:  #0b0b0b;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder=".." />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #0b0b0b;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder=".." />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Guardar Registro"/>
   <td width=80 align=center><a href="Inicio_sesion.php"class="btn btn-primary">Iniciar Sesión </a>   
  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->


		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>
