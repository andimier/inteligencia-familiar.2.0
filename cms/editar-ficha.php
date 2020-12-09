<?php
	require_once("includes/requeridos.php");
	
	$mensaje = "";
		
	if(intval($_GET['publicacion_id']) == 0){
		header("Location: content.php");	
		exit;
	}else{
		$id = $_GET['publicacion_id'];
	}
	
	require_once("edicion/actu_ficha.php");
	traer_publicacion_seleccionada(); 
	//Sí esto se pone al inicio del documento, al actualizar no se ven los cambios, pero sí se hacen 
	
	//========== PARAMETROS FORMULARIO ACTUALIZACION DE CONTENIDOS =================//
	$tabla = "publicaciones";
	$id    = $publicacion_seleccionada['id'];
	$ficha = $publicacion_seleccionada['ficha_tecnica'];
	
	require_once("cabeza2.php");

?>

<div class="col2">
	<div class="titulos1">Ficha Técnica:</div>
	Publicación: <?php echo $publicacion_seleccionada['titulo'];?><br /><br />
       
	<? 
	echo $mensaje; 
	require_once("edicion/formularioedicion2.php");
	?>
    <div class="etiquetagris"><a href="editar-publicacion.php?publicacion_id=<? echo $id; ?>">Volver a la Publicacion</a></div>
    <br />
</div>
    
  
