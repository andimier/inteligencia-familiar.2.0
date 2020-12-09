<?
require_once("includes/connection.php");

$publicacion_id = $_GET['publicacion'];
$publicacion_fe = $_GET['fecha'];
//echo $publicacion_fe;


$q_publicacion= "SELECT * FROM publicaciones WHERE id = $publicacion_id";
$x = (mysql_query($q_publicacion, $connection));

while($publicacion = (mysql_fetch_array($x))){
	 $publi_titulo[]    = $publicacion['titulo']; 
	 $publi_fecha[] = $publicacion['fecha'];
	 $publi_contenido[] = $publicacion['contenido'];
	 $publi_ficha[] = $publicacion['ficha_tecnica'];
	 $publi_imagen[] = $publicacion['ruta_imagen_mediana'];
}

$q_publicaciones= "SELECT * FROM publicaciones ORDER BY fecha DESC";
$y = (mysql_query($q_publicaciones, $connection));

$q_imagenes_publicaciones= "SELECT * FROM imagenes_publicaciones WHERE publicacion_id = $publicacion_id";
$z = (mysql_query($q_imagenes_publicaciones, $connection));

$suma = 1; 

//====================================== BOTONES SANTERIOR Y SIGUIENTE ===========================================//

$menosuno = $publicacion_id - 1;
$masuno = $publicacion_id + 1;

$q_siguiente= "SELECT * FROM publicaciones WHERE fecha > '".$publicacion_fe."' ORDER BY fecha ASC LIMIT 1";
$siguiente = (mysql_query($q_siguiente, $connection));
/*echo "MAYOR <BR />";
while($sigue = (mysql_fetch_array($siguiente))){
      echo $sigue['fecha']. " <br />  ";
}
echo "<BR />";*/

$q_anterior= "SELECT * FROM publicaciones WHERE fecha < '$publicacion_fe' ORDER BY fecha DESC LIMIT 1";
$anterior = (mysql_query($q_anterior, $connection));

/*echo "MENOR <BR />";
while($atras = (mysql_fetch_array($anterior))){
     echo $atras['fecha'] . " <br />  ";
}*/




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo $publi_titulo[0];?> - Inteligencia Familiar</title>
<? require_once('requeridos.php');?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript" src="js/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />

<script type="text/javascript">
hs.graphicsDir = 'js/highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'glossy-dark';
hs.wrapperClassName = 'dark';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
if (hs.addSlideshow) hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
	opacity: .6,
	position: 'bottom center',
	hideOnMouseOut: true
	}
});

</script>



</head>

<body>
	<? require_once('cabezote.php');?>
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="titulosnegros">PUBLICACIONES</div>
            </div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
    
   <? require_once('infopublicacion.php'); ?>
                
            	<div class="contenedoranteriorsiguiente">
               		<div class="ante_siguiente">
                		<? while($sigue = (mysql_fetch_array($siguiente))):?>
                    		<div class="titulosnegrospequenos3">SIGUIENTE</div>
							<div class="marconegromini2">
                            	<a href="publicacion.php?publicacion=<? echo $sigue['id'];?>&fecha=<? echo $sigue['fecha'];?>">
                            	<img src="cms/<? echo $sigue['ruta_imagen']; ?>" width=80/>
                             	</a>
                            </div>
						<? endwhile; ?>
               		</div>
                    <div class="ante_siguiente">
                		<? while($atras = (mysql_fetch_array($anterior))):?>
                    		<div class="titulosnegrospequenos3">ANTERIOR</div>
                            <div class="marconegromini2">
								<a href="publicacion.php?publicacion=<? echo $atras['id'];?>&fecha=<? echo $atras['fecha'];?>">
                            	<img src="cms/<? echo $atras['ruta_imagen']; ?>" width="80" />
                                </a>
                            </div>
						<? endwhile; ?>
               		</div>
           		</div>
          </div><!-- cierre contenedorcontenidos -->
            
      	</div><!-- CIERRRE CONTENIDOS -->
        <div class="vacio"></div><br /><br />
    </div>
    
    <? require_once('todaspublicaciones.php');?>
    
    
</body>
</html>