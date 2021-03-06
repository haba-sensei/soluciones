<?php 

$pUP=  ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`, `cotizacion_online`.`ID`, `clientes`.`NombreEmpresa`, `clientes`.`Telefono`, `clientes`.`Correo` FROM `cotizacion_online` LEFT JOIN `clientes` ON `cotizacion_online`.`ID` = `clientes`.`ID` WHERE ((`cotizacion_online`.`id_cotizacion` ='$NumPedido') )");
while($fila=mysqli_fetch_array($pUP)){
     echo ' 
<form method="post" action="process/updatePedido.php" id="res-update-pedido-'.$fila['id_cotizacion'].'">

<div id="update-pedido" class="col-md-12" style="background:#bf5c01!important;">

   <label class="col-md-2">Nº de Orden</label>
 <label class="col-md-3">Razon Social</label>
 <label class="col-md-2">Ruc / Dni</label>
 <label class="col-md-2">Nº de Celular </label>
 <label class="col-md-2">Correo</label>

</div>

<div  class="col-md-12" >

   <label class="col-md-2">'.$fila['id_cotizacion'].'</label>
 <label class="col-md-3">'.$fila['NombreEmpresa'].'</label>
 <label class="col-md-2">'.$fila['ID'].'</label>
 <label class="col-md-2">'.$fila['Telefono'].'</label>
 <label class="col-md-2">'.$fila['Correo'].'</label>

</div>

'; } ?>
<?php
$NumPedido=$_GET['id_cotizacion'];
$con= ejecutarSQL::consultar("SELECT `detalle_cotizacion_online`.*, `detalle_cotizacion_online`.`id_cotizacion`
FROM `detalle_cotizacion_online`
WHERE `detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido';");
$stock = mysqli_num_rows($con); 

$pUP2= ejecutarSQL::consultar("SELECT `cotizacion_online`.*, `cotizacion_online`.`id_cotizacion`
FROM `cotizacion_online`
WHERE `cotizacion_online`.`id_cotizacion` = '$NumPedido';");
while($fila2=mysqli_fetch_array($pUP2)){
//print_r($stock);


?>
<div class="col-md-12" style="      margin-top: 18px;
padding-left: 0;
padding-right: 0;  " >
<?php 
if ($type == "pedido"){
$name_string = "PEDIDO";
$color_string = "background:#006cff!important";
}else {
$name_string = "COTIZACION";
$color_string = "background:red!important";
}


?>
     <div class="panel panel-default">
         <div class="panel-heading " style="<?=$color_string?>">
             <h3 class="panel-title">
             <span> <?=$name_string ?> </span>
               </h3>
            <div class="pull-right">

            <?php 
          if($type == "cotizacion"){
             ?>
             <span style="    position: relative; top: -22px; right: -12px; background: #1e2125; padding: 8px;  font-size: 18px; cursor: pointer;">
            <buttom type="button" data-toggle="modal" data-target="#exampleModal" > <i class="fas fa-check "></i> Aprobar Cotizacion</buttom>
            </span>
            
            <?php }
          else {
              
          }  
            ?>
            
            <span style="      position: relative; top: -22px; right: -15px;  background: #1e2125;  padding: 8px;  font-size: 18px; cursor: pointer; padding-right: 24px; border-right: solid 3px #006cff;">
            <buttom type="button" > <i class="fas fa-print "></i> Imprimir </buttom>
            </span>
            <span style="    position: relative; top: -22px; right: -15px; background: #1e2125; padding: 8px;  font-size: 18px; cursor: pointer;">
            <buttom type="button" data-toggle="modal" data-target="#exampleModal" > <i class="fas fa-plus "></i> Agregar Producto</buttom>
            </span>
             
            <div id="res-update-pedido-<?php echo $NumPedido ?>"></div>
           </div>
          
            
         </div>
         
         <div class="panel-body" >
         
         <table class="table table-bordered ">
<thead>
     <tr>
      
       <th>Articulos </th>
       <th>Cantidad</th>
       <th>SubTotal</th>
        <th>Opciones</th>
     </tr>
   </thead>
<tbody>

<?php 

$NumPedido=$_GET['id_cotizacion'];
$conFact= ejecutarSQL::consultar("SELECT
`detalle_cotizacion_online`.*,
`detalle_cotizacion_online`.`id_cotizacion`,
`producto`.`CodigoProd`,
`producto`.*,
`cotizacion_online`.`id_cotizacion`
FROM
`detalle_cotizacion_online`,
`producto`,
`cotizacion_online`
WHERE
`detalle_cotizacion_online`.`id_cotizacion` = '$NumPedido' AND `producto`.`CodigoProd` = `detalle_cotizacion_online`.`CodigoProd` AND `cotizacion_online`.`id_cotizacion` = `detalle_cotizacion_online`.`id_cotizacion`;");
while ($fila=mysqli_fetch_array($conFact)){
echo '		<tr>
      
       <td>'.$fila['NombreProd'].'</td>
     
       <td style="    display: inline-flex;
       width: -webkit-fill-available;">'.$fila['Cantidad'].'
       
       <div align="right" style="    position: relative; left: 17vh;">
       <a data-toggle="tooltip" data-placement="top" title="Agregar " class="btn btn-success btn-sm"  href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"> <i class="fa fa-plus"></i> </a>
       <a data-toggle="tooltip" data-placement="top" title="Restar " class="btn btn-danger btn-sm"  href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"> <i class="fa fa-minus"></i> </a> 
      
       </div>
       </td>
       <td>'.$fila['Precio'].'</td>
       <td class="text-center">
       <a data-toggle="tooltip" data-placement="top" title="Ver Producto" class="btn btn-primary btn-sm"  href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"> <i class="fa fa-eye"></i></a> 
       <a data-toggle="tooltip" data-placement="top" title="Quitar Producto" class="btn btn-danger btn-sm"  href="../infoProd.php?CodigoProd='.$fila['CodigoProd'].'"> <i class="fa fa-times"></i> </a>
       </td>
     </tr>


         
</tbody>


';



}  


//print_r($upp);
echo '	</table>	


 
</div> 
<div align="right" class="col-md-12" style="    padding-top: 21px;
padding-bottom: 25px;
'.$color_string.';
font-size: 22px;
font-weight: 600;">
Importe Total: S/ '.$fila2['GranTotal'].'

</div> 

</form>	';
?> 


<?php } ?>	