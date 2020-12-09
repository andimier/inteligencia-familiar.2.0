<?php
	require_once("includes/connection.php");
	$mensaje = "";
	$id_contenido = 11;
	require_once('qs/q-articulos.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Disciplina Positiva - Inteligencia Familiar</title>
		<?php require_once('requeridos.php');?>
	</head>

	<body>
		<?php include_once('analyticstracking.php'); ?>
		<?php require_once('cabezote.php'); ?>
		<?php require_once('cuerpos/cuerpoarticulos.php'); ?>
		<?php require_once('cuerpos/masarticulos.php'); ?>
	</body>
</html>