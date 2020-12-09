<?php require_once("qs/q_index.php"); ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="Proyecto orientado a desarrollar y poner en práctica estrategias efectivas para fortalecer la familia haciendo uso de la inteligencia emocional. Se fundamenta en cinco claves: Afecto, Padres seguros, disciplina positiva, inteligencia emocional, vida en pareja. ">
		<meta name="author" content="">
		<title>Inteligencia Familiar :: Inicio</title>
		<?php require_once('includes/gtm-head.php'); ?>
		<?php require_once('requeridos.php');?>
		<script type="text/javascript" src="js/slider.js"></script>
		<?php include_once('analyticstracking.php');?>
	</head>

	<body>
		<?php require_once('includes/gtm-body.php'); ?>
		<?php require_once('cabezote.php');?>

		<div id="franjainicio">
			<div id="inicio">
				<div id="textoinicio"></div>
			</div>
            <br />
		</div>

		<div class="contenedorgris1">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="tts_amarillos2">
						<a href="inteligencia-familiar.php">INTELIGENCIA FAMILIAR</a>
					</div>

					<?php require_once('qs/q_banner.php'); ?>

					<div id="colgajoprincipal">
						<div id="cuerpocolgajo">
							<a href="noticias.php"><img id="banner" src="cms/<?php echo $nbanner1; ?>" width="300" /></a>
						</div>
						<div id="textocolgajoprincipal"><?php echo substr($nbanner2, 0, 35); ?></div>
					</div>

					<?php require_once('cuerpos/banner.php') ?>
					<div id="cnt_etiquetafrase"></div>
				</div>
			</div>
		</div>

		<div class="contenedor1">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="textos"><br />Estrategias efectivas para fortalecer la familia haciendo uso de la inteligencia emocional.</div>
					<div class="titulosminusculas">Las Cinco Claves de la Inteligencia Familiar</div>

					<div class="contenedorfloatleft">
						<div class="contenedorcinco">5</div>
					</div>
					<div class="contenedorfloatleft">
						<div class="titulosminusculasgrises">
							<?php echo $titulos[0]; ?><br />
							<?php echo $titulos[1]; ?><br />
							<?php echo $titulos[2]; ?><br />
							<?php echo $titulos[3]; ?><br />
							<?php echo $titulos[4]; ?><br />
						</div>
					</div>
				</div>
				<div class="vacio"></div>
			</div>
		</div>
		<br />

		<div class="contenedornaranja">
			<div class="contenidos">
				<div class="tituloblancoarticulos">ARTíCULOS</div>
			</div>
		</div>
		<br />

		<div class="contenedor3">
			<div id="articulos"><br />
				<?php while($articulo = mysql_fetch_array($articulos)): ?>
					<div id="gancho1">
						<div class="ganchos">
							<img src="diseno/inicio/gancho1.png" />
						</div>

						<div class="colgajos">
							<a href="articulo.php?articulo=<?php echo $articulo['id'];?>&contenido=<?php echo $articulo['contenido_id'];?>">
							<img src="cms/<?php echo $articulo['imagen1'];?>" width="140" />
							</a>
						</div>

						<div class="textoarticulos">
							<a href="articulo.php?articulo=<?php echo $articulo['id'];?>&contenido=<?php echo $articulo['contenido_id'];?>">
							<?php echo $articulo['titulo'];?>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<br />

		<div class="contenedorgriscarrusel">
			<div class="contenidos">
				<br />
				<div id="cajatextosarticulos">
					<div class="tts_publicaciones"><a href="publicaciones.php">PUBLICACIONES</a></div>
				</div>
				<br />

				<script src="js/carruselinicio.js" type="text/javascript"></script>
				<?php require_once('cuerpos/carruselinicio.php'); ?>
				<div class="vacio"> </div>
			</div>
		</div>

		<div class="contenedor">
			<div class="contenidos">
				<br />
				<br /><br /><br /><br /><br /><br /><br />

				<div class="contenedorfloatleftinicio">
					<div class="titulosgrises"><a href="servicios.php">SERVICIOS</a></div>
					<div id="textoganancias">
						<?php
							while($contenido3 = mysql_fetch_array($contenidos3)): ?>
							<?php echo $contenido3['titulo'] . "<br />"; ?>
						<?php endwhile; ?>
					</div>
					<br />
				</div><!-- cierre contenedorfloat -->

				<div class="contenedorfloatleftinicio">

					<div class="titulosamarillos"><a href="perfil.php">Perfil</a></div>
					<?php
						while($perfil = mysql_fetch_array($contenidoperfil)): ?>
							<div class="titulosminusculas"><?php echo $perfil['titulo']; ?> </div>
							<div id="textoperfilinicio">
								<?php echo substr ($perfil['contenido'],0,200); ?>
								<a href="perfil.php">... leer más</a>
							</div>
					<?php endwhile; ?>
					</div>
				</div><!-- cierre contenedorfloatleft -->

				<div class="contenedorfloatleftinicio">
					<div>
						<a href="http://www.youtube.com/embed/2aFC--qPHiU?rel=0&amp;wmode=transparent"
						onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 480, height: 385,
						allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer',
						preserveContent: false, objectLoadTime: 'after'})"
						class="highslide">
						<img src="diseno/inicio/camara.jpg" width="127" />
						</a>
					</div>
					<div class="titulosnegros">&nbsp;&nbsp; Videos</div>
				</div>

				<div class="vacio">
                <br />
                <br />
                </div>
		</div>
		<?php require_once('footer.php'); ?>
	</body>
</html>
