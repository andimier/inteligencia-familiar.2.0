<?php
	require_once("includes/sesion.php");
	require_once("includes/connection.php");
	require_once("../utils/phpfunctions.php");
	require_once("includes/functions.php");

	encontrar_seccion_y_contenido_seleccionados();
	require_once("editor.php");

	$mensaje = "";

	if(isset($_POST['insertarpublicacion'])){
		$titulo = $_POST['titulo'];

		$errores = array();
		$required_fields = array('titulo');
		$imagenprovisional = "imagenes/pequenas/camara_01.png";

		foreach($required_fields as $fieldname){
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))){
				$errores[] = $fieldname;
			}
		}

		if(empty($errores)){
			$query = "INSERT INTO publicaciones (titulo, imagen1, imagen2, imagen3) VALUES ('$titulo', '$imagenprovisional', '$imagenprovisional', '$imagenprovisional')";
			if($result = mysql_query($query, $connection)){
				$mensaje = "La publicacion se ha creado correctamente";
			}
		}else{
				$mensaje = "Debes ingresar un titulo!!";
			}

	}

	require_once("cabeza.php");

?>

<div class="col2">
	<h3>Publicaciones</h3>

	Haz click sobre el titulo del contenido para editarlo.<br /><br />

	<div class="mensaje"> <?php echo $mensaje; ?></div>
	<?php
	$grupo_publicaciones = todas_las_publicaciones();

    while($pub = mysql_fetch_array($grupo_publicaciones)){
		echo "<a href=\"editar-publicacion.php?publicacion_id=" . urlencode($pub["id"]) . "\"> {$pub["fecha"]} &nbsp; &nbsp;  {$pub["titulo"]}</a><br /><br />";
	}
	?>

    <hr />
    <h3>Insertar nueva Publicacion</h3>
    Titluo:
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="tabla"   value="imagenes_publicaciones" />
        <input type="text"   name="titulo"  value="" size="50" maxlength="50" />
        <input type="submit" name="insertarpublicacion" value="Insertar Publicacion"/>
  	</form>

</div>


</div>
<?php require("includes/footer.php");?>
