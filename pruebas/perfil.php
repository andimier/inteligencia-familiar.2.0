<? 
require_once("includes/connection.php");
require_once('descargapdf.php');

$q_perfil= "SELECT * FROM contenidos WHERE seccion_id = 4 LIMIT 1";
$x = (mysql_query($q_perfil, $connection));

while($perfil = (mysql_fetch_array($x))){
	$id[]        = $perfil['id'];
	$fecha[]     = $perfil['fecha'];
	$titulo[]    = $perfil['titulo']; 
    $contenido[] = $perfil['contenido']; 
}

$id_perfil = $id[0];

$q_foto= "SELECT * FROM imagenes_contenidos WHERE contenido_id = $id_perfil LIMIT 1";
$y = (mysql_query($q_foto, $connection));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Perfil Maria Elena Lopez Jordan - Inteligencia Familiar</title>

<? require_once('requeridos.php');?>



<style>
.titlec {
	height:20px;
  	font-size: 12px;
  	font-family:Arial, Helvetica, sans-serif;
  	color:#666;
}

.thumbsvideos {
  float: left;
  margin-bottom: 10px;
  margin-right:10px;
  width:115px;
  height:120px;
  padding:10px;
  background:#FFF;
  cursor:pointer;
  border: 5px solid #000;
}
.contenedorvideos
{
  margin-bottom: 1em;
  padding-left : 0em;
  margin-left: 0em;
  list-style: none;
  
}

#playerContainer{
	float:left;
	width:435px;
	height:285px;
	margin-right:10px;
	margin-left:20px;
}
</style>
<script type="text/javascript" src="http://swfobject.googlecode.com/svn/trunk/swfobject/swfobject.js"></script>
<script type="text/javascript">

	function loadVideo(playerUrl, autoplay) {
  
	swfobject.embedSWF(
      	playerUrl + '&rel=1&border=0&fs=1&autoplay=' + (autoplay?1:0), 'player', '380', '285', '9.0.0', false, 
      	false, {allowfullscreen: 'true'});
	}

	function showMyVideos2(data) {
 	 	var feed = data.feed;
  		var entries = feed.entry || [];
  		var html = ['<div class="contenedorvideos">'];
 	
		for (var i = 0; i < entries.length; i++) {
   			var entry = entries[i];
    		var title = entry.title.$t.substr(0, 20);
   	 		var thumbnailUrl = entries[i].media$group.media$thumbnail[0].url;
    		var playerUrl = entries[i].media$group.media$content[0].url;
    
			html.push('<div class="thumbsvideos" onclick="loadVideo(\'', playerUrl, '\', true)">',
              '<div class="titlec">', title, '...</div><br /><img src="', thumbnailUrl, '" width="115" height="86"/>', '</div></div>');
  		}
  		
		html.push('</div><br style="clear: left;"/>');
  		document.getElementById('videos2').innerHTML = html.join('');
  		
		if (entries.length > 0) {
    		loadVideo(entries[0].media$group.media$content[0].url, false);
  		}
	}
</script>
</head>

<body>

	<? require_once('cabezote.php');?>
    <div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
				<div class="contenedorfloatleft"><div id="textoinicio">PERFIL</div></div>
                <div class="contenedorfloatleft"><br /><br />
                	<div class="titulosnegrospequenos3"><a href="#publicaciones">PUBLICACIONES</a></div>
                </div>
                <div class="contenedorfloatleft"><br /><br />
                	<div class="titulosnegrospequenos3">
                    	<a href="#videos">-&nbsp;&nbsp;&nbsp;&nbsp; VIDEOS&nbsp;<img src="diseno/perfil/camara.png" height="25" /></a>
                    </div>
                </div>
                <div class="vacio"></div>
            </div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
    
    <div class="contenedor2">
    	<div class="contenidos">
        
        	<!-- ======= IMAGEN DE MEL ======== -->
        	<div class="col3"><br /><br />
        		<div id="marcofoto">
                	<? while($foto = (mysql_fetch_array($y))): ?>
						 <img src="cms/<? echo $foto['ruta_medianas']; ?>" />
					<? endwhile; ?>
                </div><br />
                
                <div class="contenedorfloatleft3"><img src="diseno/perfil/flechadescarga.png" /></div>
                <div class="contenedorfloatleft3">
                <form method="post">
					<input type="hidden" name="archivo" value="portafolio-mel.pdf">
					<input type="submit" name="botondescarga" value="Descarga mi Portafolio" id="boton"/>
				</form>
                </div>
        	</div>
            <!-- ===============================-->
            
        	<div class="contenedorcontenidos"><br />
				<div class="titulosamarillos2"><? echo $titulo[0]; ?></div><br />
                <div class="textos2"><? echo substr($contenido[0],0,1820); ?></div>
                
                <div id="textos-ocultos"><? echo substr($contenido[0],1820,5000); ?></div>
                <div id="boton-ocultos">seguir leyendo...</div><br /><br /><br />
            </div>
      	</div><!-- cierre contenedorcontenidos -->
    </div>
    
    <div class="contenedor2">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
            	<div id="titulo_publicaciones2">Publicaciones</div>
                <div class="vacio"></div>
				<div class="contenedorfloatleft"><? require_once('carrusel.php');?></div>
                <div class="contenedorfloatleft"><? require_once('carrusel3.php');?></div>
                <div class="vacio"></div><br /><br />
      		</div><!-- cierre contenedorcontenidos -->
    	</div><br />
    </div>



	<div class="contenedor">
    	<div class="contenidos">
        	<div class="contenedorcontenidos">
                
				<div id="titulo_publicaciones2"><a name="videos">Videos</a><img src="diseno/perfil/camara.png" /></div><br /><br /><br />
                <div class="contvideos">
                <div id="playerContainer"><object id="player"></object></div>
				
                <div id="videos2"></div>
				<script 
   				type="text/javascript" 
    			src="https://gdata.youtube.com/feeds/api/playlists/Ej-0vScP4Q9IQllkYIJkuiUuWhhEv4Nc?v=2&alt=json-in-script&callback=showMyVideos2&max-results=30">
				</script>
                </div>
			</div>
		</div>
	</div>
    
</body>
</html>