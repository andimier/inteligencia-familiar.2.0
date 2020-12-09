<div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="titulosnegros">NOTICIAS </div>
        	</div>
			<br>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
    
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="barraamarilla">
                	<div class="titulosblancosgrandes"><?php echo $noti_titulo[0] ;?> <?php echo $mensaje; ?></div>
                   	
                </div>
                <div class="barranegrafechas">
					<div class="fechasblancas">&nbsp;fecha &nbsp;&nbsp;<?php echo $noti_fecha[0] ;?></div>
                </div>
				<div class="textosarticulos"><?php echo $noti_contenidos[0] ;?></div>
                <div class="colgajoarticulos">
                	<div id="ganchoarticulos"></div>
                	<div id="imagencolgajoarticulos"><img src="cms/<?php echo $noti_imagen[0];?>" /></div>
                </div>
        	</div>
      	</div><br /><br /><br /><!-- cierre contenedorcontenidos -->
    </div>