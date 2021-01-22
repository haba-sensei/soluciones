<?php
require_once("../vendor/PHPMailer/class.phpmailer.php");
$date = date('d-m-Y H:i:s');
$url_pdf = "../assets/pdf/";
$email = $_POST['c'];
$pedido_ = $_POST['p'];
 

		 
		$subject = utf8_decode("Area Ventas Soluciones");
			
			 $message = "************************************************** \r\n" .
					 "Message from you website!  \r\n" .
					 "************************************************** \r\n" .	
				 
			$body = "<html >"; 
			$body = "<header>";
			$body = "<style>.im{color:#7F7F7F;}</style>";
			$body = "</header>";
			$body .= "<body style='color:#4a4a4f;'>"; 
			$body .= "<table align='center' border='0' cellpadding='0' cellspacing='0' width='310' style='border-collapse:collapse;width:310px;margin:0 auto'>"; 
			$body .= "<tbody class='im' ><tr style='page-break-before:always'>"; 
			$body .= "<td align='center'  style=' color: #333; padding:10px 0'>";
			$body .= "<img src='http://www.solucionescctvysistemas.com/assets/img/logo2.png' height='250' width='300'></td></tr>"; 
			$body .= "<tr style='page-break-before:always'>";
			$body .= "<p style='font-family:sans-serif;font-size:18px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>www.solucionescctvysistemas.com</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>ventas@solucionescctvysistemas.com</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:15px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>UBICANOS--Lt. 13 - Mz. H - Gp. 15 - St. 1 - Villa el Salvador Lima Peru.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:15px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>CONTACTANOS--Informes.968-933-814/Ventas.986-838-333/Soporte.996-727-562.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:15px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#27AE60 ;>CUENTAS BANCARIAS-- BCP: 194-357-125-00-0-31 /BBVA:0011-0323-0200389677 .</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#4a4a4f ;>TERMINO DE USO:</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:16px;line-height:22px;font-weight:normal;margin:0 0 11px 0;text-align:justify';color:#4a4a4f ;>*Aperturarse ala Tienda *Presentar su Cotizacion en Ventas *Cancelar Importe en Caja *Recoger su Producto en Almacen.</p><p></p>";
			$body .= "<p style='font-family:sans-serif;font-size:13px;line-height:20px;font-weight:normal;margin:0 0 24px 0px;text-align:center;color:#4a4a4f; text-align:left;'><br>";
			$body .= "<b>Nº DE COTIZACION: </b> $pedido_ <br><br>";
			$body .= "<b>FECHA DE EMISION: </b> $date<br>";
			$body .= "<b>DESCARGAR: </b><a href='http://localhost/soluciones_7/assets/pdf/$pedido_' > SU COTIZACION EN PDF. </a><br><br>";
		    $body .= "</body>\n"; 
			$body .= "</html>";
			
			$mail = new PHPMailer();
			$mail->IsSMTP();                                     
			$mail->Host = "mail.solucionescctvysistemas.com";  
			$mail->SMTPAuth = true;     
			$mail->SMTPSecure = ''; 
			$mail->Port = 25;  
			$mail->Username = "ventas@solucionescctvysistemas.com";  
			$mail->Password = "Olartegamboa291989";  
			$mail->setFrom('ventas@solucionescctvysistemas.com', 'Nro #'.$pedido_);  
			$mail->AddAddress( $email, "Notificaciones"); 
			$mail->WordWrap = 400;                                  
			$mail->IsHTML(true);                                  
			$mail->Subject = $subject;
			$mail->Body    = $body;
			$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
			// $mail->AddAttachment("../assets/pdf/".$pedido_.".pdf");  
			$mail->send();
			if($mail->Send()) {

				echo "Enviado Con Exito";
		
			} 
		 
		
		
 
?>
