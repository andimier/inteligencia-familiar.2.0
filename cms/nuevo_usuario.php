<?php
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	require_once("../utils/phpfunctions.php");
	require_once("components/new_user.php")
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plataforma de Contenidos</title>

<link rel="Stylesheet" type="text/css" href="estilos/estilos.css" />
</head>

<body>


<div id="cabezote"><h2>ADMINISTRADOR DE CONTENIDOS</h2></div>

<div id="contenedor">

<div class="col1">
<h3>Bienvenido</h3>
<h3>Para crear un usuario: </h3>
<h2>Por favor ingresa los <br />
datos del nuevo <br />
administrador!</h2>
</div>

<div class="col2">

<h2>Crear Usuario</h2>
<h4><?php echo $mensaje; ?></h4>
<h4><?php echo $mensaje2; ?></h4>
-------------------------------------------------------------------------------------------------------


<form action="nuevo_usuario.php" method="post">
<h3>
<table><tr>
<td>Nombre de Usuario (username):&nbsp;</td><td><input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username);?>"/></td>
</tr>
<tr>
<td>Contraseña (password): &nbsp;</td><td><input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password)?>" /></td>
</tr>
<tr>
<td height="70"><input type="submit" name="submit" value="Crear Usuario" />
</td></tr>
</table></h3>
</form>

</div>
</div>


<?php require("includes/footer.php");?>
