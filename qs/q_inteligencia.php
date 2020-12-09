<?php
	require_once("includes/connection.php");
	$queryinteligencia= "SELECT * FROM contenidos WHERE seccion_id = 1";
	$x = (mysql_query($queryinteligencia, $connection));

	while($seccion = (mysql_fetch_array($x))){
		$titulos[]    = $seccion['titulo'];
		$contenidos[] = $seccion['contenido'];
	}

	$qsubcont= "SELECT * FROM contenidos WHERE seccion_id = 1 AND contenido_id = 8";
	$y = (mysql_query($qsubcont, $connection));

	while($subseccion = (mysql_fetch_array($y))){
		$id_2[] 	  = $subseccion['id'];;
		$titulo2[] 	  = $subseccion['titulo'];
		$contenido2[] = $subseccion['contenido'];
	}

	// ========================================= BUSQUEDA DE CANTIDAD DE ARTICULOS =============================

	$id1 = $id_2[0];
	$id2 = $id_2[1];
	$id3 = $id_2[2];
	$id4 = $id_2[3];
	$id5 = $id_2[4];

	$q_articulos1= "SELECT id FROM articulos WHERE contenido_id = $id1";
	$a = (mysql_query($q_articulos1, $connection));
	$fila1 = mysql_num_rows($a);

	$q_articulos2= "SELECT id FROM articulos WHERE contenido_id = $id2";
	$b = (mysql_query($q_articulos2, $connection));
	$fila2 = mysql_num_rows($b);

	$q_articulos3= "SELECT id FROM articulos WHERE contenido_id = $id3";
	$c = (mysql_query($q_articulos3, $connection));
	if(mysql_num_rows($c) == 0){
		$fila3 = 'Sin articulos';
	}else{
		$fila3 = mysql_num_rows($c);
	}

	$q_articulos4= "SELECT id FROM articulos WHERE contenido_id = $id4";
	$d = (mysql_query($q_articulos4, $connection));

	if(mysql_num_rows($d) == 0){
		$fila4 = '* SIN';
	}else{
		$fila4 = mysql_num_rows($d);
	}

	$q_articulos5 = "SELECT id FROM articulos WHERE contenido_id = $id5";
	$e = (mysql_query($q_articulos5, $connection));

	if(mysql_num_rows($e) == 0){
		$fila5 = '* SIN';
	}else{
		$fila5 = mysql_num_rows($e);
	}
?>
