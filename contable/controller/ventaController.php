<?php 
	session_start();
    include '../php/configServer.php';
	 
    date_default_timezone_set("America/Lima");
    //extraemos la fecha usando la funcion date 
    // d: dia
    // m: mes
    // Y: ańo en cuatro dígitos
    $mes = date("m"); 
    $year = date("Y");
    $mes_actual= date("m");

    class TableData { 
        private $_db;
        public function __construct() {
           try {			
               $host		= SERVER;
               $database	= BD;
               $user		= USER;
               $passwd		= PASS;
               
               $this->_db = new PDO('mysql:host='.$host.';dbname='.$database, $user, $passwd, array(
                   PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
           } catch (PDOException $e) {
               error_log("Failed to connect to database: ".$e->getMessage());
           }				
       }	
   
   
       
       public function get($table, $index_column, $columns, $fecha_filtro) {
        
            $numAnual = strftime("%Y", strtotime($fecha_filtro));  
            $numMes_format = date("m", strtotime($fecha_filtro)); 
            
           // Paging
           $sLimit = "";
           if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ) {
               $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".intval( $_GET['iDisplayLength'] );
           }
           
           // Ordering
           $sOrder = "";
           if ( isset( $_GET['iSortCol_0'] ) ) {
               $sOrder = "ORDER BY  ";
               for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ) {
                   if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ) {
                       $sortDir = (strcasecmp($_GET['sSortDir_'.$i], 'ASC') == 0) ? 'ASC' : 'DESC';
                       $sOrder .= "`".$columns[ intval( $_GET['iSortCol_'.$i] ) ]."` ". $sortDir .", ";
                   }
               }
               
               $sOrder = substr_replace( $sOrder, "", -2 );
               if ( $sOrder == "ORDER BY" ) {
                   $sOrder = "";
               }
           }
           
           /* 
            * Filtering
            * NOTE this does not match the built-in DataTables filtering which does it
            * word by word on any field. It's possible to do here, but concerned about efficiency
            * on very large tables, and MySQL's regex functionality is very limited
            */
           $sWhere = "";
            if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
                
               $sWhere = "WHERE (";
               for ( $i=0 ; $i<count($columns) ; $i++ ) {
                   if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" ) {
                       $sWhere .= "`".$columns[$i]."` LIKE :search OR ";
                   }
               }
               $sWhere = substr_replace( $sWhere, "", -3 );
               $sWhere .= ')';
               
           }
           
           // Individual column filtering
           for ( $i=0 ; $i<count($columns) ; $i++ ) {
               if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ) {
                   if ( $sWhere == "" ) {
                       $sWhere = "WHERE ";
                   }
                   else {
                       $sWhere .= " AND ";
                   }
                   $sWhere .= "`".$columns[$i]."` LIKE :search".$i." ";
               }
           }
            
           // SQL queries get data to display
           $sQuery = "SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $columns))."` FROM `".$table."`  ".$sWhere." ".$sOrder." ".$sLimit;
           $statement = $this->_db->prepare($sQuery);
           
           // Bind parameters
           if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
               $statement->bindValue(':search', '%'.$_GET['sSearch'].'%', PDO::PARAM_STR);
           }
           for ( $i=0 ; $i<count($columns) ; $i++ ) {
               if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ) {
                   $statement->bindValue(':search'.$i, '%'.$_GET['sSearch_'.$i].'%', PDO::PARAM_STR);
               }
           }
   
           $statement->execute();
           $rResult = $statement->fetchAll();
           $iFilteredTotal = current($this->_db->query('SELECT FOUND_ROWS()')->fetch()) ;
           
           
           // Get total number of rows in table
           $sQuery = "SELECT COUNT(`".$index_column."`) FROM `".$table."`";
           $iTotal = current($this->_db->query($sQuery)->fetch());

           $conta = "SELECT COUNT(`".$index_column."`) FROM `".$table."` WHERE MONTH(fecha_emision) = $numMes_format AND YEAR(fecha_emision) = $numAnual";
           $contador  = current($this->_db->query($conta)->fetch());

           

           $totalR =  $contador ;
           $totalF = $contador;
           // Output
           $output = array(
               "sEcho" => intval($_GET['sEcho']),
               "iTotalRecords" =>  $totalR,
               "iTotalDisplayRecords" =>  $totalF,
               "aaData" => array()
           );
           
           
           
           // Return array of values
           foreach($rResult as $aRow) {
               $row = array();	
                       
               for ( $i = 0; $i < count($columns); $i++ ) {
                   if ( $columns[$i] == "version" ) {
                       // Special output formatting for 'version' column
                       $row[] = ($aRow[ $columns[$i] ]=="0") ? '-' : $aRow[ $columns[$i] ];
                   }
                   else if ( $columns[$i] != ' ' ) {
                       $row[] = $aRow[ $columns[$i] ];
                   }
   
                    
               }
               
   
            //    $addQuery = "SELECT `categoria`.*, `categoria`.`CodigoCat` FROM `categoria` WHERE `categoria`.`CodigoCat` = '$row[9]'";
            //    $statement2 = $this->_db->prepare($addQuery);
            //    $statement2->execute();
            //    $addResult = $statement2->fetchAll();
               
            //    foreach ($addResult as $key2) {
            //        // array_replace($row, array(9 => $key2['Nombre']));
   
            //        array_push($row, $key2['Nombre']);
            //    }

            $numAnual_f = strftime("%Y", strtotime($row[5]));  
            $numMes_format_f = date("m", strtotime($row[5])); 


                if ($numAnual_f == $numAnual && $numMes_format_f == $numMes_format) {
                    $output['aaData'][] = $row;
                }else{ 
                   
                }
                
              
               
               
               
           }
          
           
          
           echo json_encode( $output );
       }
       
   }
   header('Pragma: no-cache');
   header('Cache-Control: no-store, no-cache, must-revalidate');
   // Create instance of TableData class
   $table_data = new TableData();
    
//    $table_data->get('ventas','id',array(
//                               'num_comprobante',
//                               'tipo_comprobante', 
//                               'ruc',
//                               'razon_social',
//                               'dir_fiscal',
//                               'fecha_emision',
//                               'descripcion',
//                               'por_concepto',
//                               'moneda',
//                               'tipo_pago',
//                               'estado_sunat',
//                               'estado_cpe',
//                               'monto_total',
//                               'id'
                               
//                             ), '2021-01-30');
   ?>