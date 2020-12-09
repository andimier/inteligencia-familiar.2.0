<?php
	function redirect_to($location = NULL){
		if ($location !=NULL){
			header("Location: {$location}");
			exit;
		}
	}

	function confirm_query($result_set){
		if(!$result_set){
			die("La busqueda en la Base de Datos fallo: " . mysql_error());
		}
	}

	//======================= SECCIONES ==============================//

	function todas_las_secciones(){
		global $connection;
		$query = "SELECT * FROM secciones ORDER BY id ASC";

		$grupo_secciones = phpMethods('query', $query);
		confirm_query($grupo_secciones);
		return $grupo_secciones;
	}

	function traer_seccion_por_id($seccion_id){
		global $connection;
		$query = "SELECT * FROM secciones WHERE id=" . $seccion_id ." LIMIT 1";

		$result_set = phpMethods('query', $query);
		confirm_query($result_set);

		if ($seccion = phpMethods('fetch-array', $result_set)) {
			return $seccion;
		}else{
			return NULL;
		}
	}

	//==================== PUBLICACIONES =========================================

	function todas_las_publicaciones(){
		global $connection;
		$query = "SELECT * FROM publicaciones ORDER BY fecha DESC";

		$grupo_publicaciones = mysql_query($query, $connection);
		confirm_query($grupo_publicaciones);
		return $grupo_publicaciones;
	}

	function traer_publicacion_por_id($publicacion_id){
		global $connection;
		$query = "SELECT * FROM publicaciones WHERE id =" . $publicacion_id ." LIMIT 1";

		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);

		if($contenido = mysql_fetch_array($result_set)){
			return $contenido;
		}else{
			return NULL;
		}
	}

	function traer_publicacion_seleccionada(){
		global $publicacion_seleccionada;

		if(isset($_GET['publicacion_id'])){
			$sel_publicacion = $_GET['publicacion_id'];
			$publicacion_seleccionada = traer_publicacion_por_id($sel_publicacion);
		}
	}

	//============  IMAGENES PUBLICACIONES ==================//


	function traer_imagenes_publicacion_por_id($id){
		global $connection;
		$query = "SELECT * FROM imagenes_publicaciones WHERE publicacion_id = $id";

		$grupo_imagenes = mysql_query($query, $connection);
		confirm_query($grupo_imagenes);
		return $grupo_imagenes;
	}


	//==================== NOTICIAS =========================================

	function todas_las_noticias(){
		global $connection;
		$query = "SELECT * FROM noticias ORDER BY fecha DESC";

		$grupo_noticias = mysql_query($query, $connection);
		confirm_query($grupo_noticias);
		return $grupo_noticias;
	}

	function traer_noticia_por_id($noticia_id){
		global $connection;
		$query = "SELECT * FROM noticias WHERE id =" . $noticia_id ." LIMIT 1";

		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);

		if($contenido = mysql_fetch_array($result_set)){
			return $contenido;
		}else{
			return NULL;
		}
	}

	function traer_noticia_seleccionada(){
		global $noticia_seleccionada;

		if(isset($_GET['noticia_id'])){
			$sel_noticia = $_GET['noticia_id'];
			$noticia_seleccionada = traer_noticia_por_id($sel_noticia);
		}
	}

	//============  IMAGENES NOTICIAS ==================//


	/*function traer_imagenes_publicacion_por_id($id){
		global $connection;
		$query = "SELECT * FROM imagenes_publicaciones WHERE publicacion_id = $id";

		$grupo_imagenes = mysql_query($query, $connection);
		confirm_query($grupo_imagenes);
		return $grupo_imagenes;
	}
	*/

	//====================  CONTENIDOS  =========================================//

	function traer_contenido_por_id($contenido_id){
		global $connection;
		$query = "SELECT * FROM contenidos WHERE id =" . $contenido_id ." LIMIT 1";

		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);

		if($contenido = mysql_fetch_array($result_set)){
			return $contenido;
		}else{
			return NULL;
		}
	}



	//===============================  SECCION Y CONTENIDO SELECCIONADO ==========================//

	function encontrar_seccion_y_contenido_seleccionados(){

		global $seccion_seleccionada;
		global $contenido_seleccionado;

		if(isset($_GET['seccion'])){
			$sel_seccion = $_GET['seccion'];
			$seccion_seleccionada = traer_seccion_por_id($sel_seccion);

			$sel_contenido = "";
			$contenido_seleccionado = NULL;

		}elseif(isset($_GET['contenido_id'])){
			$sel_contenido = $_GET['contenido_id'];
			$contenido_seleccionado = traer_contenido_por_id($sel_contenido);

			$sel_seccion = "";
			$seccion_seleccionada = NULL;

		}else{
			$sel_seccion = "";
			$sel_contenido = "";
			$seccion_seleccionada = NULL;
			$contenido_seleccionado = NULL;
		}
	}

	//============================= ARTICULOS ====================================

	function traer_articulo_por_id($articulo_id){
		global $connection;
		$query = "SELECT * FROM articulos WHERE id=" . $articulo_id ." LIMIT 1";

		$result_set = mysql_query($query, $connection);
		confirm_query($result_set);

		if($articulo = mysql_fetch_array($result_set)){
			return $articulo;
		}else{
			return NULL;
		}
	}

	function traer_articulo_seleccionado(){
		global $articulo_seleccionado;

		if(isset($_GET['articulo_id'])){
			$sel_articulo = $_GET['articulo_id'];
			$articulo_seleccionado = traer_articulo_por_id($sel_articulo);
		}
	}

	//============  IMAGENES ARTICULOS ==================//

	function traer_imagenes_articulo_por_id($id){
		global $connection;
		$query = "SELECT * FROM imagenes_articulos WHERE articulo_id = $id";

		$grupo_imagenes_articulo = phpMethods('query', $query);

		confirm_query($grupo_imagenes_articulo);

		return $grupo_imagenes_articulo;
	}

	function navegacion($seccion_seleccionada, $contenido_seleccionado){

		$grupo_secciones = todas_las_secciones();

		$verification_links = array(
			'publicaciones' => 'publicaciones.php',
			'artículos' => 'modulos.php',
			'other' => 'editar-seccion.php',
		);

		$links = array();

		while ($seccion = phpMethods('fetch-array', $grupo_secciones)) {

			$section = str_replace(' ', '-', strtolower($seccion['titulo']));

			if ($section == 'contacto') {
				continue;
			}

			$link_key = $section;

			if (!array_key_exists($section, $verification_links)) {
				$link_key = 'other';
			}

			array_push($links, array(
				'href' => $verification_links[$link_key],
				'section' => urlencode($seccion["id"]),
				'text' => str_replace('-', ' ', $section)
			));
		}

		array_push($links,
			array(
				'href' => 'noticias.php',
				'section' => 0,
				'text' => 'noticias'
			),
			array(
				'href' => 'contactos.php',
				'section' => 0,
				'text' => 'Base de Datos de Contactos'
			)
		);

		forEach ($links as $link) {
			$l = '<a href='. $link['href'];
			$l .= '?seccion="' . urlencode($link['section']) . '">';
			$l .= $link['text'];
			$l .= '</a></li><br />';

			echo $l;
		}
	}

?>