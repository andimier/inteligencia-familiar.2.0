<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="estilos/fuentes.css" type="text/css" media="screen" />
<link rel="stylesheet" href="estilos/estilos.css" type="text/css" media="screen" />
<link rel="stylesheet" href="estilos/menu.css"    type="text/css"media="screen">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/jquery.roundabout.js"></script>
<script src="js/general.js"></script>
</head>

<body>
<div id="cabezote">
	<div id="contenido_cabezote">
		<div id="logo"><img src="diseno/inicio/logo.jpg"  /></div>
		
		<div id="contenedortitulos">
			<div id="titulointeligencia">Inteligencia Familiar</div>
	
    		<div id="nombremel">María Elena López</div>
    		<div id="frasecabezote">Para Crecer en Familia!</div>
    	</div>
        
    	<div id="noticiascabezote">
        	<div id="ganchocabezote"></div>
        	<div id="colgajocabezote"></div>
    	</div>
        
    	<div id="noticiacabezote">
    		<div id="titulonoticiascabezote">NOTICIAS</div>
        	<div id="nombrenoticiacabezote">Noticia de Junio</div>
        </div>
    </div>
</div>

<div id="franjamenu">
	<div id="menu">
    	<div class="link"><a href="index2.php">INICIO</a></div>
    	<div class="link"><a href="inteligencia-familiar.php">inteligencia familiar</a> </div>
    	<div class="link"><a href="servicios.php">servicios</a> </div>
        <div class="link"><a href="publicaciones.php">publicaciones</a> </div>
    	<div class="link"><a href="perfil.php">perfil</a> </div>
        <div class="link3">ARTÍCULOS </div>
        
        <div class="link"><a href="contacto.php">contacto</a> </div>
        <!--
        <?php
		while($seccion = mysql_fetch_array($secciones)): ?>
		<div class="link"><? echo $seccion['titulo']; ?></div>
		<?php endwhile; ?>
		-->
	</div><!--CIERRE MENU-->
    
</div>

<div id="franjamenu2">
	<div id="menu2">
    	<div class="link2"><a href="afecto.php">Afecto</a></div>
    	<div class="link2"><a href="padres-seguros.php">Padres Seguros</a> </div>
    	<div class="link2"><a href="disciplina-positiva.php">Disciplina Positiva</a> </div>
        <div class="link2"><a href="inteligencia-emocional.php">Inteligencia Emocional</a> </div>
    	<div class="link2"><a href="vida-en-pareja.php">Vida en Pareja</a> </div>
	</div><!--CIERRE MENU-->
    
</div>

<div class="andi">Andi</div>
</body>
</html>
<script>
$(window).load(function() {
	
	//$('.link3').click (arribaabajo);
	
	function arribaabajo () {
		//$('.link3').unbind('click');
	  	
	  	if($("#franjamenu2:first").is(":hidden")){
	  		$("#franjamenu2").slideDown("slow");
	  	}
	}
});

</script>