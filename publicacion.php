<?php
	require_once("includes/connection.php");

	$publicacion_id = $_GET['publicacion'];
	$publicacion_fe = $_GET['fecha'];

	$q_publicacion = "SELECT * FROM publicaciones WHERE id = " . $publicacion_id;
	$x = mysql_query($q_publicacion, $connection);

	while($publicacion = mysql_fetch_array($x)){
		$publi_titulo[]    = $publicacion['titulo'];
		$publi_fecha[]     = $publicacion['fecha'];
		$publi_contenido[] = $publicacion['contenido'];
		$publi_ficha[]     = $publicacion['ficha_tecnica'];
		$publi_imagen[]    = $publicacion['imagen2'];
	}

	$q_publicaciones = "SELECT * FROM publicaciones ORDER BY fecha DESC";
	$y = (mysql_query($q_publicaciones, $connection));

	$q_imagenes_publicaciones = "SELECT * FROM imagenes_publicaciones WHERE publicacion_id = $publicacion_id";
	$z = (mysql_query($q_imagenes_publicaciones, $connection));

	$suma = 1;

	// BOTONES SANTERIOR Y SIGUIENTE
	$masuno = $publicacion_id + 1;

	$q_siguiente= "SELECT * FROM publicaciones WHERE fecha > '" .$publicacion_fe. "' ORDER BY fecha ASC LIMIT 1";
	$siguiente = (mysql_query($q_siguiente, $connection));

	$q_anterior= "SELECT * FROM publicaciones WHERE fecha < '$publicacion_fe' ORDER BY fecha DESC LIMIT 1";
	$anterior = (mysql_query($q_anterior, $connection));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php echo $publi_titulo[0];?> - Inteligencia Familiar</title>
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
		<?php require_once('cabezote.php');?>
		<div class="cnt_gris2">
			<div class="contenidos">
				<div class="contenedorcontenidos">
					<div class="titulosnegros">PUBLICACIÓN</div>
				</div>
			</div><!-- cierre contenedorcontenidos -->
		</div>

	    <div class="contenedor2">
            <div class="contenidos">
                <div class="col3">

                    <!-- ==================== IMAGEN PRINCIPAL DE LA PUBLICACION ================= -->
                    <div class="marcoamarillo">
                        <?php if(empty($publi_imagen[0])): ?>

                        <?php else: ?>
                            <img src="cms/<?php echo $publi_imagen[0]; ?>" width="225" />
                        <?php endif; ?>
                    </div>
                    <div class="imagencontraportada"></div>

                    <!-- =================== IMAGENES GRANDES - VISTAZO INTERIOR ==================-->
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

                    <div class="titulosnegrospequenos2">RESEÑA</div>
                    <div class="textos2"><?php echo $publi_contenido[0];?></div><br />
                </div><!-- cierre contenedorcontenidos -->

                <div class="contenedorcontenidos">
                    <div class="contenedorfloatleft">
                        <div class="titulosnegrospequenos3">FICHA TÉCNICA</div>
                        <div class="textos3"><?php echo $publi_ficha[0];?></div><br />
                    </div>

                    <div class="contenedoranteriorsiguiente">
                        <div class="ante_siguiente">
                            <?php while($sigue = (mysql_fetch_array($siguiente))):?>
                                <div class="titulosnegrospequenos3">SIGUIENTE</div>
                                <div class="marconegromini2">
                                    <a href="publicacion.php?publicacion=<? echo $sigue['id'];?>&fecha=<?php echo $sigue['fecha'];?>">
                                    <img src="cms/<?php echo $sigue['imagen1']; ?>" width=80/>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <div class="ante_siguiente">
                            <?php while($atras = (mysql_fetch_array($anterior))):?>
                                <div class="titulosnegrospequenos3">ANTERIOR</div>
                                <div class="marconegromini2">
                                    <a href="publicacion.php?publicacion=<?php echo $atras['id'];?>&fecha=<?php echo $atras['fecha'];?>">
                                        <img src="cms/<?php echo $atras['imagen1']; ?>" width="80" />
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                  </div><!-- cierre contenedorcontenidos -->
            </div><!-- CIERRRE CONTENIDOS -->
            <div class="vacio"></div><br /><br />
		</div>

		<?php require_once('cuerpos/todaspublicaciones.php');?>
	</body>
</html>