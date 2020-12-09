 <div class="datosbanner">
        		
    	<div class="item">
			<div class="imagen" >
            	<a href="articulo.php?articulo=<? echo $artbanner0; ?>&contenido=<? echo $artbanner3 ?>" ><img id="imagen" src="cms/<? echo $artbanner1; ?>"/></a>
            </div>
			<div class="caption"><? echo substr($artbanner2, 0, 35); ?>...</div>
		</div>
        
        <div class="item">
			<div class="imagen" >
            	<a href="publicacion.php?publicacion=<? echo $publibanner0; ?>&fecha=<? echo $publibanner3; ?>">
                <img id="imagen" src="cms/<? echo $publibanner1; ?>"/>
                </a>
            </div>
			<div class="caption"><? echo substr($publibanner2, 0,35); ?>...</div>
		</div>
        
        <div class="item">
			<div class="imagen" >
            	<a href="noticia.php?noticia=<? echo $nbanner0; ?>"><img id="imagen" src="cms/<? echo $nbanner1; ?>"/></a>
            </div>
			<div class="caption"><? echo substr($nbanner2, 0, 35); ?></div>
		</div>
        
  </div> 