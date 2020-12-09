<?php
	require_once("includes/connection.php");
	require_once('descargapdf.php');

	$q_perfil= "SELECT * FROM contenidos WHERE seccion_id = 4 LIMIT 1";
	$x = (mysql_query($q_perfil, $connection));

	while($perfil = (mysql_fetch_array($x))){
		$id[]        = $perfil['id'];
		$fecha[]     = $perfil['fecha'];
		$titulo[]    = $perfil['titulo'];
		$contenido[] = $perfil['contenido'];
		$imagen[] 	 = $perfil['imagen2'];
	}

	$rutaimagen = "cms/" . $imagen[0];
	$id_perfil = $id[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="Describe la formación y experiencia de la autora y creadora del proyecto de Inteligencia Familiar.">
	<!--<meta name="keywords" content="HTML,CSS,XML,JavaScript">-->
	<meta name="author" content="Maria Elena Lopez Jordan">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Perfil - María Elena López Jordán - Inteligencia Familiar</title>
	<?php require_once('requeridos.php');?>
	<script src="js/general.js" type="text/javascript"></script>
</head>

<body>
	<?php include_once('analyticstracking.php');?>
	<?php require_once('cabezote.php');?>

    <div class="cnt-gris">
		<h1>PERFIL</h1>

    </div>
	<!--
	<div class="cnt_gris2">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">

				<div class="tts_negroscentrados">PERFIL</div>
                <div class="vacio"></div>

            </div>
      	</div>--><!-- cierre contenedorcontenidos -->
    <!--</div>
    -->

    <div class="contenedor2">
    	<div class="contenidos">

        	<!-- IMAGEN DE MEL -->
        	<div class="col3"><br /><br />
        		<div id="marcofoto">
					<img src="<?php echo $rutaimagen; ?>" width="225" />
                </div><br />

                <div class="contenedorfloatleft3"><img src="diseno/perfil/flechadescarga.png" /></div>
                <div class="contenedorfloatleft3">
                <form method="post">
					<input type="hidden" name="archivo" value="portafolio-mel.pdf">
					<input type="submit" name="botondescarga" value="Descarga mi Portafolio" id="boton"/>
				</form>
                </div>
        	</div>

        	<div class="contenedorcontenidos">
            	<div class="contenedorfloatleft">
                	<div class="titulosnegrospequenos3"><a href="#publicaciones">PUBLICACIONES</a></div>
                </div>

                <div class="contenedorfloatleft">
                	<div class="titulosnegrospequenos3">
                    	<a href="#videos">-&nbsp;&nbsp;&nbsp;&nbsp; VIDEOS&nbsp;<img src="diseno/perfil/camara.png" height="25" /></a>
                    </div>
                </div>

				<div class="tts_amarillos2"><?php echo $titulo[0]; ?></div><br />
                <div class="textos2">
                    <?php echo substr($contenido[0],0,1820); ?>
                </div>

                <div id="textos-ocultos">
                    <?php echo substr($contenido[0],1820,5000); ?>
                </div>
                <div id="boton-ocultos">
                    seguir leyendo...
                </div>
                <br />
                <br />
                <br />
            </div>
      	</div>
    </div>

    <div class="contenedor2">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div id="titulo_publicaciones2">
                    <a name="publicaciones">Publicaciones</a>
                </div>
                <div class="vacio"></div>

				<div class="contenedorfloatleft">
                    <?php require_once('cuerpos/carrusel.php');?>
                </div>

                <div class="contenedorfloatleft">
                    <?php require_once('cuerpos/carrusel3.php');?>
                </div>

                <div class="vacio"></div>
                <br />
                <br />
      		</div>
    	</div><br />
    </div>

    <!--
	<div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">

				<div id="titulo_publicaciones2"><a name="videos">Videos</a><img src="diseno/perfil/camara.png" /></div><br /><br /><br />
                <div class="contvideos">
					<div id="playerContainer"><object id="player"></object></div>

					<div id="videos2"></div>
					<script
					type="text/javascript"
					src="https://gdata.youtube.com/feeds/users/conferenciasMEL/uploads?alt=json-in-script&callback=showMyVideos2&max-results=30">
					</script>
                </div>
			</div>
		</div>
	</div>
    -->
    <?php require_once('footer.php');?>
</body>
</html>