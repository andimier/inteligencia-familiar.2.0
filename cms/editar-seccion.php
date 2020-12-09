<?php 
	require_once("includes/sesion.php");
	require_once("includes/connection.php");
	require_once("includes/functions.php");
	
	$mensaje = "";
	
	encontrar_seccion_y_contenido_seleccionados();
	require_once("editor.php");

	$id = mysql_prep($_GET['seccion']);
	
	/*$queryfoto = "SELECT * FROM secciones_fotos WHERE seccion_id = {$id} AND contenido_id = 0";
	$foto = mysql_query($queryfoto, $connection);
	confirm_query($foto);
	
	while($resultado_foto = mysql_fetch_array($foto)){
		$ruta = $resultado_foto['ruta'];
		$foto_id = $resultado_foto['id'];
		//$seccion_id = $resultado_foto['seccion_id'];
	}*/
	
	$q_contenido = "SELECT * FROM contenidos WHERE seccion_id = {$id}";
	$contenidos = mysql_query($q_contenido, $connection);
	confirm_query($contenidos); 	
		
	
?>
    
<?php require_once("cabeza.php");?>    

<div class="col2">
		
	<h3><?php echo $seccion_seleccionada['titulo'];?></h3>

	<!-- <a href="nueva_noticia.php?mes=<?php echo $mes_seleccionado['id'];?>"><img src="iconos/boton_05.png"/></a> -->

	Haz click sobre el titulo del contenido para editarlo.<br /><br />
	<div class="mensaje"> <?php echo $mensaje; ?></div>
	<br />
	
	<?php while($contenido = mysql_fetch_array($contenidos)): ?>
		<a href="editar-contenido.php?contenido_id=<?php echo urlencode($contenido['id']); ?>"><li><?php echo $contenido["titulo"]; ?></li></a><br />
	<?php endwhile; ?>

</div>


</div>
<?php require("includes/footer.php");?>
