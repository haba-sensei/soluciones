<?php
session_start();
require '../../library/configServer.php';
require '../../library/consulSQL.php';

$request=$_REQUEST;

$col =array( 
0   =>  'CodigoProd',
1   =>  'NombreProd',
2   =>  'CodigoCat',
3   =>  'Precio',
4   =>  'Compra',
5   =>  'Modelo',
6   =>  'Marca',
7  =>  'Peso',
8   =>  'Stock',
9   =>  'Simbolo',
10   =>  'Detalle',
11  =>  'Venta',
12  =>  'TecDetalle',
13   =>  'Descuento',
14  =>  'nro_cot',
15  =>  'Imagen',
16  =>  'codigoBarras',
17   =>  'unidadMedida' 

);  //create column like table in database

$sql ="SELECT * FROM producto WHERE Stock >= '1' ";
$query=mysqli_query($conn,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM producto WHERE Stock >= '1' ";
if(!empty($request['search']['value'])){  
$sql.=" AND (CodigoProd Like '".$request['search']['value']."%' ";
$sql.=" OR NombreProd Like '".$request['search']['value']."%' ";
$sql.=" OR Marca Like '".$request['search']['value']."%' ";
$sql.=" OR codigoBarras Like '".$request['search']['value']."%' ";
$sql.=" OR Modelo Like '".$request['search']['value']."%' )"; 
}
$query=mysqli_query($conn,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
$request['start']."  ,".$request['length']."  ";

$query=mysqli_query($conn,$sql);

$data=array();

$CodArea = $_SESSION['CodigoArea'];
while($row=mysqli_fetch_array($query)){
$subdata=array();
$subdata[]='<img src=../assets/img-products/'.$row[15].' width="50" height="50" />'; //id
$subdata[]=$row[0]; //cod_prod
$subdata[]=$row[1]; //nombre
$subdata[]=$row[5]; //modelo    
$subdata[]=$row[6]; //marca   
$total_dolar = $row[4];//Compra
$total_sol = $row[4] * $globalTasaCambio_dolar;//Compra
switch ($CodArea) { //Compra
    case 1: 
        $subdata[]= '$ '.$total_dolar.'<br>'.'S/  '.$total_sol;
    break;

    case 2: 
        $subdata[]= '$ '.$total_dolar.'<br>'.'S/  '.$total_sol;
    break;

    case 3: 
        $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

    case 4: 
            $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

    case 5: 
            $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

    case 6: 
            $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

}
$total_dolar = $row[3];//Venta
$total_sol = $row[3] * $globalTasaCambio_dolar;//Venta
switch ($CodArea) { //Venta
    case 1: 
        $subdata[]= '$ '.$total_dolar.'<br>'.'S/  '.$total_sol;
    break;

    case 2: 
        $subdata[]= '$ '.$total_dolar.'<br>'.'S/  '.$total_sol;
    break;

    case 3: 
        $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

    case 4: 
            $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

    case 5: 
            $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

    case 6: 
            $subdata[]= ' <span style="text-align: center;"> - - - - - -</span>';
    break;

}
switch ($CodArea) {//Opciones

    case 1: 
        $subdata[] = " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='updateInventario.php?CodigoProd=".$row[0]."'> <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' onclick='return confirm('estas seguro de eliminar?');' href='delprod.php?CodigoProd=".$row[0]."'> <i style='color:#FFF' class='fa fa-trash'></i>  </a>";
    break;

    case 2: 
        $subdata[] = " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='updateInventario.php?CodigoProd=".$row[0]."'> <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' onclick='return confirm('estas seguro de eliminar?');' href='delprod.php?CodigoProd=".$row[0]."'> <i style='color:#FFF' class='fa fa-trash'></i>  </a>";
    break;

    case 3: 
        $subdata[] = " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='javascript:' > <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' href='javascript:' > <i style='color:#FFF' class='fa fa-trash'></i>  </a>";
    break;

    case 4: 
        $subdata[] = " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='javascript:' > <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' href='javascript:' > <i style='color:#FFF' class='fa fa-trash'></i>  </a>";
    break;

    case 5: 
        $subdata[] = " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='javascript:' > <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' href='javascript:' > <i style='color:#FFF' class='fa fa-trash'></i>  </a>";
    break;

    case 6: 
        $subdata[] = " <a data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-primary '  href='javascript:' > <i style='color:#FFF' class='fa fa-edit'></i>  </a><a data-toggle='tooltip' data-placement='top' title='Eliminar' class='btn btn-danger ' href='javascript:' > <i style='color:#FFF' class='fa fa-trash'></i>  </a>";
    break;

} 
$subdata[]=$row[10]; //detalle
$subdata[]=$row[2]; //categoria
$subdata[]=$row[8]; //stock
$subdata[]=$row[7]; //peso
$subdata[]=$row[16]; //codigoBarras
$subdata[]=$row[17]; //unitMedida
$data[]=$subdata;
}

$json_data=array(
"draw"              =>  intval($request['draw']),
"recordsTotal"      =>  intval($totalData),
"recordsFiltered"   =>  intval($totalFilter),
"data"              =>  $data
);

echo json_encode($json_data);
 
?>