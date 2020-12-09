<?php


// =========================== SELESCCION DE LA NOTICIA ======================================///
$noti_titulo;
$noti_contenidos; 
$noti_fecha;
$noti_imagen;
		
$q_noticia= "SELECT * FROM noticias ORDER BY fecha DESC LIMIT 1";
$y = (mysql_query($q_noticia, $connection));

if(mysql_num_rows($y) == 0){
	$mensaje = "No se encontraron noticias";
	$noti_titulo[]     = "";;
	$noti_fecha[]      = "";
	$noti_contenidos[] = "";
	$noti_imagen[] = "";
}else{
	$mensaje = "";
	while($noticia = (mysql_fetch_array($y))){
		$noti_titulo[]     = $noticia['titulo']; 
    	$noti_contenidos[] = $noticia['contenido']; 
		$noti_fecha[]      = $noticia['fecha']; 
		$noti_imagen[]     = $noticia['imagen2']; 
	}
}


// ======================= SELESCCION DE TODAS LAS NOTICIAS ======================================///

//$start = '2012-10-01';
//$end = 2012-11-30;
//$q_articulos2= "SELECT * FROM articulos WHERE contenido_id = $id_afecto GROUP BY TIMESTAMPDIFF(MONTH, '2012-01-01', '2012-12-31') ASC";

$q_noticias= "SELECT * FROM noticias ORDER BY fecha DESC";
$z = (mysql_query($q_noticias, $connection));


?>



