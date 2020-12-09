<?
require_once("includes/connection.php");
$queryinteligencia= "SELECT * FROM contenidos WHERE seccion_id = 1";
$x = (mysql_query($queryinteligencia, $connection));

while($seccion = (mysql_fetch_array($x))){
	 $titulos[]    = $seccion['titulo']; 
     $contenidos[] = $seccion['contenido']; 
}

$qsubcont= "SELECT * FROM contenidos WHERE seccion_id = 1 AND contenido_id = 8";
$y = (mysql_query($qsubcont, $connection));

while($subseccion = (mysql_fetch_array($y))){
	$id_2[] 	  = $subseccion['id'];;
    $titulo2[] 	  = $subseccion['titulo']; 
    $contenido2[] = $subseccion['contenido']; 
}

// ========================================= BUSQUEDA DE CANTIDAD DE ARTICULOS =============================

$id1 = $id_2[0];
$id2 = $id_2[1];
$id3 = $id_2[2];
$id4 = $id_2[3];
$id5 = $id_2[4];

$q_articulos1= "SELECT id FROM articulos WHERE contenido_id = $id1";
$a = (mysql_query($q_articulos1, $connection));
$fila1 = mysql_num_rows($a);

$q_articulos2= "SELECT id FROM articulos WHERE contenido_id = $id2";
$b = (mysql_query($q_articulos2, $connection));
$fila2 = mysql_num_rows($b);

$q_articulos3= "SELECT id FROM articulos WHERE contenido_id = $id3";
$c = (mysql_query($q_articulos3, $connection));
if(mysql_num_rows($c) == 0){
	$fila3 = 'Sin articulos';
}else{
	$fila3 = mysql_num_rows($c);
}

$q_articulos4= "SELECT id FROM articulos WHERE contenido_id = $id4";
$d = (mysql_query($q_articulos4, $connection));

if(mysql_num_rows($d) == 0){
	$fila4 = '* SIN';
}else{
	$fila4 = mysql_num_rows($d);
}

$q_articulos5 = "SELECT id FROM articulos WHERE contenido_id = $id5";
$e = (mysql_query($q_articulos5, $connection));

if(mysql_num_rows($e) == 0){
	$fila5 = '* SIN';
}else{
	$fila5 = mysql_num_rows($e);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Inteligencia Familiar</title>
<? require_once('requeridos.php');?>


</head>
<body>

<? require_once('cabezote.php');?>


    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="titulosnegros"><? echo $titulos[0]; ?></div>
            	<div class="textossteel"><? echo $contenidos[0]; ?></div>
                <div class="titulosminusculasamarillos"><? echo $titulos[2]; ?></div><br />
        	</div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>

	 <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos"> 
            	<!-- ================= NUMERO CINCO =====================-->
                <div class="contenedorcinco">
            		<img src="diseno/inicio/5.png" height="700" />
            	</div>
                <!-- ================= NUMERO CINCO =====================-->
                
              	<br />
                <div class="contenedorfloatleft">
                	<div class="colgajo4">
                    	<div class="numerosblancos">1.</div>
                    </div>
                	<div class="marconegromini"></div>
            	</div>
            	<div class="contenedorfloatleft2">
            		<div class="titulosnegrospequenos"><a href="afecto.php" ><? echo substr($titulo2[0],2,50); ?></a></div>
            		<div class="titulosminusculasgrises"><? echo $contenido2[0]; ?></div>
                    <div class="titulosminusculasgrises"><? echo $fila1; ?>&nbsp; ARTICULOS</div>
            	</div>
                
                <div class="contenedorfloatleft">
                	<div class="colgajo5">
                    	<div class="numerosblancos">2.</div>
                    </div>
                	<div class="marconegromini"></div>
            	</div>
                <div class="contenedorfloatleft2">
            		<div class="titulosnegrospequenos"><a href="padres-seguros.php" ><? echo substr($titulo2[1],2,50); ?></a></div>
            		<div class="titulosminusculasgrises"><? echo $contenido2[1]; ?></div>
                    <div class="titulosminusculasgrises"><? echo $fila2; ?>&nbsp; ARTICULOS</div>
            	</div>
  				<div class="vacio"></div>
          	</div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
          	
            	
	 <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos"> 
            	
              	<br />
                <div class="contenedorfloatleft">
                	<div class="colgajo4">
                    	<div class="numerosblancos">3.</div>
                    </div>
                	<div class="marconegromini"></div>
            	</div>
            	<div class="contenedorfloatleft2">
            		<div class="titulosnegrospequenos"><a href="disciplina-positiva.php" ><? echo substr($titulo2[2],2,50); ?></a></div>
            		<div class="titulosminusculasgrises"><? echo $contenido2[2]; ?></div>
                    <div class="titulosminusculasgrises"><? echo $fila3; ?>&nbsp; ARTICULOS</div>
            	</div>
                
                <div class="contenedorfloatleft">
                	<div class="colgajo5">
                    	<div class="numerosblancos">4.</div>
                    </div>
                	<div class="marconegromini"></div>
            	</div>
                <div class="contenedorfloatleft2">
            		<div class="titulosnegrospequenos"><a href="inteligencia-emocional.php" ><? echo substr($titulo2[3],2,50); ?></a></div>
            		<div class="titulosminusculasgrises"><? echo $contenido2[3]; ?></div>
                    <div class="titulosminusculasgrises"><? echo $fila4; ?>&nbsp; ARTICULOS</div>
            	</div>
  				<div class="vacio"></div>
          	</div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
    
    
    <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos"> 
                <br />
                <div class="contenedorfloatleft">
                	<div class="colgajo4">
                    	<div class="numerosblancos">5.</div>
                    </div>
                	<div class="marconegromini"></div>
            	</div>
                <div class="contenedorfloatleft2">
            		<div class="titulosnegrospequenos"><a href="vida-en-pareja.php" ><? echo substr($titulo2[4],2,50); ?></a></div>
            		<div class="titulosminusculasgrises"><? echo $contenido2[4]; ?></div>
                    <div class="titulosminusculasgrises"><? echo $fila5; ?>&nbsp; ARTICULOS</div>
            	</div>
  				<div class="vacio"></div>
          	</div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
            
    
    
    
    
    <!-- ===================================== ILUSTRACION ===================================-->
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div id="grafico"></div>
            </div><!-- cierre contenedorcontenidos -->
        </div>
    </div>
    
    
    <!-- ===================================== VENTAJAS ===================================-->
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos"><br />
				<div class="titulosnegros"><? echo $titulos[1]; ?></div><br />
            	<div class="titulosminusculasgrises"><? echo $contenidos[1]; ?></div>
        	</div><!-- cierre contenedorcontenidos -->
         </div>
    </div>

</body>
</html>