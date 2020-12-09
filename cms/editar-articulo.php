<?php 
	require_once("includes/requeridos.php");
	
	$mensaje = "";
		
	if(intval($_GET['articulo_id']) == 0){
		header("Location: content.php");	
		exit;
	}else{
		$id = $_GET['articulo_id'];
		$grupo_imagenes_articulo = traer_imagenes_articulo_por_id($id); 
	}
	
	$modulo = $_GET['modulo'];
	
	require_once('edicion/cambioimagen1.php'); 	
	require_once("edicion/actualizaciondecontenidos.php");
	traer_articulo_seleccionado();
	
	$tabla	   = "articulos";
	$id        = $articulo_seleccionado['id'];
	$modulo_id = $articulo_seleccionado['contenido_id'];
	$fecha     = $articulo_seleccionado['fecha'];
	$titulo    = $articulo_seleccionado['titulo']; 
	$contenido = $articulo_seleccionado['contenido'];
	
	$imagenprincipal = $articulo_seleccionado['imagen1'];
	
	$tituloboton     = "eliminar articulo";
	
	require_once("cabeza.php");

?>    

<div class="col2">
	
	<?php $archivo_eliminar = 'edicion/eliminararticulo.php'; ?>
		
	<h3><?php echo $modulo; ?></h3>
	<?php echo $titulo; ?><br /><br />
	
	<div id="eliminar_btn"><?php require_once("edicion/formularioeliminararticulo.php"); ?></div>
	
    <div class="mensaje"> <?php echo $mensaje; ?></div>
	<br />
	
    
	<?php require_once("edicion/formularioedicion1.php"); ?>
    
    <!-- ============================= IMAGENES DE PUBLICACIONES ==========================-->
    <?php require_once('edicion/imagenesarticulos.php'); ?>
    
</div>

<div class="col3" >
    <!-- ==================== IMAGEN PRINCIPAL DEL ARTICULO =====================-->
	<?php require_once('edicion/imagenprincipal.php'); ?>
</div>

<?php require("includes/footer.php");?>
