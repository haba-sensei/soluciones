<?php
    session_start();
    
    include '../library/configServer.php';
    include '../library/consulSQL.php';
     
    $correo=$_POST['correo-login'];
    $clave=md5($_POST['clave-login']);
    
     
    if(!$correo=="" && !$clave==""){
       
        $verAfil=ejecutarSQL::consultar("SELECT `usuarios`.*, `usuarios`.`correo`, `usuarios`.`pass`
        FROM `usuarios`
        WHERE `usuarios`.`correo` = '$correo' AND `usuarios`.`pass` = '$clave';");
        
              $AfilC=mysqli_num_rows($verAfil);
            if($AfilC==1){
                while ($h=mysqli_fetch_array($verAfil)) {
                    $nombre=$h['nombre'];
                    
                }
                $_SESSION['cliente']=$nombre;
                $_SESSION['correo']=$correo;
                $_SESSION['tel']=$tel;
                $_SESSION['doc']=$doc;
                $_SESSION['razon']=$razon;
                $_SESSION['tipo']=$tipo;
                $_SESSION['correo']=$correo;
               echo '<script> location.href="../clientes.php"; </script>';
            }else{
              echo '<script> alert("Usuario Incorrecto"); location.href="../index.php"; </script>'; 
            }
       
        
    }
    else{
        echo '<script> alert("Campos Vacios"); location.href="../index.php";</script>'; 
        }
	
