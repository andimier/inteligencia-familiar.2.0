<div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div class="etiquetanegra1">+ artículos en:&nbsp; <? echo $titulos[0]; ?>&nbsp;</div>
            	<br /><br />
                <? if(!empty($z)): ?>
            		<? while($articulos = (mysql_fetch_array($z))): ?>
                    	
					<div class="vacio2">
                    
                		<div class="contenedorfloatleft"><div class="marconegromini">
							<? if(empty($articulos['ruta_imagen'])): ?>
								<? // ?>	
							<? else: ?>
								<img src="cms/<? echo $articulos['ruta_imagen']; ?>"  width="100"/>
							<? endif; ?>
                    	</div></div>
                    
                   	 	<div class="contenedorfloatleft">
                    		<div class="titulosnegrosminusculas">
                        		<a href="articulo.php?articulo=<? echo $articulos['id']; ?>&contenido=<? echo $articulos['contenido_id']; ?>">
								<? echo $articulos['titulo']; ?>
                            	</a>
                        	</div>
                    		<div class="titulosminusculasgrises"><? echo $articulos['fecha']; ?></div>
                        	<div class="textos4"><? echo substr($articulos['contenido'],0,300); ?>.....
                        		<a href="articulo.php?articulo=<? echo $articulos['id']; ?>&contenido=<? echo $articulos['contenido_id']; ?>">leer más</a>
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