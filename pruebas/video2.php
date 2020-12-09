<?
//echo file_get_contents("http://gdata.youtube.com/feeds/api/playlists/dqK14G0g1NGow-amAXqBD_2mpNY4GcnR");	

function get_playlists(){
	$andi = "";
	//$data = ""; 
	$data = file_get_contents("http://gdata.youtube.com/feeds/api/playlists/dqK14G0g1NGow-amAXqBD_2mpNY4GcnR");	
	$xml = simplexml_load_string($data);
	//simplexml_load_file
	//simplexml_load_string()
	//echo $data;
	//echo $xml;
	
	/*$xml = new SimpleXML($xmlStr);
if (file_exists($data)) {
    $xml = SimpleXML($data);
 
    print_r($xml);
} else {
    exit('Failed to open test.xml.');
}*/
		
	/*foreach($xml->entry as $playlist){
		$media = $playlist->children('http://search.yahoo.com/mrss/');	
		$attrs = $media->group->thumbnail[0]->attributes();
		$thumb = $attrs['url'];
		$attrs = $media->group->player->attributes();
		$video = $attrs['url'];
		$title = $media->group->title;
		
		$url = $video;
		parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
		$vid_id = $my_array_of_vars['v'];
		
		$andi .= '<div style=" width:400px; height:400px;><img src"'.$thumb.'" /></div>';
		
	}*/
	//print $andi;
}



/*function getyoutubeplaylists($userName) {
	$yt = connectyoutube();
	$yt->setMajorProtocolVersion(2);
	$playlistListFeed = $yt->getPlaylistListFeed($userName);
	
	foreach ($playlistListFeed as $playlistListEntry) {
    	$playlist['title'] = $playlistListEntry->title->text;
   		$playlist['id'] = $playlistListEntry->getPlaylistID();
   	 	$playlists[] = $playlist;
    	$playlistVideoFeed = $yt->getPlaylistVideoFeed($playlistListEntry->getPlaylistVideoFeedUrl());
    	
		foreach ($playlistVideoFeed as $videoEntry) {
        	$playlist_assignment['youtube_id'] = substr($videoEntry->getVideoWatchPageUrl(),31,11);
        	$playlist_assignment['id'] = $playlist['id'];
        	$playlist_assignments[] = $playlist_assignment;
    	}
	}
	
	$everything['playlists'] = $playlists;
	$everything['playlist_assignments'] = $playlist_assignments;
	
	return $everything;
	
	
	
}*/
//allow_url_fopen = On;
//ini_set("auto_detect_line_endings", true);
//$data = file_get_contents("http://gdata.youtube.com/feeds/api/users/andimier/playlists?start-index1&max-results=50");
//echo $data;

/*function get_videos($usuario){
	$data = file_get_contents("http://gdata.youtube.com/feeds/api/users/{$usuario}/");
	echo $data;
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Publicaciones - Inteligencia Familiar</title>
<link rel="self" type="application/atom+xml" href="http://gdata.youtube.com/feeds/api/users/pennstate/playlists?start-index=1&amp;max-results=25"/>
<link rel="next" type="application/atom+xml" href="http://gdata.youtube.com/feeds/api/users/pennstate/playlists?start-index=26&amp;max-results=25"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2/swfobject.js"></script>
</head>

<body>
	<? get_playlists(); ?>
    
    <a name="ytplayer"></a>
<div id="ytplayer_div1">You need Flash player 10+ and JavaScript enabled to view this video.</div>
<div id="ytplayer_div2"></div>

<script type="text/javascript">
  //
  // YouTube JavaScript API Player With Playlist
  // http://911-need-code-help.blogspot.com/2009/10/youtube-javascript-player-with-playlist.html
  // Revision 2 [2012-03-24]
  //
  // Prerequisites
  // 1) Create following elements in your HTML:
  // -- a) ytplayer: a named anchor
  // -- b) ytplayer_div1: placeholder div for YouTube JavaScript Player
  // -- c) ytplayer_div2: container div for playlist
  // 2) Include SWFObject library from http://code.google.com/p/swfobject/
  //
  // Variables
  // -- ytplayer_playlist: an array containing YouTube Video IDs
  // -- ytplayer_playitem: index of the video to be played at any given time
  //
  var ytplayer_playlist = [ ];
  var ytplayer_playitem = 0;
  swfobject.addLoadEvent( ytplayer_render_player );
  swfobject.addLoadEvent( ytplayer_render_playlist );
  function ytplayer_render_player( )
  {
    swfobject.embedSWF
    (
      'http://www.youtube.com/v/' + ytplayer_playlist[ ytplayer_playitem ] + '&enablejsapi=1&rel=0&fs=1&version=3',
      'ytplayer_div1',
      '440',
      '330',
      '10',
      null,
      null,
      {
        allowScriptAccess: 'always',
        allowFullScreen: 'true'
      },
      {
        id: 'ytplayer_object'
      }
    );
  }
  function ytplayer_render_playlist( )
  {
    for ( var i = 0; i < ytplayer_playlist.length; i++ )
    {
      var img = document.createElement( "img" );
      img.src = "http://img.youtube.com/vi/" + ytplayer_playlist[ i ] + "/default.jpg";
      var a = document.createElement( "a" );
      a.href = "#ytplayer";
      //
      // Thanks to some nice people who answered this question:
      // http://stackoverflow.com/questions/1552941/variables-in-anonymous-functions-can-someone-explain-the-following
      //
      a.onclick = (
        function( j )
        {
          return function( )
          {
            ytplayer_playitem = j;
            ytplayer_playlazy( 1000 );
          };
        }
      )( i );
      a.appendChild( img );
      document.getElementById( "ytplayer_div2" ).appendChild( a );
    }
  }
  function ytplayer_playlazy( delay )
  {
    //
    // Thanks to the anonymous person posted this tip:
    // http://www.tipstrs.com/tip/1084/Static-variables-in-Javascript
    //
    if ( typeof ytplayer_playlazy.timeoutid != 'undefined' )
    {
      window.clearTimeout( ytplayer_playlazy.timeoutid );
    }
    ytplayer_playlazy.timeoutid = window.setTimeout( ytplayer_play, delay );
  }
  function ytplayer_play( )
  {
    var o = document.getElementById( 'ytplayer_object' );
    if ( o )
    {
      o.loadVideoById( ytplayer_playlist[ ytplayer_playitem ] );
    }
  }
  //
  // Ready Handler (this function is called automatically by YouTube JavaScript Player when it is ready)
  // * Sets up handler for other events
  //
  function onYouTubePlayerReady( playerid )
  {
    var o = document.getElementById( 'ytplayer_object' );
    if ( o )
    {
      o.addEventListener( "onStateChange", "ytplayerOnStateChange" );
      o.addEventListener( "onError", "ytplayerOnError" );
    }
  }
  //
  // State Change Handler
  // * Sets up the video index variable
  // * Calls the lazy play function
  //
  function ytplayerOnStateChange( state )
  {
    if ( state == 0 )
    {
      ytplayer_playitem += 1;
      ytplayer_playitem %= ytplayer_playlist.length;
      ytplayer_playlazy( 5000 );
    }
  }
  //
  // Error Handler
  // * Sets up the video index variable
  // * Calls the lazy play function
  //
  function ytplayerOnError( error )
  {
    if ( error )
    {
      ytplayer_playitem += 1;
      ytplayer_playitem %= ytplayer_playlist.length;
      ytplayer_playlazy( 5000 );
    }
  }
  //
  // Add items to the playlist one-by-one
  //
  ytplayer_playlist.push( 'dqK14G0g1NGow-amAXqBD_2mpNY4GcnR' );
  /*ytplayer_playlist.push( '_-8IufkbuD0' );
  ytplayer_playlist.push( 'wvsboPUjrGc' );
  ytplayer_playlist.push( '8To-6VIJZRE' );
  ytplayer_playlist.push( '8pdkEJ0nFBg' );*/

</script>
<script>

</script>
</body>
</html>