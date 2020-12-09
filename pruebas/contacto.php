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


///////////////// Respuesta Automática //////////////////////////////////////

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
		$message = "Datos incompletos, por favor completa tus datos e inténtalo de nuevo !!";
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Publicaciones - Inteligencia Familiar</title>
<? require_once('requeridos.php');?>

</head>

<body>
	<? require_once('cabezote.php');?>
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="titulosnegros">CONTACTO</div>
                <div class="titulosnegrosminusculas">info@inteligenciafamiliar.com</div>
            </div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
    
    
    
    <div class="contenedor2">
    	<div class="contenidos">
        	 <div class="contenedorcontenidos">         
          		<div class="formulario">
        		<form method="post">
            	<div class="titulosnegrosminusculas">NOMBRE </div>
				<input type="text" name="nombre" class="form_nombre" size="65" ><br />
           		<div class="titulosnegrosminusculas">E-MAIL </div>
				<input type="text" name="mail" class="form_mail" size="65"><br />
            	<div class="titulosnegrosminusculas"> MENSAJE</div>
            	<textarea rows="7" name="mensaje" class="form_mensaje" cols="50" ></textarea><br /><br />
				&nbsp;<input type="submit" name="enviarcontacto" value="Enviar Datos" class="boton" />
           		</form><br /><br />
       			</div>
       			<div class="link">
	   			<? echo $message; ?>
      			</div>
                <div class="vacio"></div>
    		</div>
        </div>
    </div>
    
    
    
    
</body>
</html>