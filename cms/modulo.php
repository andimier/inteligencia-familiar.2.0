<?php 
	require_once("includes/requeridos.php");
	
	//=========================  INSERCION NUEVO ARTICULO ==============================//
	$mensaje = "";
	
	if(isset($_POST['insertararticulo'])){
		
		$titulo = $_POST['titulo'];
		$contenido_id = $_POST['contenido_id'];
		$imagenprovisional = "imagenes/pequenas/camara_01.png";
		
		$required_fields = array('titulo');
		
		foreach($required_fields as $fieldname){
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))){
				$errores[] = $fieldname;	
			}
		}
		
		if(empty($errores)){
			$query = "INSERT INTO articulos (contenido_id, titulo, imagen1, imagen2, imagen3) 
					  VALUES ($contenido_id, '$titulo', '$imagenprovisional', '$imagenprovisional', '$imagenprovisional')";
					 
			if($resultado = mysql_query($query, $connection)){
				$mensaje = "El articulo se ha creado correctamente";	
			}else{
				$mensaje = "No se pudo  -" . mysql_error(); 	
			}
		}else{
			$mensaje = "Debes ingresar un titulo!!";
		}
	}

	
	//=========================  TRAER LOS ARTICULOS ==============================//
	
	if(isset($_GET['modulo_id'])){
		
		$modulo_id = $_GET['modulo_id'];
		$modulo_titulo = $_GET['modulo'];
		
		$q_articulos = "SELECT * FROM articulos WHERE contenido_id = $modulo_id ORDER BY fecha DESC";
		$grupo_articulos = mysql_query($q_articulos, $connection);
	}
	
		
	require_once("cabeza.php");
	
?>    

<div class="col2">
	<h3><?php echo $modulo_titulo; ?></h3>
	
	Has click sobre el titulo del contenido para editarlo.<br /><br />
    <div class="mensaje"> <?php echo $mensaje; ?></div>
    <br />
	
    <?php while($articulo = mysql_fetch_array($grupo_articulos)):?>
		<a href="editar-articulo.php?articulo_id=<?php echo urlencode($articulo["id"]); ?>&modulo=<?php echo $modulo_titulo; ?>">
		<li><?php echo $articulo["titulo"]; ?></li>
        </a><br />
	<?php endwhile; ?>
   
   <hr />
   <h3>Insertar nuevo Artículo en este módulo</h3>
    Titluo:
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="tabla"       value="articulos" />
        <input type="hidden" name="contenido_id"   value="<?php echo $modulo_id; ?>" />
        <input type="text"   name="titulo"  value="" size="50" maxlength="50" />
        <input type="submit" name="insertararticulo" value="Insertar Publicacion"/>
  	</form>
 


</div>
<?php require("includes/footer.php");?>
