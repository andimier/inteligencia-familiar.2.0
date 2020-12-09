<?php
    $mensaje = "";
	$mensaje2 = "";

	if (isset($_POST['submit'])) {
		$errores = array();
		$required_fields = array('username','password');
		//$errores = array_merge($errores, $required_fields);
		//$errores = array_merge($errores, check_required_fields($required_fields, $_POST));
		foreach ($required_fields as $fieldname) {
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])  && !is_numeric($_POST[$fieldname]))){
				$errores[] = $fieldname;
			}
		}

		$username = trim(mysql_prep($_POST['username']));
		$password = trim(mysql_prep($_POST['password']));
		//algoritmos de incriptacion
		//$hashed_password = md5($password);
		//$hashed_password = hash($password);
		$hashed_password = sha1($password);


		if (empty($errores)) {
			$query = "INSERT INTO usuarios (username, hashed_password) VALUES ('{$username}','{$hashed_password}')";
			$result = phpMethods('query', $query);

			if ($result) {
				 $mensaje = "El usuario fué creado correctamente! <br /> <a href=\"content.php\"><h1>Comenzar</h1></a>";
			} else {
				 $mensaje = "No se creó el usuario!"	;
				 $mensaje .="<br />" . phpMethods('error', null);
			}
		}else{
			if(count($errores) ==1){
				 $mensaje = "Hubo un error en el formulario.";
			}else{
				 $mensaje = "Hubo " . count($errores) . " errores en el formulario.";
				 $mensaje = phpMethods('error', null);
			}
			 foreach($errores as $error){
				 $mensaje2 = "Por favor ingrese los siguientes campos: - " . $error . "<br/>";
			}
		}
	}else{
		$username = "";
		$password = "";
	}
?>