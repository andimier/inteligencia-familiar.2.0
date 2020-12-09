<?php
require_once("includes/sesion.php");
require_once("includes/connection.php");
require_once("includes/functions.php");
require_once("../utils/phpfunctions.php");
encontrar_seccion_y_contenido_seleccionados();
require_once("editor.php");

require_once("cabeza.php");?>

<div class="col2">
	<h3>MODULOS </h3>

    Haz click sobre el titulo del contenido para editarlo.<br /><br /><br />

	<?php
		$q_articulos = "SELECT * FROM contenidos WHERE contenido_id = 8";
		$grupo_modulos = phpMethods('query', $q_articulos);
	?>
    <?php while($modulo = phpMethods('fetch-array', $grupo_modulos)):?>
		<a href="modulo.php?modulo=<?php echo $modulo['titulo']; ?>&modulo_id=<?php echo urlencode($modulo["id"]); ?>"><?php echo $modulo["titulo"]; ?></a><br /><br />
	<?php endwhile; ?>

</div>
<?php require("includes/footer.php");?>
