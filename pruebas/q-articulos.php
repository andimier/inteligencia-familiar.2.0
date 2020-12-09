<?
$q_inteligencia= "SELECT * FROM contenidos WHERE id = $id_contenido ";
$x = (mysql_query($q_inteligencia, $connection));

while($seccion = (mysql_fetch_array($x))){
	$id[]    	  = $seccion['id']; 
	$titulos[]    = $seccion['titulo']; 
    $contenidos[] = $seccion['contenido'];
}

$id_modulo = $id[0];

// =========================== SELESCCION DEL ARTICULO ======================================///
$art_titulo;
$art_contenidos; 
$art_fecha;
$art_imagen;
		
$q_articulos= "SELECT * FROM articulos WHERE contenido_id = $id_modulo ORDER BY fecha DESC LIMIT 1";
$y = (mysql_query($q_articulos, $connection));

if(mysql_num_rows($y) == 0){
	$mensaje = "No se encontraron artículos en este módulo";
	$art_titulo[]     = "";;
	$art_fecha[]      = "";
	$art_contenidos[] = "";
	$art_imagen[] = "";
}else{
	$mensaje = "";
	while($articulo1 = (mysql_fetch_array($y))){
		$art_titulo[]     = $articulo1['titulo']; 
    	$art_contenidos[] = $articulo1['contenido']; 
		$art_fecha[]      = $articulo1['fecha']; 
		$art_imagen[]      = $articulo1['ruta_imagen']; 
	}
}


// ======================= SELESCCION DE TODOS LOS ARTICULOS DEL MODULO ======================================///

//$start = '2012-10-01';
//$end = 2012-11-30;
//$q_articulos2= "SELECT * FROM articulos WHERE contenido_id = $id_afecto GROUP BY TIMESTAMPDIFF(MONTH, '2012-01-01', '2012-12-31') ASC";

$q_articulos2= "SELECT * FROM articulos WHERE contenido_id = $id_modulo	ORDER BY fecha DESC";
$z = (mysql_query($q_articulos2, $connection));


?>



