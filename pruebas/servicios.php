<?

require_once("includes/connection.php");

$numero = 1;

$q_servicios1= "SELECT * FROM contenidos WHERE seccion_id = 3 AND indice =0";
$x = (mysql_query($q_servicios1, $connection));
$y = (mysql_query($q_servicios1, $connection));

while($servicios2 = (mysql_fetch_array($y))){
	$titulos2[] = $servicios2['titulo'];
	$contenidos2[] = $servicios2['contenido'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Servicios - Inteligencia Familiar</title>
<title>Inteligencia Familiar</title>
<? require_once('requeridos.php');?>

</head>
<body>
	<? require_once('cabezote.php');?>
    <div class="contenedor">
    	<div class="contenidos">
    	  	<div class="contenedorcontenidos">
          		
    	  		<div class="titulosamarillos2">SERVICIOS&nbsp&nbsp;&nbsp;</div>
    	         <div class="contenedorfloatleft">
                 	<div id="textoganancias2">
				 	<? while($seccion2 = (mysql_fetch_array($x))): ?>
	 					<a href="#<? echo $seccion2['titulo']; ?>"><? echo $numero . ". " . $seccion2['titulo'] . "<br />"; ?></a>
						<? $numero +=1; ?>
     				<? endwhile; ?>
                    </div>
                </div>
    		</div><br /><!-- cierre contenedorcontenidos -->
    	</div>
        <div class="vacio"></div><br />
    </div>
    
    <div class="contenedor">
    	<div class="contenidos">
    	  	<div class="contenedorcontenidos">
    	  		<div class="colgajo2">
                	<div class="numerosblancos">1.</div>
                </div>
                
    	        <div id="servicio1">
                	<div class="titulosnegros"><a name="<? echo $titulos2[0]; ?>" ><? echo $titulos2[0]; ?></a></div><br />
                    <div class="textos2"><? echo $contenidos2[0]; ?></div><br />
                </div>
    		</div><!-- cierre contenedorcontenidos -->
    	</div>
    </div>
    
    <div class="contenedor">
    	<div class="contenidos">
    	  	<div class="contenedorcontenidos">
    	  		<div class="colgajo3">
                	<div class="numerosblancos">2.</div>
                </div>
    	        <div class="barranegra">
                	<div class="titulosblancosgrandes">&nbsp;&nbsp;<a name="<? echo $titulos2[1]; ?>" ><? echo $titulos2[1]; ?></a></div>
                </div>
                <div class="textos2"><? echo $contenidos2[1]; ?></div><br />
    		</div><!-- cierre contenedorcontenidos -->
    	</div>
    </div>
    
    <div class="contenedor">
    	<div class="contenidos">
    	  	<div class="contenedorcontenidos">
    	  		<div class="colgajo2">
                	<div class="numerosblancos">3.</div>
                </div>
    	        <div id="servicio1">
                	<div class="titulosnegros"><a name="<? echo $titulos2[2]; ?>" ><? echo $titulos2[2]; ?></a></div><br />
                    <div class="textos2"><? echo $contenidos2[2]; ?></div><br />
                </div>
    		</div><!-- cierre contenedorcontenidos -->
    	</div>
    </div>
    
    <div class="contenedor">
    	<div class="contenidos">
    	  	<div class="contenedorcontenidos">
    	  		<div class="colgajo3">
                	<div class="numerosblancos">4.</div>
                </div>
    	        <div class="barranegra">
                	<div class="titulosblancosgrandes">&nbsp;&nbsp;<a name="<? echo $titulos2[3]; ?>" ><? echo $titulos2[3]; ?></a></div>
                </div>
                <div class="textos2"><? echo $contenidos2[3]; ?></div><br />
    		</div><!-- cierre contenedorcontenidos -->
    	</div>
    </div>
    
</body>
</html>