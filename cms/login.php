<?php 
if(!isset($_SESSION)){
	session_start();
} 
$mensaje = "";
$mensaje1 = "";
$mensaje2 = "";
$mensaje3 = "";
$mensaje4 = "";
	
require_once("includes/connection.php");
require_once("includes/functions.php");
	//
 	//
	if(isset($_POST['submit'])){
		$errores = array();
		$required_fields = array('username','password');
		//$errores = array_merge($errores, $required_fields);
		//$errores = array_merge($errores, check_required_fields($required_fields, $_POST));
		foreach($required_fields as $fieldname){
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))){
				$errores[] = $fieldname;	
			}
		}
		//
		$username = trim(mysql_prep($_POST['username']));	
		$password = trim(mysql_prep($_POST['password']));	
		//algoritmos de incriptacion
		//$hashed_password = md5($password);
		//$hashed_password = hash($password);
		$hashed_password = sha1($password);
		//
		if(empty($errores)){
			$query = "SELECT id, username FROM usuarios WHERE username = '{$username}' AND hashed_password = '{$hashed_password}'";
			$result = mysql_query($query, $connection);
			confirm_query($result);
			//
			if(mysql_num_rows($result) == 1){
				$usuario_encontrado = mysql_fetch_array($result);
				$_SESSION['user_id'] = $usuario_encontrado['id'];
				$_SESSION['username'] = $usuario_encontrado['username'];
				header("Location: content.php");
				exit;
			}else{
				$mensaje1 = "El nombre de usuario o contraseña pueden estar errados.";
			}
			
		}else{
			$mensaje2 = "Por favor ingresa los siguientes campos:<br />";
			foreach($errores as $error){
				$mensaje3 = " <li> " . $error . "</li><br/>";
			} 
			if(count($errores) ==1){
				 $mensaje4 = "Hubo un error en el formulario.<br /><br />";
			}else{
				 $mensaje4 = "Hubo " . count($errores) . " errores en el formulario.<br /><br />" ;
			}
		}
	}else{
		if(isset($_GET['logout']) && $_GET['logout'] == 1){
			$mensaje = "Has cerrado tu sesión. "	;
		}
		$username = "";	
		$password = "";	
	}
?>
<?php require_once("includes/functions.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>ANDIMIER : ENTRADA ADMIN.CONTENIDOS</title>
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex">
		<meta name="googlebot-news" content="nosnippet">
		<link rel="Stylesheet" type="text/css" href="estilos/estilos.css" />
	</head>

<body>
<div id="cabezote" ></div>
<div id="pagina">

	<div class="contenido1">
			
		<form  action="login.php" method="post">
			
			<table>
				<tr><td>Nombre de Usuario</td></tr>
				<tr><td><input name="username" type="text" value="<?php echo htmlentities($username);?>" maxlength="50" size="50" height="30" /></td></tr>
								
				<tr><td>Tu Contraseña</td></tr>
				<tr><td><input type="password" name="password" maxlength="50" size="50" height="30" value="<?php echo htmlentities($password)?>" /><br /><br /></td></tr>
				<tr><td><input type="submit" name="submit" class="boton" value="Ingresar" /></td></tr>

				<tr><td>
				<br />
				<hr />
				<div class="mensajelogin">
					<?php 
						echo $mensaje;
						echo $mensaje4;
						echo $mensaje1;
						echo $mensaje2;
						echo $mensaje3;
					?>
				</div>

				</td></tr>

			</table>
		</form>
			
	</div>
</div>
</body>
</html>
        
<?php
if(isset($connection)){
	mysql_close($connection);
}
?>
			