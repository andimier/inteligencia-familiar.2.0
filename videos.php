<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="description" content="Describe la formación y experiencia de la autora y creadora del proyecto de Inteligencia Familiar.">
		<meta name="author" content="Maria Elena Lopez Jordan">
		<meta charset="UTF-8" />
		<title>Videos - María Elena López Jordán - Inteligencia Familiar</title>
		<?php require_once('includes/gtm-head.php'); ?>
		<link rel="stylesheet" href="estilos/fuentes.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="estilos/estilos.css" type="text/css" media="screen" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	</head>

	<body>
		<?php require_once('includes/gtm-body.php'); ?>
		<?php include_once('analyticstracking.php');?>
		<?php require_once('cabezote.php');?>

		<div class="cnt-gris">
			<h1>VIDEOS</h1>
		</div>

		<div class="contenedor2">
			<div class="contenidos">
				<div id='cnt-videos'>

				</div>
				<div class="vacio"></div>
			</div>
		</div>

		<div id="fondo-video"></div>
		<div id="reproductor">
			<iframe id="video-player" width="100%" height="100%" src=""></iframe>
			<div id="btn-cerrar-video"><img src="diseno/btn-cerrar.png" /></div>
		</div>

		<?php require_once('footer.php');?>
		<script src="js/videos-script.js" type="text/javascript"></script>
	</body>
</html>
