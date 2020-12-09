	
	<br />
	<hr />
	
	<h3>Imagenes de este Articulo</h3>
   	
    Insertar una nueva imagen en este articulo<br /><br />
    <?php $redireccion = '../editar-articulo.php?articulo_id='; ?>
    
     <form action="edicion/insertarimagen1.php" enctype="multipart/form-data" method="post">
     
        <input type="hidden" name="campo_id"  value="<?php echo $id; ?>" />
        <input type="hidden" name="tabla"     value="imagenes_articulos" />
        <input type="hidden" name="campo"     value="articulo_id" />
        <input type="hidden" name="modulo"    value="<?php echo $modulo; ?>" />
        
        <input type="hidden" name="redireccion"     value="<?php echo $redireccion; ?>" />
        
        <input type="file"   name="nombre_archivo" />
        <input type="submit" name="insertarimagen" value="Insertar Imagen"/>
  	</form>
	
	<hr />
	<br />

    <?php while($imagenes = mysql_fetch_array($grupo_imagenes_articulo)): ?>
		  <?php 
          $explotarnombre = explode('/', $imagenes['imagen1']); 
          $nombrearchivo = $explotarnombre[2]; 
          ?>
            
          <img src="<?php echo $imagenes['imagen1']; ?>"  width="150" /> &nbsp; <?php echo $nombrearchivo; ?> -
          <!--<img src="<?php //echo $imagenes['imagen3']; ?>"  width="150" /> &nbsp; <?php //echo $imagenes['imagen3']; ?> - -->
          <a href="edicion/eliminarimagenarticulo.php?imagen_id=<?php echo $imagenes['id'];?>&articulo_id=<?php echo $id; ?>&modulo=<?php echo $modulo; ?>" onClick="return confirm('En realidad deseas eliminar esta imagen?')">Eliminar Imagen</a><br /><br />
    <?php endwhile; ?>
    

    

