<?php

switch ($_SESSION['CodigoArea']) {
    case 1:
        echo ' <span style="text-transform: capitalize;">'.$_SESSION['NombreAfil'].'</span><small>Modulo de Administración</small>';
        break;
    case 2:
        echo ' <span style="text-transform: capitalize;">'.$_SESSION['NombreAfil'].'</span><small>Modulo de Almacen</small>';
        break;
    case 3:
        echo ' <span style="text-transform: capitalize;">'.$_SESSION['NombreAfil'].'</span><small>Modulo de Consultas</small>';
        break;
    case 4:
        echo ' <span style="text-transform: capitalize;">'.$_SESSION['NombreAfil'].'</span><small>Modulo de Comprobantes Admin</small>';
    break;

    case 5:
        echo ' <span style="text-transform: capitalize;">'.$_SESSION['NombreAfil'].'</span><small>Modulo de Comprobantes Simples</small>';
    break;

    case 6:
        echo ' <span style="text-transform: capitalize;">'.$_SESSION['NombreAfil'].'</span><small>Modulo de Delivery</small>';
    break;

    
    default:
        header("Location: ../login.php");
        exit();
        break;
}
?>