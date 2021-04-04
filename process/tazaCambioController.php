<?php 
include '../library/configServer.php';
include '../library/consulSQL.php';

        $tazaCambio =$_POST['tazaCambio'];  

     consultasSQL::UpdateSQL("taza_cambio", "taza='$tazaCambio' ", "id='1'");
 