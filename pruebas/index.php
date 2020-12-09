<? 
require_once("includes/connection.php");

$query= "SELECT * FROM secciones";
$secciones = (mysql_query($query, $connection));

$querycont1= "SELECT * FROM contenidos WHERE seccion_id = 1";
$contenidos1 = (mysql_query($querycont1, $connection));

while($contenido1 = mysql_fetch_array($contenidos1)){
	$titulos[] = $contenido1['titulo'];
	$parrafo[] = $contenido1['contenido'];
}



$querycont3= "SELECT * FROM contenidos WHERE seccion_id = 3";
$contenidos3 = (mysql_query($querycont3, $connection));

$queryperfil= "SELECT * FROM contenidos WHERE seccion_id = 4";
$contenidoperfil = (mysql_query($queryperfil, $connection));

$q_articulos= "SELECT * FROM articulos ORDER BY fecha LIMIT 5";
$articulos = (mysql_query($q_articulos, $connection));

while($articulo = mysql_fetch_array($articulos)){
	$art_id[]     = $articulo['id'];
	$art_fecha_[] = $articulo['fecha'];
	$art_imagen[] = $articulo['ruta_imagen']; 
	$art_titulo[] = $articulo['titulo']; 
	$art_contenidoid[]     = $articulo['contenido_id'];
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--<meta name="viewport" content="width=device-width, initial-scale=2, maximum-scale=0" />-->
<!--<meta name="viewport" content="width=device-width">-->

<title>Inteligencia Familiar</title>
<? require_once('requeridos.php');?>

</head>
<body>

<? require_once('cabezote.php');?>

<div id="franjainicio">
	<div id="inicio">
    	<div id="textoinicio">INICIO</div>
        <div id="textofrases">
        	"Fortalezcamos la confianza en nuestra capacidad para ser padres y dar en la educación de nuestros hijos los mejores frutos."
        </div>
        
    </div><br />
</div>



<div class="contenedor">
	<div class="contenidos">
    	<div class="contenedorcontenidos">
        
    		<!-- =============== COLUMNA CON CARRUSELES ========================= -->
            <div id="col2">
            	<div id="titulo_publicaciones">Publicaciones</div>
				<? require_once('carrusel.php');?><? require_once('carrusel2.php');?>
            </div>
            <!-- =============== COLUMNA CON CARRUSELES ========================= -->
            
			<div class="numeros">1.</div>
			<div class="titulosamarillos"><a href="inteligencia-familiar.php">INTELIGENCIA FAMILIAR</a></div>
			<div class="textos"><?php echo $parrafo[0];?></div>
       		<div class="titulosminusculas"><?php echo $titulos[1];?></div>
        	<div class="textos"><?php echo $parrafo[1];?></div><br /><br/>
        </div><!-- cierre contenedorcontenidos -->
  	</div>
</div><!-- CIERRE CONTENEDOR -->

<div class="contenedor">
	<div class="contenidos"><br />
    	<div class="contenedorcontenidos">
  			<div class="numeros">2.</div>
  			<div class="titulosgrises"><a href="servicios.php">SERVICIOS</a></div>
  			<div id="textoganancias">
    			<?php
					while($contenido3 = mysql_fetch_array($contenidos3)): ?>
    				<ul>
      				<li><? echo $contenido3['titulo']; ?></li>
    				</ul>
    			<?php endwhile; ?>
  			</div><br />
    	</div><br /><!-- cierre contenedorcontenidos -->
	</div>
</div>


<div class="contenedor">
	<div class="contenidos">
    	<div class="contenedorcontenidos">
        
        	
  			<div id="videos">
            <a href="http://www.youtube.com/embed/2aFC--qPHiU?rel=0&amp;wmode=transparent" 
			onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 480, height: 385, 
			allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
			preserveContent: false, objectLoadTime: 'after'})"
       		class="highslide">
        	<img src="diseno/inicio/videos.png" height="300" />
            </a>
        	</div>
        
       		<div class="numeros">3.</div>
			<div class="titulosamarillos"><a href="perfil.php">Perfil</a></div>
       		<?php
				while($perfil = mysql_fetch_array($contenidoperfil)): ?>
            		<div class="titulosminusculas"><? echo $perfil['titulo']; ?> </div>
	            	<div class="textos"> <? echo substr ($perfil['contenido'],0,280) . '.....'; ?>
                    	<a href="perfil.php">leer más</a></div>
			<?php endwhile; ?>
        	</div><br /><br />
        </div><!-- cierre contenedorcontenidos -->
	</div>
</div>

<div class="contenedor3">
	<div id="articulos"><br />
		<div class="contenedorcontenidos">
    		<div class="numeros">4.</div>
       
	  		<div class="titulosnaranjas">ART&Iacute;CULOS</div>
        
			<div id="gancho1">
            	<a href="articulo.php?articulo=<? echo $art_id[0];?>&contenido=<? echo $art_contenidoid[0];?>">
				<div class="ganchos"><img src="diseno/inicio/gancho1.png" /></div>
            	<div class="colgajos"><img src="cms/<? echo $art_imagen[0];?>" width="140" /></div>
            	<div class="textoarticulos"><? echo $art_titulo[0];?></div>
                </a>
			</div>
        
			<div id="gancho2">
            	<a href="articulo.php?articulo=<? echo $art_id[1];?>&contenido=<? echo $art_contenidoid[1];?>">
				<div class="ganchos"><img src="diseno/inicio/gancho1.png" /></div>
            	<div class="colgajos"><img src="cms/<? echo $art_imagen[1];?>" width="140" /></div>
            	<div class="textoarticulos"><? echo $art_titulo[1];?></div>
                </a>
			</div>
        
        	<div id="gancho3">
            	<a href="articulo.php?articulo=<? echo $art_id[2];?>&contenido=<? echo $art_contenidoid[2];?>">
				<div class="ganchos"><img src="diseno/inicio/gancho1.png" /></div>
            	<div class="colgajos"><img src="cms/<? echo $art_imagen[2];?>" width="140" /></div>
            	<div class="textoarticulos"><? echo $art_titulo[2];?></div>
                </a>
			</div>
        
       		<div id="gancho4">
            	<a href="articulo.php?articulo=<? echo $art_id[3];?>&contenido=<? echo $art_contenidoid[3];?>">
				<div class="ganchos"><img src="diseno/inicio/gancho1.png" /></div>
            	<div class="colgajos"><img src="cms/<? echo $art_imagen[3];?>" width="140" /></div>
            	<div class="textoarticulos"><? echo $art_titulo[3];?></div>
                </a>
			</div>
        
			<div id="gancho5">
				<div class="ganchos"><img src="diseno/inicio/gancho1.png" /></div>
                <a href="articulo.php?articulo=<? echo $art_id[4];?>&contenido=<? echo $art_contenidoid[4];?>">
            	<div class="colgajos"><img src="cms/<? echo $art_imagen[4];?>" width="140" /></div>
            	<div class="textoarticulos"><? echo $art_titulo[4];?></div>
                </a>
			</div>
		</div><!-- cierre contenedorcontenidos -->
	</div><!--CIERRE ARTICULOS-->        
</div>
</body>
</html>
