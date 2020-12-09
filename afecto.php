<?
require_once("includes/connection.php");
$mensaje = "";
//afecto ID = 9
//padres seguros ID = 10
//disciplina positiva ID = 11
$id_contenido = 9;

require_once('qs/q-articulos.php');

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Afecto - Inteligencia Familiar</title>
<? require_once('requeridos.php');?>
</head>

<body>
	<? include_once('analyticstracking.php');?>
	<? require_once('cabezote.php');?>
    <? require_once('cuerpos/cuerpoarticulos.php');?>
    <? require_once('cuerpos/masarticulos.php')?> 
    
		</body>
</html>