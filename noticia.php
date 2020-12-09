<?
require_once("includes/connection.php");
$mensaje = "";
$noticia_id = $_GET['noticia'];


// =========================== SELESCCION DEL ARTICULO TRAIDO ======================================///
$noti_titulo;
$noti_fecha; 
$noti_contenidos;
$noti_imagen;

$q_noticias = "SELECT * FROM noticias WHERE id = $noticia_id ORDER BY fecha DESC LIMIT 1";
$y = (mysql_query($q_noticias, $connection));

if(mysql_num_rows($y) == 0){
	$mensaje = "No se encontraron noticias";
	$noti_titulo[]     = "";;
	$noti_fecha[]      = "";
	$noti_contenidos[] = "";
}else{
	while($noticia1 = (mysql_fetch_array($y))){
	 	$noti_titulo[]     = $noticia1['titulo']; 
     	$noti_contenidos[] = $noticia1['contenido']; 
	 	$noti_fecha[]      = $noticia1['fecha'];
		$noti_imagen[]     = $noticia1['imagen2'];
	}
}


// ======================= SELESCCION DE TODAS LAS NOTICIAS ======================================///

$q_noticias= "SELECT * FROM noticias ORDER BY fecha DESC";
$z = (mysql_query($q_noticias, $connection));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $noti_titulo[0]; ?> - Inteligencia Familiar</title>
<? require_once('requeridos.php');?>
</head>

<body>
	<? require_once('cabezote.php');?>
    <? require_once('cuerpos/cuerponoticias.php');?>
    <? require_once('cuerpos/masnoticias.php')?> 
    
		</body>
</html>