<?php
	function get_is_logged_in(){
		return isset($_SESSION['user_id']);
	}

	function getUser($username, $hashed_password) {
		$q = "SELECT id, username FROM usuarios WHERE username = '{$username}' AND hashed_password = '{$hashed_password}'";
        $r = phpMethods('query', $q);

		if ($r == null || $r == false || phpMethods('num-rows', $r) == 0) {
			return null;
		}

		return $r;
	}

	function getErrors() {
		$errors = array();
		$required_fields = array(
			'usuario',
			'contrasena'
		);

		foreach($required_fields as $fieldname){
			if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
				$errors[] = $fieldname;
			}
		}

		return $errors;
	}

	function getHash($password) {
		//algoritmos de incriptacion
		//$hashed_password = md5($password);
		//$hashed_password = hash($password);
		return sha1($password);
	}

	if (!isset($_SESSION)) {
		session_start();
	}

	if (get_is_logged_in()) {
		header("Location: content.php");
		exit;
	}

	$error_message = "";

	if (!isset($_POST['submit'])) {
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$error_message .= "Has cerrado tu sesión.";
		}

		$username = "";
		$password = "";

		return;
	}

	$errors = getErrors();

	if (!empty($errors)) {
		$error_message = "<p>Por favor ingresa los siguientes campos:</p>";

		$error_message = "<p>Hubo ";
		$error_message .= count($errors) . " ";
		$error_message .= count($errors) == 1 ? 'error' : 'errores';
		$error_message .= " en el formulario:</p>" ;
		$error_message .= "<ul>";

		foreach ($errors as $error) {
			$error_message .= " <li> " . $error . "</li>";
		}

		$error_message .= "</ul>";

		return;
	}

	$username = strip_tags(trim(mysql_prep($_POST['usuario'])));
	$password = strip_tags(trim(mysql_prep($_POST['contrasena'])));
	$hashed_password = getHash($password);
	$user = getUser($username, $hashed_password);

	if ($user == null) {
		$error_message .= "El nombre de usuario o contraseña pueden estar errados.";
		return;
	}

	$usuario_encontrado = phpMethods('fetch-array',$user);

	if ($usuario_encontrado) {
		$_SESSION['user_id'] = $usuario_encontrado['id'];
		$_SESSION['username'] = $usuario_encontrado['username'];

		header("Location: content.php");
		exit();
	}
?>
