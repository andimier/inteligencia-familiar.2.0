<?
require_once("includes/connection.php");
$mensaje = "";
$articulo_id = $_GET['articulo'];
$contenido_id = $_GET['contenido'];

$q_inteligencia= "SELECT * FROM contenidos WHERE id = $contenido_id";
$x = (mysql_query($q_inteligencia, $connection));

while($seccion = (mysql_fetch_array($x))){
	 $titulos[]    = $seccion['titulo']; 
     $contenidos[] = $seccion['contenido'];
	 $id[] = $seccion['id'];
}

// =========================== SELESCCION DEL ARTICULO TRAIDO ======================================///
$art_titulo;
$art_fecha; 
$art_contenidos;
$art_imagen;

$q_articulos= "SELECT * FROM articulos WHERE id = $articulo_id ORDER BY fecha DESC LIMIT 1";
$y = (mysql_query($q_articulos, $connection));

if(mysql_num_rows($y) == 0){
	$mensaje = "No se encontraron artículos en este módulo";
	$art_titulo[]     = "";;
	$art_fecha[]      = "";
	$art_contenidos[] = "";
}else{
	while($articulo1 = (mysql_fetch_array($y))){
	 	$art_titulo[]    = $articulo1['titulo']; 
     	$art_contenidos[] = $articulo1['contenido']; 
	 	$art_fecha[] = $articulo1['fecha'];
		$art_imagen[] = $articulo1['ruta_imagen'];
	}
}

// ======================= SELESCCION DE TODOS LOS ARTICULOS POR MODULO ======================================///

$q_articulos2= "SELECT * FROM articulos WHERE contenido_id = $contenido_id	ORDER BY fecha DESC";
$z = (mysql_query($q_articulos2, $connection));



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $art_titulo[0]; ?> - Inteligencia Familiar</title>
<? require_once('requeridos.php');?>
</head>

<body>
	<? require_once('cabezote.php');?>
    <? require_once('cuerpoarticulos.php');?>
    <? require_once('masarticulos.php')?> 
    
		</body>
</html>