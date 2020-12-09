<?php

	$q_publicaciones  = "SELECT * FROM publicaciones ";
	$q_publicaciones .= "ORDER BY fecha DESC ";
	$q_publicaciones .= "LIMIT 4";
	$publicacionesinicio = (mysql_query($q_publicaciones, $connection));

	/*while($pub = mysql_fetch_array($publicacionesinicio)){
		 echo $pub['imagen2'] . "<br />"; 
	}*/
?>

<div class="my_carousel4">
	<div class="carousel_container3">
		<div id="carousel3"></div>
		<img src="diseno/inicio/carrusel1/izquierda.png" class="anterior3"/>
		<img src="diseno/inicio/carrusel1/derecha.png"   class="siguiente3"/>
	</div>
	
    
	<div class="caption_container3">
		<div id="captions3"></div>
	</div> 



	<div class="carousel_data3">
		<?php while($pub = mysql_fetch_array($publicacionesinicio)): ?>
        
    	<div class="carousel_item3">
        
			<div class="imagen3"><img src="cms/<?php echo $pub['imagen2']; ?>" width="240"/></div>
			<div class="caption3">
        		<a href="publicacion.php?publicacion=<?php echo $pub['id']; ?>&fecha=<?php echo $pub['fecha'];?>">
				<?php echo $pub['titulo'];  ?>
            	</a>
        	</div>
		</div>
		<?php endwhile; ?>



	</div> 
</div>