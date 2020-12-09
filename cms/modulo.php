<?php
	require_once("includes/requeridos.php");
	require_once("../utils/phpfunctions.php");

	$mensaje = "";

	function getQuery($table, $query_array) {
		$columns = "";
		$values = "";
		$i = 0;

		foreach($query_array as $key => $val) {
			$columns .= $key;
			$values .= $val;

			if ($i < (count($query_array) - 1)) {
				$columns .= ", ";
				$values .= ", ";
			}
			$i++;
		}

		return " INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ")";
	}

	if (isset($_POST['insertararticulo'])) {

		$titulo = $_POST['titulo'];
		$contenido_id = $_POST['contenido_id'];
		$imagenprovisional = "imagenes/pequenas/camara_01.png";

		$required_fields = array('titulo');

		foreach($required_fields as $fieldname){
			if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))) {
				$errores[] = $fieldname;
			}
		}

		if (empty($errores)) {
			date_default_timezone_set('America/Bogota');
			$date = date("Y-m-d");

			$values = array (
				'contenido_id' => $contenido_id,
				'fecha' => "'{$date}'",
				'titulo' => "'{$titulo}'",
				'contenido' => "'Cambia este texto.'",
				'imagen1' => "'{imagenprovisional}'",
				'imagen2' => "'{imagenprovisional}'",
				'imagen3' => "'{imagenprovisional}'",
			);

			$query = getQuery('articulos', $values);

			if ($resultado = phpMethods('query', $query)){
				$mensaje = "El articulo se ha creado correctamente";
			} else {
				$mensaje = "No se pudo  -" . phpMethods('error', null);
			}
		}else{
			$mensaje = "Debes ingresar un titulo!!";
		}
	}


	// TRAER LOS ARTICULOS

	if (isset($_GET['modulo_id'])) {
		$modulo_id = $_GET['modulo_id'];
		$modulo_titulo = $_GET['modulo'];

		$q_articulos = "SELECT * FROM articulos WHERE contenido_id = $modulo_id ORDER BY fecha DESC";
		$grupo_articulos = phpMethods('query', $q_articulos);
	}


	require_once("cabeza.php");
?>

<div class="col2">
	<h3><?php echo $modulo_titulo; ?></h3>

	<h3>Insertar nuevo Artículo en este módulo</h3>
    Titluo:
    <form enctype="multipart/form-data" method="post">
        <input type="hidden" name="tabla"       value="articulos" />
        <input type="hidden" name="contenido_id"   value="<?php echo $modulo_id; ?>" />
        <input type="text"   name="titulo"  value="" size="50" maxlength="50" />
        <input type="submit" name="insertararticulo" value="Insertar Publicacion"/>
  	</form>
    <br />
    <hr />

    <div class="mensaje"> <?php echo $mensaje; ?></div>
    <br />

	Has click sobre el titulo del contenido para editarlo.
	<ul>
		<?php while($articulo = phpMethods('fetch-array', $grupo_articulos)): ?>
			<li class="item">
				<a href="editar-articulo.php?articulo_id=<?php echo urlencode($articulo["id"]); ?>&modulo=<?php echo $modulo_titulo; ?>">
					<span><?php echo $articulo["fecha"]; ?><span> &nbsp;
					<?php echo $articulo["titulo"]; ?>
				</a>
			</li>
		<?php endwhile; ?>
	</ul>

</div>
<?php require("includes/footer.php");?>
