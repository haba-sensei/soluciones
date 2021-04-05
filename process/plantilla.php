<?php
	
	require '../fpdf/fpdf.php';
	require '../library/conexion.php';
   
	
	
	class PDF_Invoice extends FPDF
	{
		var $colonnes;
		var $format;
		var $angle=0;
		function Header()
		{
			date_default_timezone_set('America/Lima');
			/*$this->Image('images/logo.png', 10, 10, 20 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10,utf8_decode('Cotización'),0,0,'C');
			$this->Ln(10);
			$this->Cell(180,10, 'Almacen',0,0,'C');*/
			$this->Ln(10);
			$this->SetFont('Arial','',10);
			//$this->Cell(0,10,date('d-m-Y H:i:s'),0,1,'R');
			//$this->Ln(10);
			
			
		}
		
	function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','', 6);
			$this->Cell(0,2, utf8_decode("NOTA: UNA VES SALIDA LA MERCADERÍA NO SE ACEPTAN CAMBIOS NI DEVOLUCIONES, SALVO POR FALLAS O DEFECTOS DE FABRICACIÓN, PREVIA REVISION TECNICA."),0,2,'C' );
			$this->Cell(0,2, utf8_decode("1 AÑO DE GARANTIA EN SU PRODUCTO,TAMBIEN VISITANOS A NUESTRAS DIFERENTES TIENDAS Y PIDA SU COTIZACION ATENTAMENTE SOLUCIONES."),0,2,'C' );
			
			$this->SetY(-5);
			$this->Cell(0,2, 'Paginas '.$this->PageNo().'/{nb}',0,1,'C' );
			
			
		}	
		function addSociete( $nom, $adresse )
		{
			$x1 = 37;
			$y1 = 11;
			//Positionnement en bas
			$this->SetXY( $x1, $y1 );
			$this->SetFont('Arial','B',10);
			$length = $this->GetStringWidth( $nom );
			$this->Cell( $length, 2, $nom);
			$this->SetXY( $x1, $y1 + 4 );
			$this->SetFont('Arial','',8);
			$length = $this->GetStringWidth( $adresse );
			//Coordonnées de la société

			$this->MultiCell($length, 5, $adresse);
		}	
		
		
		
function addSociete2( $nom, $adresse )
		{
			$x1 = 10;
			$y1 = 37;
			//Positionnement en bas
			$this->SetXY( $x1, $y1 );
			$this->SetFont('Arial','B',10);
			$length = $this->GetStringWidth( $nom );
			$this->Cell( $length, 2, $nom);
			$this->SetXY( $x1, $y1 + 4 );
			$this->SetFont('Arial','',8);
			$length = $this->GetStringWidth( $adresse );
			//Coordonnées de la société

			$this->MultiCell($length, 4, $adresse);
			
		}		
		function fact_dev( $libelle, $num )   {
	
            
            $r1  = $this->w - 60;
            $r2  = $r1 + 50;
            $y1  = 10;
            $y2  = $y1 + 15;
            $mid = ($r1 + $r2 ) / 2;
            
            $texte  = $libelle . "  N- ".$num;    
            $szfont = 12;
            $loop   = 0;
            
            while ( $loop == 0 )
            {
            $this->SetFont( "Arial", "B", $szfont );
            $sz = $this->GetStringWidth( $texte );
            if ( ($r1+$sz) > $r2 )
                $szfont --;
            else
                $loop ++;
            }

            $this->SetLineWidth(0.1);
            $this->SetFillColor(255,255,255);
            $this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 2.5, 'DF');
            
            $this->SetXY( $r1+1, $y1+2);
            $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "C" );
        }
function fact_dev2( $libelle )
{
	
	
    $r1  = $this->w - 61;
    $r2  = $r1 + 51;
    $y1  = 18;
    $y2  = $y1 + 2;
    $mid = ($r1 + $r2 ) / 2;
    
    $texte  = $libelle;    
    $szfont = 12;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
		
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->SetFillColor(0, 0, 255); 
    $this->Cell($r2-$r1 -1,5, $texte, 1, 0, "C" );
}
function fact_dev2_1( $libelle )
{
	
	
    $r1  = $this->w - 80;
    $r2  = $r1 + 89;
    $y1  = 26;
    $y2  = $y1 + 2;
    $mid = ($r1 + $r2 ) / 2;
    
    $texte  = $libelle;    
    $szfont = 12;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "C" );
}
function fact_dev3( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 196;
    $y1  = 37;
    $y2  = $y1 - 4;
    $mid = ($r1 + $r2 ) / 2;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    $this->SetLineWidth(0.1);
    $this->SetFillColor(255,255,255);
    $this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 2.5, 'DF');
     $this->Line( $r1+146,  $y1+33, $r1+146, $y2+4); // linea derecha operaciones 
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1, 5, $texte, 0, 0, "L" );
}
function fact_dev4( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 42;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "L" );
}
function fact_dev5( $libelle, $num )
{
    $r1  = $this->w - 206;
    $r2  = $r1 - 150;
    $y1  = 47;
     
    
    $texte  = $libelle." ".$num;    
   
    
    $this->SetXY( $r1+1, $y1+2);
    $this->SetFont('Arial','B', 9);
    $length = $this->GetStringWidth( $texte );
    //Coordonnées de la société

    $this->MultiCell(145, 5, $texte, 0, 'L');

    
    // $this->SetXY( $r1+1, $y1+2);
    // // $this->Ln(10);
    // $this->Cell($r2-$r1 -1, 5, $texte, 0, 0, "L" );
    // $length = $this->GetStringWidth( $sz );
    //Coordonnées de la société

   
    
}
function fact_dev6( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 57;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $this->SetXY( $r1+1, $y1+2);
    $this->SetFont('Arial','B', 9);
    $length = $this->GetStringWidth( $texte );
    //Coordonnées de la société

    $this->MultiCell(145, 5, $texte, 0, 'L');
}

function fact_dev6_5( $libelle, $num )
{
	
	
    $r1  = $this->w - 173;
    $r2  = $r1 + 200;
    $y1  = 52;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "L" );
}

function fact_dev6_6( $libelle, $num )
{
	
	
    $r1  = $this->w - 136;
    $r2  = $r1 + 200;
    $y1  = 52;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "L" );
}
function fact_dev7( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 37;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "R" );
}
function fact_dev8( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 42;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "R" );
}
function fact_dev9( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 47;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "R" );
}
function fact_dev10( $libelle, $num )
{
	
	
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 52;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "R" );
}
function fact_dev11( $libelle, $num )
{
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 57;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;

    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "R" );
}

function fact_dev13( $libelle, $num )
{
    $r1  = $this->w - 206;
    $r2  = $r1 + 195;
    $y1  = 62;
    $y2  = $y1 - 3;
    $mid = ($r1 + $r2 ) / 4;
    
    $texte  = $libelle." ".$num;    
    $szfont = 9;
    $loop   = 0;

    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont );
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 -1,5, $texte, 0, 0, "R" );
}



function fact_dev12( $libelle, $num )
{
	$r1  = $this->w - 207;
    $r2  = $r1 + 120;
    $y1  = 199;
    $y2  = $y1 + 2;
    $mid = ($r1 + $r2 ) / 2;
    
    $texte  = $libelle . " ".$num;    
    $szfont = 16;
    $loop   = 0;
    
    while ( $loop == 0 )
    {
       $this->SetFont( "Arial", "B", $szfont);
       $sz = $this->GetStringWidth( $texte );
       if ( ($r1+$sz) > $r2 )
          $szfont --;
       else
          $loop ++;
    }

    //$this->SetLineWidth(0.1);
    $this->SetFillColor(255,255,255);
    //$this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 2.5, 'DF');
    $this->SetXY( $r1+1, $y1+2);
    $this->Cell($r2-$r1 +76,6, $texte, 1, 0, "L" );
}


function addCols( $tab )
{
    global $colonnes;
    
    $r1  = 10;
    $r2  = $this->w - ($r1 * 2) ;
    $y1  = 75;
    $y2  = $this->h - 80 - $y1;
    $this->SetXY( $r1, $y1 );
    $this->Rect( $r1, $y1, $r2, $y2, "D");
    $this->Line( $r1, $y1+6, $r1+$r2, $y1+6);
    $colX = $r1;
    $colonnes = $tab;
    
    foreach($tab as $lib => $pos) 
    
    {
        $this->SetXY( $colX, $y1+2 );
        $this->Cell( $pos, 1, $lib, 0, 0, "C");
        $colX += $pos;
        $this->Line( $colX, $y1, $colX, $y1+$y2);
    }
}

function addLineFormat( $tab )
{
    global $format, $colonnes;
     foreach($colonnes as $lib => $pos) 
    {
        if ( isset( $tab["$lib"] ) )
            $format[ $lib ] = $tab["$lib"];
    }
}	
		
		function addLine( $ligne, $tab )
{
    global $colonnes, $format;

    $ordonnee     = 10;
    $maxSize      = $ligne;

    reset( $colonnes );
    foreach($colonnes as $lib => $pos) 
    {
        $longCell  = $pos -2;
        $texte     = $tab[ $lib ];
        $length    = $this->GetStringWidth( $texte );
        $tailleTexte = $this->sizeOfText( $texte, $length );
        $formText  = $format[ $lib ];
        $this->SetXY( $ordonnee, $ligne-1);
        $this->MultiCell( $longCell, 4 , $texte, 0, $formText);
        if ( $maxSize < ($this->GetY()  ) )
            $maxSize = $this->GetY() ;
        $ordonnee += $pos;
    }
    return ( $maxSize - $ligne );
}
		function sizeOfText( $texte, $largeur )
{
    $index    = 0;
    $nb_lines = 0;
    $loop     = TRUE;
    while ( $loop )
    {
        $pos = strpos($texte, "\n");
        if (!$pos)
        {
            $loop  = FALSE;
            $ligne = $texte;
        }
        else
        {
            $ligne  = substr( $texte, $index, $pos);
            $texte = substr( $texte, $pos+1 );
        }
        $length = floor( $this->GetStringWidth( $ligne ) );
        $res = 1 + floor( $length / $largeur) ;
        $nb_lines += $res;
    }
    return $nb_lines;
}



function RoundedRect($x, $y, $w, $h, $r, $style = '')
{
    $k = $this->k;
    $hp = $this->h;
    if($style=='F')
        $op='f';
    elseif($style=='FD' || $style=='DF')
        $op='B';
    else
        $op='S';
    $MyArc = 4/3 * (sqrt(2) - 1);
    $this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));
    $xc = $x+$w-$r ;
    $yc = $y+$r;
    $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));

    $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
    $xc = $x+$w-$r ;
    $yc = $y+$h-$r;
    $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
    $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
    $xc = $x+$r ;
    $yc = $y+$h-$r;
    $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
    $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
    $xc = $x+$r ;
    $yc = $y+$r;
    $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
    $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
    $this->_out($op);
}

function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
{
    $h = $this->h;
    $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
                        $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
}

function Rotate($angle, $x=-1, $y=-1)
{
    if($x==-1)
        $x=$this->x;
    if($y==-1)
        $y=$this->y;
    if($this->angle!=0)
        $this->_out('Q');
    $this->angle=$angle;
    if($angle!=0)
    {
        $angle*=M_PI/180;
        $c=cos($angle);
        $s=sin($angle);
        $cx=$x*$this->k;
        $cy=($this->h-$y)*$this->k;
        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
    }
}
function temporaire( $texte )
{
    $this->SetFont('Arial','B',30);
    $this->SetTextColor(203,203,203);
    $this->Rotate(45,150,190);
    $this->Text(70,120,$texte);
    $this->Rotate(0);
    $this->SetTextColor(0,0,0);
}
		
	function Code39($x, $y, $code, $ext = true, $cks = false, $w = 0.3, $h = 9, $wide = true) {

    //Display code
    $this->SetFont('Arial', 'B', 10);
    $this->SetFillColor(26,26,26);
    //$this->Text($x, $y+$h+4, $code);

    if($ext) {
        //Extended encoding
        $code = $this->encode_code39_ext($code);
    }
    else {
        //Convert to upper case
        $code = strtoupper($code);
        //Check validity
        if(!preg_match('|^[0-9A-Z. $/+%-]*$|', $code))
            $this->Error('Invalid barcode value: '.$code);
    }

    //Compute checksum
    if ($cks)
        $code .= $this->checksum_code39($code);

    //Add start and stop characters
    $code = '*'.$code.'*';

    //Conversion tables
    $narrow_encoding = array (
        '0' => '101001101101', '1' => '110100101011', '2' => '101100101011',
        '3' => '110110010101', '4' => '101001101011', '5' => '110100110101',
        '6' => '101100110101', '7' => '101001011011', '8' => '110100101101',
        '9' => '101100101101', 'A' => '110101001011', 'B' => '101101001011',
        'C' => '110110100101', 'D' => '101011001011', 'E' => '110101100101',
        'F' => '101101100101', 'G' => '101010011011', 'H' => '110101001101',
        'I' => '101101001101', 'J' => '101011001101', 'K' => '110101010011',
        'L' => '101101010011', 'M' => '110110101001', 'N' => '101011010011',
        'O' => '110101101001', 'P' => '101101101001', 'Q' => '101010110011',
        'R' => '110101011001', 'S' => '101101011001', 'T' => '101011011001',
        'U' => '110010101011', 'V' => '100110101011', 'W' => '110011010101',
        'X' => '100101101011', 'Y' => '110010110101', 'Z' => '100110110101',
        '-' => '100101011011', '.' => '110010101101', ' ' => '100110101101',
        '*' => '100101101101', '$' => '100100100101', '/' => '100100101001',
        '+' => '100101001001', '%' => '101001001001' );

    $wide_encoding = array (
        '0' => '101000111011101', '1' => '111010001010111', '2' => '101110001010111',
        '3' => '111011100010101', '4' => '101000111010111', '5' => '111010001110101',
        '6' => '101110001110101', '7' => '101000101110111', '8' => '111010001011101',
        '9' => '101110001011101', 'A' => '111010100010111', 'B' => '101110100010111',
        'C' => '111011101000101', 'D' => '101011100010111', 'E' => '111010111000101',
        'F' => '101110111000101', 'G' => '101010001110111', 'H' => '111010100011101',
        'I' => '101110100011101', 'J' => '101011100011101', 'K' => '111010101000111',
        'L' => '101110101000111', 'M' => '111011101010001', 'N' => '101011101000111',
        'O' => '111010111010001', 'P' => '101110111010001', 'Q' => '101010111000111',
        'R' => '111010101110001', 'S' => '101110101110001', 'T' => '101011101110001',
        'U' => '111000101010111', 'V' => '100011101010111', 'W' => '111000111010101',
        'X' => '100010111010111', 'Y' => '111000101110101', 'Z' => '100011101110101',
        '-' => '100010101110111', '.' => '111000101011101', ' ' => '100011101011101',
        '*' => '100010111011101', '$' => '100010001000101', '/' => '100010001010001',
        '+' => '100010100010001', '%' => '101000100010001');

    $encoding = $wide ? $wide_encoding : $narrow_encoding;

    //Inter-character spacing
    $gap = ($w > 0.29) ? '00' : '0';

    //Convert to bars
    $encode = '';
    for ($i = 0; $i< strlen($code); $i++)
        $encode .= $encoding[$code[$i]].$gap;

    //Draw bars
    $this->draw_code39($encode, $x, $y, $w, $h);
}

function checksum_code39($code) {

    //Compute the modulo 43 checksum

    $chars = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
                            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K',
                            'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
                            'W', 'X', 'Y', 'Z', '-', '.', ' ', '$', '/', '+', '%');
    $sum = 0;
    for ($i=0 ; $i<strlen($code); $i++) {
        $a = array_keys($chars, $code[$i]);
        $sum += $a[0];
    }
    $r = $sum % 43;
    return $chars[$r];
}

function encode_code39_ext($code) {

    //Encode characters in extended mode

    $encode = array(
        chr(0) => '%U', chr(1) => '$A', chr(2) => '$B', chr(3) => '$C',
        chr(4) => '$D', chr(5) => '$E', chr(6) => '$F', chr(7) => '$G',
        chr(8) => '$H', chr(9) => '$I', chr(10) => '$J', chr(11) => '£K',
        chr(12) => '$L', chr(13) => '$M', chr(14) => '$N', chr(15) => '$O',
        chr(16) => '$P', chr(17) => '$Q', chr(18) => '$R', chr(19) => '$S',
        chr(20) => '$T', chr(21) => '$U', chr(22) => '$V', chr(23) => '$W',
        chr(24) => '$X', chr(25) => '$Y', chr(26) => '$Z', chr(27) => '%A',
        chr(28) => '%B', chr(29) => '%C', chr(30) => '%D', chr(31) => '%E',
        chr(32) => ' ', chr(33) => '/A', chr(34) => '/B', chr(35) => '/C',
        chr(36) => '/D', chr(37) => '/E', chr(38) => '/F', chr(39) => '/G',
        chr(40) => '/H', chr(41) => '/I', chr(42) => '/J', chr(43) => '/K',
        chr(44) => '/L', chr(45) => '-', chr(46) => '.', chr(47) => '/O',
        chr(48) => '0', chr(49) => '1', chr(50) => '2', chr(51) => '3',
        chr(52) => '4', chr(53) => '5', chr(54) => '6', chr(55) => '7',
        chr(56) => '8', chr(57) => '9', chr(58) => '/Z', chr(59) => '%F',
        chr(60) => '%G', chr(61) => '%H', chr(62) => '%I', chr(63) => '%J',
        chr(64) => '%V', chr(65) => 'A', chr(66) => 'B', chr(67) => 'C',
        chr(68) => 'D', chr(69) => 'E', chr(70) => 'F', chr(71) => 'G',
        chr(72) => 'H', chr(73) => 'I', chr(74) => 'J', chr(75) => 'K',
        chr(76) => 'L', chr(77) => 'M', chr(78) => 'N', chr(79) => 'O',
        chr(80) => 'P', chr(81) => 'Q', chr(82) => 'R', chr(83) => 'S',
        chr(84) => 'T', chr(85) => 'U', chr(86) => 'V', chr(87) => 'W',
        chr(88) => 'X', chr(89) => 'Y', chr(90) => 'Z', chr(91) => '%K',
        chr(92) => '%L', chr(93) => '%M', chr(94) => '%N', chr(95) => '%O',
        chr(96) => '%W', chr(97) => '+A', chr(98) => '+B', chr(99) => '+C',
        chr(100) => '+D', chr(101) => '+E', chr(102) => '+F', chr(103) => '+G',
        chr(104) => '+H', chr(105) => '+I', chr(106) => '+J', chr(107) => '+K',
        chr(108) => '+L', chr(109) => '+M', chr(110) => '+N', chr(111) => '+O',
        chr(112) => '+P', chr(113) => '+Q', chr(114) => '+R', chr(115) => '+S',
        chr(116) => '+T', chr(117) => '+U', chr(118) => '+V', chr(119) => '+W',
        chr(120) => '+X', chr(121) => '+Y', chr(122) => '+Z', chr(123) => '%P',
        chr(124) => '%Q', chr(125) => '%R', chr(126) => '%S', chr(127) => '%T');

    $code_ext = '';
    for ($i = 0 ; $i<strlen($code); $i++) {
        if (ord($code[$i]) > 127)
            $this->Error('Invalid character: '.$code[$i]);
        $code_ext .= $encode[$code[$i]];
    }
    return $code_ext;
}

function draw_code39($code, $x, $y, $w, $h) {

    //Draw bars

    for($i=0; $i<strlen($code); $i++) {
        if($code[$i] == '1')
            $this->Rect($x+$i*$w, $y, $w, $h, 'F');
    }
}
	function addCadreEurosFrancs()
{
    $r1  = $this->w - 130;
    $r2  = $r1 + 120;
    $y1  = $this->h - 50;
    $y2  = $y1+30;
    $this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
    $this->Line( $r1+25,  $y1, $r1+25, $y2); // linea lado derecho emisor
    $this->Line( $r1, $y1+4, $r2, $y1+4); // linea debajo de los titulos
    $this->Line( $r1+70, $y1+20, $r2, $y1+20); // linea debajo de operacion de vuelto
    $this->Line( $r1+70,  $y1, $r1+70, $y2); // linea derecha forma de pago 
     $this->Line( $r1+90,  $y1, $r1+90, $y2); // linea derecha operaciones 
    
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+5, $y1 );
    $this->Cell(15,4, "Firma Emisor", 0, 0, "C");		
					
			
	//$session_id= $_SESSION['Nick_ve'];	
	$condiciones=1;	
	$i = 0;
	$nums=1;
	$sumador_total=0;
	$subtotal=0;
	$total_z=0;
	$sql=ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.*, `producto`.`nro_cot` FROM `producto`	, `perfil`;");
	foreach($_SESSION["products"] as $product){					
					$product_name = $product["NombreProd"]; 
					$product_price = $product["Precio"];
					$product_code = $product["CodigoProd"];
					$product_qty = $product["product_qty"];
					
					
					$ordenU=  ejecutarSQL::consultar("SELECT `producto`.*, `perfil`.*, `producto`.`nro_cot` FROM `producto`	, `perfil`;");
           
            while($ordenP=mysqli_fetch_array($ordenU)){
				
				$product_ganancia=$ordenP['ganancia'];
				$product_medio=$ordenP['medio'];
				$igv_final=$ordenP['impuesto'];
				}
				
				$product_price_total=($product_price);
				$subtotal = ($product_price_total * $product_qty);
				$total_z = $subtotal + $total_z;
				
				$igv= ($igv_final *  $total_z)/100;
				$total_final = ($total_z  + $igv);
	$i = $i + 1;
	$nums++;
	
	
	
	
	
	
    }
    
   
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+40, $y1 );
    $this->Cell(15,4, "FIRMA EMISOR", 0, 0, "C");
   
		
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+98, $y1+5 );
    $this->Cell(15,4,"S/ ".$total_z , 0, 0, "C");
     $this->SetXY( $r1+98, $y1+10 );
    $this->Cell(15,4, "S/ ".$igv, 0, 0, "C");
     $this->SetXY( $r1+98, $y1+15 );
    $this->Cell(15,4, "S/ ". $total_final, 0, 0, "C");
     $this->SetXY( $r1+98, $y1+20);
    $this->Cell(15,4, "S/ " /*$dinero*/, 0, 0, "C");
     $this->SetXY( $r1+98, $y1+25 );
    $this->Cell(15,4, "S/ " /*$vuelto*/, 0, 0, "C");
    
    
    
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+72, $y1 );
    $this->Cell(15,4, "Operaciones", 0, 0, "C");
    
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+98, $y1 );
    $this->Cell(15,4, "Moneda: Soles Pen", 0, 0, "C");
    
    
    
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+70, $y1+5 );
    $this->Cell(20,4, "SubTotal", 0, 0, "C");
    $this->SetXY( $r1+70, $y1+10 );
    $this->Cell(20,4, "IGV (18%)", 0, 0, "C");
    $this->SetXY( $r1+70, $y1+15 );
    $this->Cell(20,4, "Total", 0, 0, "C");
    $this->SetXY( $r1+70, $y1+20 );
    $this->Cell(20,4, "Acuenta", 0, 0, "C");
    $this->SetXY( $r1+70, $y1+25 );
    $this->Cell(20,4, "Saldo", 0, 0, "C");
}	
		
	function addCadreEurosFrancs2()
{
    $r1  = $this->w - 140;
    $r2  = $r1 + 60;
    $y1  = $this->h - 70;
    $y2  = $y1+45;
    $this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
    
    $this->Line( $r1, $y1+4, $r2, $y1+4); // linea debajo de los titulos
    $this->Line( $r1, $y1+30, $r2, $y1+30); // linea debajo de los titulos
    
    $this->SetFont( "Arial", "B", 8);
    $this->SetXY( $r1+23, $y1 );
    $this->Cell(15,4, "FIRMA Y SELLO", 0, 0, "C");
    $this->SetFont( "Arial", "", 7);		
	$this->SetXY( $r1+23, $y1+32 );
    $this->Cell(15,4, "Es una representacion impresa de la cotizacion ", 0, 0, "C");
    $this->SetXY( $r1+23, $y1+35 );
    $this->Cell(15,4, "electronica generada desde el modulo pre ventas", 0, 0, "C");
    $this->SetXY( $r1+23, $y1+38 );
    $this->Cell(15,4, "puede verificar utilizando su orden de cotizacion.", 0, 0, "C");
	}
	
	function addCadreEurosFrancs4()
{
    $r1  = $this->w - 206;
    $r2  = $r1 + 60;
    $y1  = $this->h - 50;
    $y2  = $y1+25;
    //$this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
    
    $this->Line( $r1, $y1+4, $r2-10, $y1+4); // linea debajo de los titulos
    
    
    $this->SetFont( "Arial", "B", 7);
    $this->SetXY( $r1-1, $y1 );
    $this->Cell(15,4, "TERMINOS DE USO", 0, 0, "L");		
	$this->SetFont( "Arial", "", 8);
	$this->SetXY( $r1-1, $y1+6 );
	$this->Cell(15,4, "* Aperturarse A la Tienda", 0, 0, "L");
    $this->SetXY( $r1-1, $y1+12 );
	$this->Cell(15,4, utf8_decode("* Presentar Su Cotización En Ventas"), 0, 0, "L");
    $this->SetXY( $r1-1, $y1+18 );
	$this->Cell(15,4, utf8_decode("* Cancelar El Importe Total De Cotizacion En Caja"), 0, 0, "L");
    $this->SetXY( $r1-1, $y1+24 );
	$this->Cell(15,4, utf8_decode("* Recoger Su Productos Cotizados En Almacen"), 0, 0, "L");
    	
	}
	function addCadreEurosFrancs3()
{
    $r1  = $this->w - 70;
    $r2  = $r1 + 60;
    $y1  = $this->h - 70;
    $y2  = $y1+45;
    $this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
    $this->Line( $r1+35,  $y1, $r1+35, $y2); // linea derecha operaciones 
    // $this->Line( $r1, $y1+30, $r2, $y1+30); // linea debajo de operacion de vuelto
        
    $this->SetFont( "Arial", "B", 12);
    $this->SetXY( $r1+4, $y1+4 );
    $this->Cell(15,4, utf8_decode("Subtotal "), 0, 0, "C");

    
    $F_pago = $_POST['F_pago'];
    switch ($F_pago) {
        case 'A Cuenta':

            $this->SetXY( $r1+4, $y1+12 );
            $this->Cell(15,4, utf8_decode("Igv 18% "), 0, 0, "C");

            $this->SetXY( $r1+4, $y1+21 );
            $this->Cell(15,4, utf8_decode("Delivery "), 0, 0, "C");
        
            $this->SetXY( $r1+5, $y1+29 );
            $this->Cell(15,4, utf8_decode("A cuenta "), 0, 0, "C");
        
            $this->SetXY( $r1+10, $y1+37 );
            $this->Cell(15,4, utf8_decode("Total de Venta "), 0, 0, "C");
            break;
        
        case 'Al Contado':

            $this->SetXY( $r1+4, $y1+15 );
            $this->Cell(15,4, utf8_decode("Igv 18% "), 0, 0, "C");            
        
            $this->SetXY( $r1+10, $y1+35 );
            $this->Cell(15,4, utf8_decode("Total de Venta "), 0, 0, "C");
        
            $this->SetXY( $r1+4.3, $y1+25 );
            $this->Cell(15,4, utf8_decode("Delivery "), 0, 0, "C");
            break;
        default:

            $this->SetXY( $r1+4, $y1+15 );
            $this->Cell(15,4, utf8_decode("Igv 18% "), 0, 0, "C");
              
            $this->SetXY( $r1+10, $y1+35 );
            $this->Cell(15,4, utf8_decode("Total de Venta "), 0, 0, "C");
        
            $this->SetXY( $r1+4.3, $y1+25 );
            $this->Cell(15,4, utf8_decode("Delivery "), 0, 0, "C");
            
            break;
    }


    

     

	$condiciones=1;	
	$i = 0;
	$nums=1;
	$sumador_total=0;
	$subtotal=0;
    $total=0;
    $total_final = 0;
    $cod = $_POST['CodCotiza'];
	$_cotizacion_1 = ejecutarSQL::consultar("select * from detalle_cotizacion_online where id_cotizacion='" . $cod . "'");

    $aSubmitVal = $_POST['operacion'];
    $Moneda_pago = $_POST['Moneda_pago'];
    
    switch ($aSubmitVal) {
        case 'cotizacion':
            $costo_adicional = 0.00;
            $F_pago = "Al Contado";
            break;
        case 'compra':
            switch ($Moneda_pago) {
                case 'soles':
                    $costo_adicional = $_POST['costo_adicional'];
                    $F_pago = $_POST['F_pago'];
                    break;
                
                    case 'dolares':
                        $costo_adicional = $_POST['costo_adicional'];
                        $F_pago = $_POST['F_pago'];
                        break;
            }
           
            break;
            
    }
     
    $taza_dia_cons = ejecutarSQL::consultar("SELECT `taza_cambio`.*, `taza_cambio`.`id` FROM `taza_cambio` WHERE `taza_cambio`.`id` = '1';");
       
    while($tazaC=mysqli_fetch_array($taza_dia_cons)){ 
    $compra_dolar=$tazaC['taza'];        
    }

    $globalTasaCambio_dolar = number_format($compra_dolar, 2);
     
	while($codProductosP1=mysqli_fetch_array($_cotizacion_1)){
		 
		$product_qty = $codProductosP1['Cantidad'];				
		$product_price = $codProductosP1['SubTotal'];
			
        $product_price_total=$product_price;
       
       

        switch ($Moneda_pago) {
        case 'soles':
            $subtotal = $product_price_total  * $globalTasaCambio_dolar;
            break;
            
        case 'dolares':
            $subtotal = $product_price_total;
            // $delivery_f = number_format($costo_adicional, 2);
            break;
    
        default:
            $subtotal = $product_price_total  * $globalTasaCambio_dolar;
            break;        
        }
        
        $total = $subtotal + $total;
        $total_indi =  str_replace(',', '',  $total );
        
        $total_indi_1 = number_format($total_indi , 2);
        $igv_format= $total_indi_1 - ($total_indi_1 * 0.18);
        $igv =   $total_indi_1 - $igv_format;
        $total_subtotal = number_format($igv_format, 2);
        $total_igv =  str_replace(',', '',  $igv );
        $igv = number_format($total_igv , 2);
        
        
        $i = $i + 1;
        $nums++;	
        $total_final =  $total_final + $subtotal;
        $total_venta_f =  number_format($total_final, 2);
        $total_venta_delivery =  number_format($total_final + $costo_adicional, 2);
       
    }
    
    switch ($F_pago) {
        case 'Al Contado':
            $a_cuenta = 0.00;
            break;
        
        case 'A Cuenta':
            $calc_cuenta =  str_replace(',', '',  $total_venta_f  );
            $a_cuenta_f = ($calc_cuenta * 0.40);
            $a_cuenta =  number_format($a_cuenta_f, 2);
            break;
    }

    

    $valor_final_con_acuenta = $total_venta_delivery - $a_cuenta;

    $calc =  str_replace(',', '', $valor_final_con_acuenta  );
    $otro = $calc  * 0.05 + $calc; 
    $total_tarjeta =  number_format($otro, 2);

   

    

    $total_dolares_f = $valor_final_con_acuenta / $globalTasaCambio_dolar; 
    $total_dolares_final =  number_format($total_dolares_f, 2);
   
    $calc_cuenta_dolares =  str_replace(',', '',  $total_dolares_final   );
    $a_cuenta_f_dolar = ($calc_cuenta_dolares * 0.40);
    $a_cuenta_dolar =  number_format($a_cuenta_f_dolar, 2);

    $valor_final_con_acuenta_dolares = $total_dolares_final - $a_cuenta_dolar;
    
	
	switch ($Moneda_pago) {
        case 'soles':
            $simbolo ="S/";
            $delivery_f = $costo_adicional;
            break;
        
            case 'dolares':
                $simbolo ="$";
                $delivery_f = number_format($costo_adicional / $globalTasaCambio_dolar, 2);
                break;

                default:
                    $simbolo ="S/";
                    $delivery_f = $costo_adicional;
                    break;        
    }
    $M_pago = $_POST['M_pago'];

    if($M_pago == "Tarjeta"){

        $total_tarjeta = ($total_venta_f * 0.05);


        $total_con_tarjeta =  $total_tarjeta;
    }else {

        $total_con_tarjeta = 0;
        
    }


    
	$this->SetXY( $r1+40, $y1+4 );
    $this->Cell(15,4, $simbolo." ".$total_subtotal, 0, 0, "C");
	
	

    switch ($F_pago) { 

        case 'A Cuenta':
            $oper = $total_venta_f - $a_cuenta + $delivery_f + $total_con_tarjeta;
            $this->SetXY( $r1+40, $y1+12 );
            $this->Cell(15,4, $simbolo." ".$igv, 0, 0, "C"); 

            $this->SetXY( $r1+40, $y1+21 );
            $this->Cell(15,4, $simbolo." ".$delivery_f, 0, 0, "C");
            
            $this->SetXY( $r1+40, $y1+29 );
            $this->Cell(15,4, $simbolo." ".$a_cuenta, 0, 0, "C");
            
            $this->SetXY( $r1+40, $y1+37 );
            $this->Cell(15,4, $simbolo." ".number_format($oper, 2), 0, 0, "C");
            if($M_pago == "Tarjeta"){
            $this->SetFont( "Arial", "B", 8);
            $this->SetXY( $r1+40, $y1+41 );
            $this->Cell(15,4,"5% Extra ", 0, 0, "C");
            }
           
            break;

        case 'Al Contado':
            
            $oper = $total_venta_f + $delivery_f + $total_con_tarjeta;



            $this->SetXY( $r1+40, $y1+15 );
            $this->Cell(15,4, $simbolo." ".$igv, 0, 0, "C");

            $this->SetXY( $r1+40, $y1+35 );
            $this->Cell(15,4, $simbolo." ".number_format($oper, 2), 0, 0, "C");
             
            
            $this->SetXY( $r1+40, $y1+25 );
            $this->Cell(15,4, $simbolo." ".$delivery_f, 0, 0, "C");
            if($M_pago == "Tarjeta"){
            $this->SetFont( "Arial", "B", 8);
            $this->SetXY( $r1+40, $y1+40 );
            $this->Cell(15,4,"5% Extra ", 0, 0, "C");
            }
            break;

    }
    
	
    
    // $this->SetXY( $r1+40, $y1+28.5 );
    // $this->Cell(15,4,"S/.$valor_final_con_acuenta", 0, 0, "C");
	
    // $this->SetXY( $r1+40, $y1+34 );
    // $this->Cell(15,4,"$ ".$valor_final_con_acuenta_dolares, 0, 0, "C");

    // $this->SetXY( $r1+40, $y1+40 );
    // $this->Cell(15,4,"S/".$total_tarjeta, 0, 0, "C");
	
	}
   
	
	
	
	
	
	}