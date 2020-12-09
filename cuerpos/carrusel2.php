<?
$querypublicaciones2= "SELECT * FROM publicaciones LIMIT 4 OFFSET 4";
$publicaciones2 = (mysql_query($querypublicaciones2, $connection));

?>

<div class="my_carousel2">
	<div class="carousel_container2">
		<div id="carousel2"></div>
		<img src="diseno/inicio/carrusel1/izquierda2.png" class="anterior2"/>
		<img src="diseno/inicio/carrusel1/derecha2.png" class="siguiente2"/>
	</div>
	
	<div class="caption_container2">
		<div id="captions2"></div>
	</div> 

	<div class="carousel_data2">
		<? while($publicacion2 = mysql_fetch_array($publicaciones2)): ?>
    	<div class="carousel_item2">
			<div class="imagen2" ><img src="cms/<? echo $publicacion2['imagen2']; ?>"/></div>
			<div class="caption2">
        		<a href="publicacion.php?publicacion=<? echo $publicacion2['id']; ?>&fecha=<? echo $publicacion2['fecha'];?>">
				<? echo $publicacion2['titulo'];  ?>
            	</a>
        	</div>
		</div>
		<? endwhile; ?>
	</div> 
	
</div>
