<?php
    session_start();
    
    include '../library/configServer.php';
    include '../library/consulSQL.php';

    $nombre=$_POST['nombre-reg'];
    $correo=$_POST['correo-reg'];
    $clave=md5($_POST['clave-reg']);
    
     
    if(!$correo=="" && !$clave==""){
      
        $verAfil=ejecutarSQL::consultar("SELECT `usuarios`.*, `usuarios`.`correo`, `usuarios`.`pass`
        FROM `usuarios`
        WHERE `usuarios`.`correo` = '$correo' ");
        
              $AfilC=mysqli_num_rows($verAfil);
            if($AfilC==0){
                $regAfil = consultasSQL::InsertSQL("usuarios", "nombre, correo, pass", "'$nombre', '$correo', '$clave' "); 
                while ($h=mysqli_fetch_array($verAfil)) {
                    $nombre=$h['nombre'];
                    
                }
                $_SESSION['cliente']=$nombre;
                $_SESSION['pass']=$clave;
                $_SESSION['correo']=$correo;
                echo '<script> location.href="../clientes.php"; </script>';
            }else{
              echo '<script> alert("Usuario Incorrecto"); location.href="../index.php"; </script>'; 
            }
       
        
    }
    else{
        echo '<script> alert("Campos Vacios"); location.href="../index.php";</script>'; 
        }
	
