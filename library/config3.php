<?php
error_reporting(E_PARSE);
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysqli:host=localhost;dbname=nvoavpfg_bd', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 12;
$page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 1;
$query = "SELECT * from producto where Venta > 0 ";
//ORDER BY RAND(); <--- productos aleatorios
require_once 'paginator.class.php';
$paginator  = new Paginator($dbh, $query);
$results    = $paginator->getData($limit, $page);
?>
