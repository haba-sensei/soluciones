<?php
session_start(); 
unset($_SESSION["products"]);
header("Location: ../view_cart.php"); 
?> 
