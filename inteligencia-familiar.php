<?php require_once("qs/q_inteligencia.php"); ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="description" content="Proyecto orientado a desarrollar y poner en pr�ctica estrategias efectivas para fortalecer la familia haciendo uso de la inteligencia emocional. Se fundamenta en cinco claves: Afecto, Padres seguros, disciplina positiva, inteligencia emocional, vida en pareja." />
		<meta name="author" content="Maria Elena Lopez Jordan" />
		<meta charset="UTF-8" />
		<title>Inteligencia Familiar</title>
		<?php require_once('includes/gtm-head.php'); ?>
		<?php require_once('requeridos.php');?>
	</head>

	<body>
		<?php require_once('includes/gtm-body.php'); ?>
		<?php include_once('analyticstracking.php');?>
		<?php require_once('cabezote.php');?>

		<div class="cnt-gris">
			<h1>INTELIGENCIA FAMILIAR</h1>
		</div>

		<div id="cnt-ttclaves">
			<h1>Las 5 Claves de la Inteligencia Familiar</h1>
		</div>
		<div id="etqa_ganancias">+ Ganancias de la Inteligencia Familiar</div>

		<div id="cnt_ganancias">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="titulosminusculasgrises">
						<div class="separadorcolgajos"></div>
						<div class="separadorcolgajos"></div>
						<?php echo $contenidos[1]; ?><br />
					</div>
				</div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<?php require_once('cuerpos/cuerpointeligencia1.php'); ?>

					<div class="vacio"><br /></div>
				</div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">

					<div class="separadorcolgajos"></div>
					<div class="separadorcolgajos"></div>
					<div class="separadorcolgajos"></div>

					<?php require_once('cuerpos/cuerpointeligencia2.php'); ?>

					<div class="vacio"></div>
				</div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div id="grafico"></div>
				</div>
			</div>
		</div>

		<?php require_once('footer.php'); ?>
	</body>
</html>