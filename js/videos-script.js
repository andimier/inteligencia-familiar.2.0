	
	
	
	var channelName = 'conferenciasMEL';
	
	var reproductor = document.getElementById('reproductor');
	var videoplayer = document.getElementById('video-player');
	var fondovideo = document.getElementById('fondo-video');
	var botoncerrarvideo = document.getElementById('btn-cerrar-video');
	
	botoncerrarvideo.addEventListener('click', function(){
		reproductor.style.display = 'none';
		fondovideo.style.display = 'none';
		videoplayer.src = '';
	})
	
	window.addEventListener('resize',function(){
		fondovideo.style.height = window.innerHeight + 'px';
	})
	
	fondovideo.style.height = window.innerHeight + 'px';

	
	var contenedorvideos = document.getElementById('cnt-videos');

	$.get(
		"https://www.googleapis.com/youtube/v3/channels", {
			
			part:'contentDetails',
			forUsername: channelName,
			key:'AIzaSyA5LtNS8lOqoQW-CyR1PdiJSUCmZdts46U'},
			
			function(data){
				$.each(data.items,function(i, item){
					
					pid = item.contentDetails.relatedPlaylists.uploads;
					traerVideos(pid);
				});
			}
	);
	
	function traerVideos(pid){
		
		$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems", {
				
				part:'snippet',
				maxResults: 19,
				playlistId: pid,
				key:'AIzaSyA5LtNS8lOqoQW-CyR1PdiJSUCmZdts46U'},
				
				function(data){
					
					
					for(i=0; i<data.items.length; i++){
						
						videoId = data.items[i].snippet.resourceId.videoId;
						
						var titulo = data.items[i].snippet.title;
					
						var imagen = data.items[i].snippet.thumbnails.default.url;
						
						var cntVideo = document.createElement('div');
						cntVideo.className = 'cnt-video';
						cntVideo.style.cursor = 'pointer';
						cntVideo.setAttribute('data', videoId);
						
						cntVideo.addEventListener('click', function(){
							videoplayer.src = 'http://www.youtube.com/embed/' + this.getAttribute('data');
							reproductor.style.display = 'block';
							fondovideo.style.display = 'block';
						});
						
						var cntTitulo = document.createElement('div');
						cntTitulo.className = 'cnt-titulo';
						cntTitulo.innerHTML = titulo;
						
						var thumb = document.createElement('img');
						thumb.className = 'thumb';
						thumb.src = imagen;
	
						cntVideo.appendChild(thumb)
						cntVideo.appendChild(cntTitulo)
						contenedorvideos.appendChild(cntVideo)
						
					}
				}
			
	
		);
		
		
		
	}
	

	

	
