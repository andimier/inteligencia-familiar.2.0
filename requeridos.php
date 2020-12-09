<link rel="stylesheet" href="estilos/fuentes.css" type="text/css" media="screen" />
<link rel="stylesheet" href="estilos/estilos.css" type="text/css" media="screen" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

<script src="js/jquery.roundabout.js" type="text/javascript"></script>

<script src="js/toggle.js" type="text/javascript"></script>

<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide2.css" />
<script type="text/javascript">
	// Apply the Highslide settings
   	hs.graphicsDir = 'highslide/graphics/';
	hs.outlineType = 'rounded-white';
	hs.outlineWhileAnimating = true;
</script>

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
