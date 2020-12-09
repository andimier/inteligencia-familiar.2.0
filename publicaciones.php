<?php
	require_once("includes/connection.php");

	$q_publicacion= "SELECT * FROM publicaciones LIMIT 1";
	$x = (mysql_query($q_publicacion, $connection));

	while($publicacion = (mysql_fetch_array($x))){
		$id[] = $publicacion['id'];
		$publi_fecha[]     = $publicacion['fecha'];
		$publi_titulo[]    = $publicacion['titulo'];
		$publi_contenido[] = $publicacion['contenido'];
		$publi_ficha[]     = $publicacion['ficha_tecnica'];
		$publi_imagen[]    = $publicacion['imagen2'];
	}

	$publi_id = $id[0];
	$publi_fe = $publi_fecha[0];

	$q_publicaciones= "SELECT * FROM publicaciones ORDER BY fecha DESC";
	$y = (mysql_query($q_publicaciones, $connection));

	$q_imagenes_publicaciones= "SELECT * FROM imagenes_publicaciones WHERE publicacion_id = $publi_id";
	$z = (mysql_query($q_imagenes_publicaciones, $connection));

	$suma = 1;

	// BOTONES SANTERIOR Y SIGUIENTE //
	$menosuno = $id[0] - 1;
	$masuno   = $id[0] + 1;

	$q_anterior= "SELECT * FROM publicaciones WHERE fecha < '$publi_fe' ORDER BY fecha DESC LIMIT 1";
	$anterior = (mysql_query($q_anterior, $connection));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="description" content="Desarrollos editoriales dirigidos a orientar e informar sobre temas relacionados con la familia, la crianza, la vida escolar y la vida en pareja. Los libros constituyen guías prácticas y sencillas sobre estimulación temprana, desarrollo infantil, inteligencia emocional, la educación infantil, la formación de valores, la adolescencia, el divorcio, los duelos, la pareja y la intimidación escolar.  ">
		<!--<meta name="keywords" content="HTML,CSS,XML,JavaScript">-->
		<meta name="author" content="Maria Elena Lopez Jordan">

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Publicaciones - Inteligencia Familiar</title>
		<?php require_once('requeridos.php');?>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

		<script type="text/javascript" src="js/highslide/highslide-with-gallery.js"></script>
		<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />

		<script type="text/javascript">
            hs.graphicsDir = 'js/highslide/graphics/';
            hs.align = 'center';
            hs.transitions = ['expand', 'crossfade'];
            hs.outlineType = 'glossy-dark';
            hs.wrapperClassName = 'dark';
            hs.fadeInOut = true;
            //hs.dimmingOpacity = 0.75;

            // Add the controlbar
            if (hs.addSlideshow) hs.addSlideshow({
                //slideshowGroup: 'group1',
                interval: 5000,
                repeat: false,
                useControls: true,
                fixedControls: 'fit',
                overlayOptions: {
                opacity: .6,
                position: 'bottom center',
                hideOnMouseOut: true
                }
            });
		</script>
	</head>

	<body>
		<?php include_once('analyticstracking.php');?>
		<?php require_once('cabezote.php');?>

		<div class="cnt-gris">
			<h1>PUBLICACIONES</h1>
		</div>
		<!--
		<div class="cnt_gris2">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="titulosnegros">PUBLICACIONES</div>
				</div>
			</div>
		</div>
		-->
        <?php// require_once('infopublicacion.php'); ?>

        <div class="contenedor2">
            <div class="contenidos">
                <div class="col3">
                    <!--  IMAGEN PRINCIPAL DE LA PUBLICACION -->
                    <div class="marcoamarillo">
                        <?php if(empty($publi_imagen[0])): ?>

                        <?php else: ?>
                            <img src="cms/<?php echo $publi_imagen[0]; ?>" width="225" />
                        <?php endif; ?>
                    </div>
                    <div class="imagencontraportada"></div>

                    <!-- IMAGENES GRANDES - VISTAZO INTERIOR -->
                    <div class="gafas"></div>

                    <div class="contenedoriconos">
                        <?php while ($imagenes = (mysql_fetch_array($z))):?>
                            <?php if(empty($imagenes['imagen3'])): ?>
                            <?php else: ?>
                            <a href="cms/<?php echo $imagenes['imagen3']; ?>" class="highslide" onclick="return hs.expand(this)">
                                <div class="img_publicaciones" ><div class="numerosblancospequenos"><?php echo $suma;?></div></div>
                            </a>
                            <?php $suma+=1 ; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="contenedorcontenidos">
                    <div class="tts_amarillos2"><?php echo $publi_titulo[0];?></div>
                    <!--<div class="titulosnegrospequenos3">FECHA &nbsp;<? //echo $publi_fecha[0];?></div><br />-->

                    <div class="titulosnegrospequenos2">RESEÃ‘A</div>
                    <div class="textos2"><?php echo $publi_contenido[0];?></div><br />
                </div>

                <div class="contenedorcontenidos">
                    <div class="contenedorfloatleft">
                        <div class="titulosnegrospequenos3">FICHA TÃ‰CNICA</div>
                        <div class="textos3"><?php echo $publi_ficha[0];?></div><br />
                    </div>

                    <div class="contenedoranteriorsiguiente">
                        <div class="ante_siguiente">
                            <?php while($atras = (mysql_fetch_array($anterior))):?>
                                <div class="titulosnegrospequenos3">ANTERIOR</div>
                                <div class="marconegromini2">
                                    <a href="publicacion.php?publicacion=<? echo $atras['id'];?>&fecha=<? echo $atras['fecha'];?>">
                                    <img src="cms/<?php echo $atras['imagen1']; ?>" width='80'/>
                                    </a>
                                </div>
                                <?php //echo $atras['fecha'];?>
                            <?php endwhile; ?>
                        </div>
                        <div class="ante_siguiente"></div>
                    </div>
                </div>

                <div class="vacio"></div>
                <br />
                <br />
            </div>
        </div>

		<?php require_once('cuerpos/todaspublicaciones.php');?>
		<?php require_once('footer.php'); ?>

	</body>
</html>