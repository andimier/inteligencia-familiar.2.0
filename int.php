<? require_once("qs/q_inteligencia.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Inteligencia Familiar</title>
<? require_once('requeridos.php');?>


</head>
<body>

<? require_once('cabezote.php');?>


    <div class="cnt_gris2">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="tts_negroscentrados">INTELIGENCIA FAMILIAR</div>
                <div class="textoint"><? echo $contenidos[0]; ?></div>
                <div class="vacio"></div>
            </div>
        </div>
    </div>
                
   
    
     <!-- ===================================== GANANCIAS ===================================-->
     
     <div id="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos"><br />
				<div id="etqa_ganancias">+ Ganancias de la Inteligencia Familiar</div>
                <div class="vacio"><br /><br /></div>
        	</div><!-- cierre contenedorcontenidos -->
         </div>
    </div>
    
    <div id="cnt_ganancias">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div class="titulosminusculasgrises">
                	<div class="separadorcolgajos"></div>
                    <div class="separadorcolgajos"></div>
                    <? echo $contenidos[1]; ?><br />
                </div>
        	</div><!-- cierre contenedorcontenidos -->
         </div>
    </div>
    
    
    <!-- ===================================== LAS CINCO CLAVES ===================================-->
    <div class="contenedoramarillo">
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos">
            	<div id="cnt_cincoint">5</div>
            	<div class="titulosblancosgrandes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo substr($titulos[2],9,100); ?></div>
            </div>
    	</div>
    
    </div>

	 <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos"> 
            	
                <? require_once('cuerpos/cuerpointeligencia1.php'); ?>
                
            	<div class="vacio"><br /></div>
          	</div><!-- cierre contenedorcontenidos -->
      	</div>
    </div>
          
          
   <div class="contenedor"> 
    	<div class="contenidos"> 
        	<div class="contenedorcontenidos">
             
            	<div class="separadorcolgajos"></div>
                <div class="separadorcolgajos"></div>
                <div class="separadorcolgajos"></div>
                
                <? require_once('cuerpos/cuerpointeligencia2.php'); ?>
                
            	<div class="vacio"></div>
          	</div><!-- cierre contenedorcontenidos -->
      	</div>
    </div>
          	
            	
    
    
    <!-- ===================================== ILUSTRACION ===================================-->
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div id="grafico"></div>
            </div><!-- cierre contenedorcontenidos -->
        </div>
    </div>
    
    
    <div class="contenedor">
    <div class="contenidos"> 
        <div class="contenedorcontenidos">
            	<br />      
            	<div class="tts_negroscentrados"><? echo $contenidos[0]; ?></div>
                <div class="vacio"><br /></div>
        </div><!-- cierre contenedorcontenidos -->
     </div>
</div>

</body>
</html>