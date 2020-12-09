<?php 
require_once("includes/sesion.php");
require_once("includes/connection.php");
require_once("includes/functions.php");
encontrar_seccion_y_contenido_seleccionados();
require_once("editor.php");

require_once("cabeza.php");?>    

<div class="col2">
	<h3>Base de Datos de Contactos: </h3>
	
    <?
	$contactos = "SELECT * FROM contactos ORDER BY id DESC";
	$grupocontactos = mysql_query($contactos, $connection);
	?>
    
    <div id="contactos">
        <? while($contacto = mysql_fetch_array($grupocontactos)):?>
            <div id="tabla"><? echo $contacto["nombre"]; ?></div>
            <div id="tabla"><? echo $contacto['mail']; ?></div>
            <br />
        <? endwhile; ?>
	</div>
</div>
<?php require("includes/footer.php");?>
