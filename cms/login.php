<?php
	require_once("includes/functions.php");

	require_once("cnx/connection.php");

	require_once("../utils/phpfunctions.php");

	require_once("components/login.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>ANDIMIER : ENTRADA ADMIN.CONTENIDOS</title>
		<meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex">
		<meta name="googlebot-news" content="nosnippet">
		<link rel="Stylesheet" type="text/css" href="estilos/estilos.css" />
	</head>
	</head>

	<body>
	<div id="cabezote" ></div>
		<div id="cnt_login">

			<div class="login-message">
				<?php if (!empty($error_message)): ?>
					<?php echo $error_message; ?>
				<?php endif; ?>
			</div>

			<div class="login-form">

				<form id="frm-login" method="post">
					<label>Nombre de Usuario
						<input type="text" name="usuario" id="campo_usuario"  />
					</label>

					<label>Tu Contraseña
						<input type="password" name="contrasena" id="password" />
					</label>
					<input type="submit" name="submit" class="boton_entrar fondo_verde" value="Ingresar" />
				</form>
			</div>
		</div>
	</body>
</html>

<?php
	if (isset($connection)) {
		phpMethods('close', $connection);
	}
?>
