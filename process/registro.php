<?php
    session_start();
    
    include '../library/configServer.php';
    include '../library/consulSQL.php';

    $nombre=$_POST['nombre-reg'];
    $correo=$_POST['correo-reg'];
    $tel=$_POST['tel-reg'];
    $doc=$_POST['doc-reg'];
    $razon=$_POST['razon-reg'];
    $tipo=$_POST['tipo_radio'];
    $clave=md5($_POST['clave-reg']);
    
     
    if(!$correo=="" && !$clave==""){
      
        $verAfil=ejecutarSQL::consultar("SELECT `usuarios`.*, `usuarios`.`correo` FROM `usuarios` WHERE `usuarios`.`correo` = '$correo' ");
        
              $AfilC=mysqli_num_rows($verAfil);
            if($AfilC==0){
                $regAfil = consultasSQL::InsertSQL("usuarios", "nombre, correo, doc, razon, tel, tipo, pass", "'$nombre', '$correo', '$doc', '$razon', '$tel', '$tipo', '$clave' "); 
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
	
