<?php
	require_once("includes/connection.php");

	$numero = 1;

	$q_servicios1= "SELECT * FROM contenidos WHERE seccion_id = 3 AND indice = 0";
	$x = (mysql_query($q_servicios1, $connection));
	$y = (mysql_query($q_servicios1, $connection));

	while($servicios2 = (mysql_fetch_array($y))){
		$titulos2[] = $servicios2['titulo'];
		$contenidos2[] = $servicios2['contenido'];
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="description" content="Productos ofrecidos para dar asesor�a y apoyo profesional en la implementaci�n de estrategias orientadas a desarrollar la inteligencia familiar a individuos, empresas, instituciones p�blicas y privadas y a la comunidad educativa. Tiene como objetivo mejorar el funcionamiento familiar para incrementar el bienestar y los niveles de satisfacci�n de la familia. ">
		<meta name="author" content="Maria Elena Lopez Jordan">
		<meta charset="UTF-8" />
		<title>Servicios - Inteligencia Familiar</title>
		<?php require_once('includes/gtm-head.php'); ?>
		<?php require_once('requeridos.php');?>
	</head>

	<body>
		<?php require_once('includes/gtm-body.php'); ?>
		<?php include_once('analyticstracking.php');?>
		<?php require_once('cabezote.php');?>

		<div class="cnt-amarillo">
			<h1>SERVICIOS</h1>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="contenedorfloatleft">
						<div class="numerosnegros">1</div>
					</div>

					<div id="servicio1">
						<div class="titulosnegros"><a name="<?php echo $titulos2[0]; ?>" ><?php echo $titulos2[0]; ?></a></div><br />
						<div class="textos2"><?php echo $contenidos2[0]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">

					<div class="contenedorfloatleft">
						<div class="numerosnegros">2</div>
					</div>

					<div class="contenedorfloatleft">
						<div class="barranegra">
							<div class="titulosblancosgrandes">&nbsp;&nbsp;<a name="<?php echo $titulos2[1]; ?>" ><?php echo $titulos2[1]; ?></a></div>
						</div>
						<div class="textos2"><?php echo $contenidos2[1]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="contenedorfloatleft">
						<div class="numerosnegros">3</div>
					</div>

					<div id="servicio1">
						<div class="titulosnegros"><a name="<?php echo $titulos2[2]; ?>" ><?php echo $titulos2[2]; ?></a></div><br />
						<div class="textos2"><?php echo $contenidos2[2]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<div class="contenedorcontenidos">

					<div class="contenedorfloatleft">
						<div class="numerosnegros">4</div>
					</div>

					<div class="contenedorfloatleft">
						<div class="barranegra">
							<div class="titulosblancosgrandes"><a name="<?php echo $titulos2[3]; ?>" ><?php echo $titulos2[3]; ?></a></div>
						</div>

						<div class="textos2"><?php echo $contenidos2[3]; ?></div><br />
					</div>
					<div class="vacio"></div>
				</div>
			</div>
		</div>

		<?php require_once('footer.php'); ?>
	</body>
</html>