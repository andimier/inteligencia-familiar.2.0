<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Contacto - Inteligencia Familiar - Psi. Maria Elena Lopez</title>
		<?php require_once('requeridos.php');?>

	</head>

<body>
	<?php include_once('analyticstracking.php');?>
	<?php require_once('cabezote.php');?>
    <?php require_once('phpcontacto.php');?>
    
    <div id="cnt_griscontacto">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div id="tt_contacto">CONTACTO</div>
                <div id="tt_correo">info@inteligenciafamiliar.com</div>
            </div>
      	</div><!-- cierre contenedorcontenidos -->
        
        
    </div>
    
    
    
    <div class="contenedor2">
    	<div class="contenidos">
        	 <div class="contenedorcontenidos">
                 
             	<div id="colgajocontacto">
                	
                	<div id="formulario">
                    	<div id="mensajecontacto"><?php echo $message; ?></div>
                        <form method="post">
                        NOMBRE <br />
                        <input type="text" name="nombre" class="form_nombre" size="65" ><br />
                        E-MAIL <br />
                        <input type="text" name="mail" class="form_mail" size="65"><br />
                        MENSAJE<br />
                        <textarea rows="7" name="mensaje" class="form_mensaje" cols="50" ></textarea><br /><br />
                        &nbsp;<input type="submit" name="enviarcontacto" id="enviarcontacto" value="Enviar" />
                        </form>
                    </div>
                </div>
          		
                <div id="vaciocontacto"></div>
                
    		</div>
        </div>
    </div>
    
    <?php require_once('footer.php'); ?>
    
    
</body>
</html>