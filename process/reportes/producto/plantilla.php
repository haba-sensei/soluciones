<?php
	
	require 'fpdf/fpdf.php';
	require 'conexion.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			
			$this->Image('images/logo.png', 10, 10, 20 );
			$this->SetFont('Arial','B',14);
			$this->Cell(30);
			$this->Cell(120,10, 'REPORTE TOTAL DE PRODUCTOS EN ALMACEN',0,0,'C');
			$this->Ln(10);
			$this->Cell(180,10, 'SOLUCIONES CCTV & SISTEMAS',0,0,'C');
			$this->SetFont('Arial','B',12);
			$this->Cell(0,10,date('d/m/Y'),0,1,'R');
			$this->Ln(10);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Paginas '.$this->PageNo().'/{nb}',0,0,'C' );
		}
		
		function WordWrap(&$text, $maxwidth)
		{
			$text = trim($text);
			if ($text==='')
				return 0;
			$space = $this->GetStringWidth(' ');
			$lines = explode("\n", $text);
			$text = '';
			$count = 0;

			foreach ($lines as $line)
			{
				$words = preg_split('/ +/', $line);
				$width = 0;

				foreach ($words as $word)
				{
					$wordwidth = $this->GetStringWidth($word);
					if ($wordwidth > $maxwidth)
					{
						// Word is too long, we cut it
						for($i=0; $i<strlen($word); $i++)
						{
							$wordwidth = $this->GetStringWidth(substr($word, $i, 1));
							if($width + $wordwidth <= $maxwidth)
							{
								$width += $wordwidth;
								$text .= substr($word, $i, 1);
							}
							else
							{
								$width = $wordwidth;
								$text = rtrim($text)."\n".substr($word, $i, 1);
								$count++;
							}
						}
					}
					elseif($width + $wordwidth <= $maxwidth)
					{
						$width += $wordwidth + $space;
						$text .= $word.' ';
					}
					else
					{
						$width = $wordwidth + $space;
						$text = rtrim($text)."\n".$word.' ';
						$count++;
					}
				}
				$text = rtrim($text)."\n";
				$count++;
			}
			$text = rtrim($text);
			return $count;
		}
	}
?>