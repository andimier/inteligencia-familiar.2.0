<?

$mensaje2 = "";
$message = "";

if(isset($_POST['enviarcontacto'])) {
	
	$errores = array();
	$required_fields = array('nombre','mail','mensaje');
	
	foreach($required_fields as $fieldname){
		if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))){
			$errores[] = $fieldname;	
		}
	}
	if(empty($errores)){
		$to = "info@inteligenciafamiliar.com";
		//$to = "amdisartec@yahoo.com";
		$subject = "Info Contacto";
		$nombre = $_POST['nombre'];
		$mail   = $_POST['mail'];
		$mensaje = $_POST['mensaje'];
		
		//===== INSERCION DEL CONTACTO EN BD=====================================//
		
		$query = "INSERT INTO contactos (nombre, mail) VALUES ('$nombre', '$mail')";
		$resultado = mysql_query($query, $connection);
		
		
		//====== Envio de datos ===============================================//
		
		$body = "<html><body>
		INFO DE CONTACTO <br />
		Nombre: $nombre <br />
		Correo: $mail <br /><br />

		Mensaje: <br />
		$mensaje
		</body></html>";

		
		$message = "Tus datos han sido enviados correctamente !!";

		$headers = "From: <{$mail}>\r\n";
		$headers .= "X-Mailer: PHP/" .phpversion(). "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";

		mail($to, $subject, $body, $headers);


		///////// Respuesta Automática //////////////////////////////////////

		$asunto="Gracias por enviarnos tus datos!";
		$respuesta="<html><body>Gracias por tu tiempo.<br />
		Estaremos respondiendo tu solicitud prontamente.
		<h2>INTELIGENCIA FAMILIAR | www.inteligenciafamiliar.com</h2>";
		//$respuesta .= "<img src='http://www.humbertostudio.com/imagenes/logo/logohuto.jpg' /></body></html>";

		$cabeza = "From: María Elena López Jordán | Inteligencia Familiar <info@inteligenciafamiliar.com>\r\n";
		$cabeza .= "X-Mailer: PHP/" .phpversion(). "\r\n";
		$cabeza .= "MIME-Version: 1.0\r\n";
		$cabeza .= "Content-Type: text/html; charset=iso-8859-1\r\n";

		mail($mail, $asunto, $respuesta, $cabeza);

	}else{
		$message = "Datos incompletos, por favor llena los campos e intenta de nuevo !";
	}
}

?>