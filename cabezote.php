<?php
	require_once("includes/connection.php");
	$query= "SELECT * FROM noticias ORDER BY fecha DESC LIMIT 1";
	$imagennoticia = (mysql_query($query, $connection));

	while ($imagen = mysql_fetch_array($imagennoticia)) {
		$noti_imagen[] = $imagen['imagen1'];
		$noti_titulo[] = $imagen['titulo'];
	}

	$querymenuarticulos = "SELECT * FROM contenidos WHERE seccion_id = 1 AND contenido_id = 8";
	$menuarticulos = (mysql_query($querymenuarticulos, $connection));

	while ($articulo = mysql_fetch_array($menuarticulos)) {
		$titulosarticulos[] = $articulo['titulo'];
	}
?>
	<div id="cabezote">
		<div id="contenido_cabezote">
			<div id="logo"><img src="diseno/inicio/logosombra.png"  /></div>

			<div id="contenedortitulos"><br />
				<div id="titulointeligencia">Inteligencia Familiar</div>
				<div id="nombremel">María Elena López</div>

				<div class="flotador-redes">
                    <div class="contenedorfloatleft3">
                        <a href="http://www.facebook.com/pages/Maria-Elena-L%C3%B3pez-Inteligencia-Familiar/288095567972282" target="_blank">
                        <img src="diseno/cabezote/facebook.png" />
                        </a>&nbsp;
                    </div>
                    <div class="contenedorfloatleft3">
                        <a href="http://twitter.com/inteligenciafam" target="_blank">
                        <img src="diseno/cabezote/twitter.png" />
                        </a>
                    </div>
				</div>
			</div>

			<div id="noticiascabezote">
				<div id="ganchocabezote">
                    <img src="diseno/inicio/ganchocabezote.png" />
                </div>

				<div id="colgajocabezote">
                    <img src="cms/<?php echo $noti_imagen[0]; ?> " width="70" />
                    <br />
                    <br />
                </div>

				<div class="textos12">
                    <a href="noticias.php">
                        <?php echo substr($noti_titulo[0],0,40); ?>...
                    </a>
                </div>
			</div>

			<div id="noticiacabezote">
				<div id="titulo-noticias"><a href="noticias.php">NOTICIAS</a></div>
			</div>
		</div>
	</div>

	<div id="franjamenu">
		<div id="menu">
			<div class="link">
                <a href="index.php">INICIO</a>
            </div>
			<div class="link">
                <a href="inteligencia-familiar.php">inteligencia familiar</a>
            </div>
			<div class="link3">
                <a>ARTÍCULOS</a>
            </div>
			<div class="link">
                <a href="servicios.php">servicios</a>
            </div>
			<div class="link">
                <a href="publicaciones.php">publicaciones</a>
            </div>
			<div class="link">
                <a href="perfil.php">perfil</a>
            </div>
			<div class="link">
                <a href="videos.php">videos</a>
            </div>

			<div class="link"><a href="contacto.php">contacto</a> </div>
		</div>
	</div>

	<div id="franjamenu2">
		<div id="menu2">
			<div class="link2"><a href="pasion.php"><?php echo $titulosarticulos[0]; ?></a></div>
			<div class="link2"><a href="guiasyeducadores.php"><?php echo $titulosarticulos[1]; ?></a> </div>
			<div class="link2"><a href="amor.php"><?php echo $titulosarticulos[2]; ?></a> </div>
			<div class="link2"><a href="disciplina.php"><?php echo $titulosarticulos[3]; ?></a> </div>
			<div class="link2"><a href="valoresyhabilidades.php"><?php echo $titulosarticulos[4]; ?></a> </div>
		</div>
	</div>