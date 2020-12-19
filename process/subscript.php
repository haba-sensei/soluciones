<?php
    session_start();
    
    include '../library/configServer.php';
    include '../library/consulSQL.php';

     
    $correo=$_POST['correo-subs'];
    
    
     
    if(!$correo==""){
      
        $verSubs=ejecutarSQL::consultar("SELECT `suscripcion`.*, `suscripcion`.`correo`
        FROM `suscripcion`
        WHERE `suscripcion`.`correo` = '$correo';");
        
              $SubsC=mysqli_num_rows($verSubs);
            if($SubsC==0){
                $regSubs = consultasSQL::InsertSQL("suscripcion", "correo", "'$correo'"); 
                 
                echo '<script> alert("Subscrito Exitoso"); location.href="../index.php";</script>';
            }else{
              echo '<script> alert("Correo Existente intente con otro"); location.href="../index.php";</script>'; 
            }
       
        
    }
    else{
        echo '<script> alert("Campos Vacios"); location.href="../index.php";</script>'; 
        }
	
