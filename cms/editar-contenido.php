<?php
	require_once("includes/requeridos.php");
	
	$mensaje = "";
	$mensaje2 = "";
	$imagen = "";
		
	if(intval($_GET['contenido_id']) == 0){
		header("Location: content.php");	
		exit;
	}
		
	require_once('edicion/cambioimagen1.php');	
	require_once("edicion/actualizaciondecontenidos.php");
	
	encontrar_seccion_y_contenido_seleccionados(); //Sí esto se pone al inicio del documento, al actualizar no se ven los cambios, pero sí se hacen 

	//========== PARAMETROS FORMULARIO ACTUALIZACION DE CONTENIDOS =================//
	
	$tabla 	   = "contenidos";
	$id        = $contenido_seleccionado['id'];
	$fecha     = $contenido_seleccionado['fecha'];
	$titulo    = $contenido_seleccionado['titulo']; 
	$contenido = $contenido_seleccionado['contenido'];
	
	$imagenprincipal = $contenido_seleccionado['imagen1'];
	
	require_once("cabeza.php");

?>

<div class="col2">

    <div class="titulos1"><?php echo $contenido_seleccionado['titulo'];?></div>
	<br />
	
    <div class="mensaje"> <?php echo $mensaje; ?></div>
	<br />
	
    <?php 	require_once("edicion/formularioedicion1.php"); ?>
    
    <!--<h3><a href="eliminar_noticia.php?noticia=<?php echo urlencode($contenido_seleccionado['id']);?>" onClick="return confirm('Eliminar Contenido?')" >
    <img src="iconos/basura_01.jpg" width="20"/>Eliminar Contenido</a>  &nbsp;/&nbsp;  <a href="content.php">Cancelar</a></h3>-->

</div>

<div class="col3" >
	<!-- ============================= IMAGEN PRINCIPAL DEL CONTENIDO =============================-->
	<?php require_once('edicion/imagenprincipal.php'); ?>
</div>

<?php require("includes/footer.php");?>
