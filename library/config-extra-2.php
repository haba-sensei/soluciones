<?php
$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         
         
         
         
         $rec_limit = 24;
         $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($dbhost,  $dbuser,  $dbpass));
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
         mysqli_select_db($GLOBALS["___mysqli_ston"], 'nvoavpfg_bd');
         
         /* Get total number of records */
         $sql = "SELECT count(CodigoProd) FROM producto where CodigoCat = 'C000002'  ";
         $rev3 = mysqli_query( $conn ,  $sql);
         //~ WHERE CodigoCat = '$CodProd'
        
         
      
         
         if(! $rev3 ) {
            die('Could not get data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
         $row3 = mysqli_fetch_array($rev3,  MYSQLI_NUM );
         $rec_count = $row3[0];
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $otro=($page * $rec_limit);
         $sql = "SELECT `producto`.*, `perfil`.*, `producto`.`CodigoCat` FROM `producto`, `perfil` WHERE `producto`.`CodigoCat` = 'C000002'".
            "LIMIT $offset, $rec_limit";
            
         $rev3 = mysqli_query( $conn ,  $sql);
         
         if(! $rev3 ) {
            die('Could not get data: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
         }
?>
