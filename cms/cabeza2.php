<? encontrar_seccion_y_contenido_seleccionados(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INTELIGENCIA FAMILIAR</title>

<link rel="Stylesheet" type="text/css" href="estilos/estilos.css" />
<script type="text/javascript" src="edicion/editortexto2.js"></script>

</head>

<body>

<div id="cabezote"></div>

<div id="contenedor">

<div class="col1">
    	
        <div class="etiquetalogout">
            <a href="logout.php" onclick="return confirm('estas a punto de cerrar sesion, se perderan los cambios que no hayas guardado!')">CERRAR SESIÓN</a>
        </div>
        
        <br />
        
        <div id="sitioyusuario">
            WWW.INTELIGENCIAFAMILIAR.COM<br />
            Usuario: <?php echo $_SESSION['username']; ?>
        </div>
        
        <br /><br />
        
        <div class="titulos1">Secciones</div><br />
        <div class="secciones">
            <?php navegacion($seccion_seleccionada, $contenido_seleccionado)?>
        </div>
    
    </div>