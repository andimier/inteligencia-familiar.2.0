<div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div class="etiquetanegra1">+ noticias &nbsp;</div>
            	<br /><br />
                <? if(!empty($z)): ?>
            		<? while($noticias = (mysql_fetch_array($z))): ?>
                    	
					<div class="vacio2">
                    
                		<div class="contenedorfloatleft"><div class="marconegromini">
							<? if(empty($noticias['imagen1'])): ?>
								<? // ?>	
							<? else: ?>
								<img src="cms/<? echo $noticias['imagen1']; ?>"  width="100"/>
							<? endif; ?>
                    	</div></div>
                    
                   	 	<div class="contenedorfloatleft">
                    		<div class="titulosnegrosminusculas">
                        		<a href="noticia.php?noticia=<? echo $noticias['id']; ?>">
								<? echo $noticias['titulo']; ?>
                            	</a>
                        	</div>
                    		<div class="titulosminusculasgrises"><? echo $noticias['fecha']; ?></div>
                        	<div class="textos4"><? echo substr($noticias['contenido'],0,150); ?>.....
                        		<a href="noticia.php?noticia=<? echo $noticias['id']; ?>">leer más</a>
                        	</div>
                    	</div>
                    	<div class="vacio2"></div>
                        
                	</div><!-- CIERRE VACIO 2 -->
                	<? endwhile ?>
                <? else: ?>
                	<? echo $mensaje; ?>
                <? endif; ?>
        	</div><!-- cierre contenedorcontenidos -->
      	</div><br /><br />
    </div>