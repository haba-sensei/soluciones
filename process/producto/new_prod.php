<?php
session_start();
require '../../library/configServer.php';
require '../../library/consulSQL.php';

$request=$_REQUEST;
$num_pedido = $_SESSION['numero_orden'];

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

$sql ="SELECT * FROM producto ";
$query=mysqli_query($conn,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM producto WHERE 1=1 ";
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
$subdata[]=  $row[8]; //stock
$total_dolar = $row[3];//Precio
$total_sol = $row[3] * $globalTasaCambio_dolar;//Precio
switch ($CodArea) { //Precio
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
$subdata[] = " <button class='btn btn-new btn-block ' style='margin-top: 8px;' onclick='AddProdNew(&quot;".$row[0]."&quot; , &quot;".$num_pedido."&quot;)'><i class='fas fa-plus fa-fw'></i> AGREGAR </button>";
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

 
 