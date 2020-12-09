<? 
require_once("includes/connection.php");
require_once('descargapdf.php');

$q_perfil= "SELECT * FROM contenidos WHERE seccion_id = 4 LIMIT 1";
$x = (mysql_query($q_perfil, $connection));

while($perfil = (mysql_fetch_array($x))){
	$id[]        = $perfil['id'];
	$fecha[]     = $perfil['fecha'];
	$titulo[]    = $perfil['titulo']; 
    $contenido[] = $perfil['contenido']; 
}

$id_perfil = $id[0];

$q_foto= "SELECT * FROM imagenes_contenidos WHERE contenido_id = $id_perfil LIMIT 1";
$y = (mysql_query($q_foto, $connection));



$querypublicaciones= "SELECT * FROM publicaciones LIMIT 8";
$publicaciones = (mysql_query($querypublicaciones, $connection));

while($publicacion = mysql_fetch_array($publicaciones)){
	$id_publicacion[] = $publicacion['id'];
	$fecha_publicacion[] = $publicacion['fecha'];
	$imagen_publicacion[] = $publicacion['ruta_imagen']; 
	$titulo_publicacion[] = $publicacion['titulo']; 
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Perfil Maria Elena Lopez Jordan - Inteligencia Familiar</title>

<link rel="stylesheet" href="estilos/estilos.css" type="text/css" media="screen" />
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

<script src="js/jquery.roundabout.js" type="text/javascript"></script>
<script src="js/general.js" type="text/javascript"></script>

</head>

<body>
    
    <div class="contenedor2">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div id="titulo_publicaciones2">Publicaciones</div>
                <div class="vacio"></div>
				<div class="contenedorfloatleft">
                	<div class="my_carousel">
<div class="carousel_container">
<div id="carousel"></div>
<img src="diseno/inicio/carrusel1/izquierda.png" class="anterior"/>
<img src="diseno/inicio/carrusel1/derecha.png" class="siguiente"/>
</div>
<div class="caption_container">
<div id="captions"></div>
</div> 

<div class="carousel_data">

    <div class="carousel_item">
		<div class="imagen" ><img src="cms/<? echo $imagen_publicacion[0]; ?> "/></div>
		<div class="caption">
        	<a href="publicacion.php?publicacion=<? echo $id_publicacion[0];?>&fecha=<? echo $fecha_publicacion[0];?>">
			<? echo $titulo_publicacion[0]; ?>
            </a>
        </div>
	</div>

<div class="carousel_item">
<div class="imagen" style="width:140px; height:140px;"><img src="cms/<? echo $imagen_publicacion[1]; ?> "/></div>
<div class="caption"><a href="publicacion.php?publicacion=<? echo $id_publicacion[1];?>&fecha=<? echo $fecha_publicacion[1];?>"><? echo $titulo_publicacion[1]; ?></a></div>
</div>
<div class="carousel_item">
<div class="imagen"><img src="cms/<? echo $imagen_publicacion[2]; ?> "/></div>
<div class="caption"><a href="publicacion.php?publicacion=<? echo $id_publicacion[2];?>&fecha=<? echo $fecha_publicacion[2];?>"><? echo $titulo_publicacion[2]; ?></a></div>
</div>
<div class="carousel_item">
<div class="imagen"><img src="cms/<? echo $imagen_publicacion[3]; ?> "/></div>
<div class="caption"><a href="publicacion.php?publicacion=<? echo $id_publicacion[3];?>&fecha=<? echo $fecha_publicacion[3];?>"><? echo $titulo_publicacion[3]; ?></a></div>
</div>
</div> 
</div>


                </div>
                <div class="contenedorfloatleft"><? require_once('carrusel3.php');?></div>
                <div class="vacio"></div><br /><br />
      		</div><!-- cierre contenedorcontenidos -->
    	</div><br />
    </div>

    
</body>
</html>