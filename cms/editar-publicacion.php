<?php
	require_once("includes/requeridos.php");
	
	$mensaje = "";
	$mensaje2 = "";
	$imagen = "";
	$mensajeimagen = "";
		
	if(intval($_GET['publicacion_id']) == 0){
		header("Location: content.php");	
		exit;
	}else{
		$id = $_GET['publicacion_id'];
		$grupo_imagenes = traer_imagenes_publicacion_por_id($id); 
	}
	
	require_once('edicion/cambioimagen1.php');
	require_once("edicion/actucont_publicacion.php");
	
	traer_publicacion_seleccionada(); 
	//Sí esto se pone al inicio del documento, al actualizar no se ven los cambios, pero sí se hacen 
	
	//========== PARAMETROS FORMULARIO ACTUALIZACION DE CONTENIDOS =================//
	
	$tabla      = "publicaciones";
	$id        	= $publicacion_seleccionada['id'];
	$fecha     	= $publicacion_seleccionada['fecha'];
	$titulo    	= $publicacion_seleccionada['titulo']; 
	$contenido 	= $publicacion_seleccionada['contenido'];
	$ficha_tecnica = $publicacion_seleccionada['ficha_tecnica'];
	
	$imagenprincipal = $publicacion_seleccionada['imagen1'];
	
	$tituloboton = "Eliminar Publicacion";

	require_once("cabeza.php");

?>

<div class="col2">

	Editar Publicación: <?php echo $publicacion_seleccionada['titulo'];?>
    <br /><br />
      
	<? $archivo_eliminar = 'edicion/eliminarpublicacion.php'; ?>
	<? echo $mensaje; ?>
	
    <? require_once("edicion/formularioedicion1.php"); ?>
	<? require_once("edicion/formularioeliminar1.php"); ?>
    <div class="etiquetagris"><a href="editar-ficha.php?publicacion_id=<? echo $id; ?>">Editar Ficha Técnica</a></div>
    <br />
    <!-- ============================= IMAGENES DE PUBLICACIONES ==========================-->
    
  	<? require_once('edicion/imagenespublicaciones.php'); ?>
  
</div>
   
<div class="col3" >
    <!-- ======================== IMAGEN PRINCIPAL DE LA PUBLICACION =====================-->
	<? require_once('edicion/imagenprincipal.php'); ?>
</div>
