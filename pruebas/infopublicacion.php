   
    <div class="contenedor2">
    	<div class="contenidos">
        	<div class="col3">
        		<div class="marcoamarillo"> 
                	<? if(empty($publi_imagen[0])): ?>
                		
                    <? else: ?>
                    	<img src="cms/<? echo $publi_imagen[0]; ?>" />
                    <? endif; ?>   
                </div>
           		<div class="imagencontraportada"></div>
                <div class="gafas"></div>
                <div class="contenedoriconos">
                	<? while ($imagenes = (mysql_fetch_array($z))):?>
                    	<? if(empty($imagenes['ruta_grandes'])): ?>
                        <? else: ?>
                		<a href="cms/<?php echo $imagenes['ruta_grandes']; ?>" class="highslide" onclick="return hs.expand(this)">
                			<div class="img_publicaciones" ><div class="numerosblancospequenos"><? echo $suma;?></div></div>
                		</a>
                        <? $suma+=1 ; ?>
                        <? endif; ?>
                	<? endwhile; ?>
                </div>
       		</div>
        	<div class="contenedorcontenidos">
				<div class="titulosamarillos2"><? echo $publi_titulo[0];?></div>
                <!--<div class="titulosnegrospequenos3">FECHA &nbsp;<? //echo $publi_fecha[0];?></div><br />-->
                
                <div class="titulosnegrospequenos2">RESEÑA</div>
                <div class="textos2"><? echo $publi_contenido[0];?></div><br />
            </div><!-- cierre contenedorcontenidos -->
           
        
       	  <div class="contenedorcontenidos">
            	<div class="contenedorfloatleft">
                	<div class="titulosnegrospequenos3">FICHA TÉCNICA</div>
                	<div class="textos3"><? echo $publi_ficha[0];?></div><br />
               	</div>
                
            	