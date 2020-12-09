<?php 
require_once("includes/connection.php");

$query= "SELECT * FROM secciones";
$secciones = (mysql_query($query, $connection));

$querycont1= "SELECT * FROM contenidos WHERE seccion_id = 1 AND contenido_id = 8";
$contenidos1 = (mysql_query($querycont1, $connection));

while($contenido1 = mysql_fetch_array($contenidos1)){
	$titulos[] = $contenido1['titulo'];
	$parrafo[] = $contenido1['contenido'];
}

$querycont3= "SELECT * FROM contenidos WHERE seccion_id = 3";
$contenidos3 = (mysql_query($querycont3, $connection));

$queryperfil= "SELECT * FROM contenidos WHERE seccion_id = 4";
$contenidoperfil = (mysql_query($queryperfil, $connection));

$q_articulos= "SELECT * FROM articulos ORDER BY fecha DESC LIMIT 5";
$articulos = (mysql_query($q_articulos, $connection));

/*while($articulo = mysql_fetch_array($articulos)){
	$art_id[]     = $articulo['id'];
	$art_fecha_[] = $articulo['fecha'];
	$art_imagen[] = $articulo['imagen1']; 
	$art_titulo[] = $articulo['titulo']; 
	$art_contenidoid[]     = $articulo['contenido_id'];
}*/
?>