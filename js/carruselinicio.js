
var libro_inicial3 = 1;

$(document).ready(function(){
	
	$('.carousel_data3 .carousel_item3').each(function(){
		$('#carousel3').append( $(this).find('.imagen3').html() );
		//$('#carousel .imagen').css('padding' , '10px');
	});
	
	//$('imagen').css({'background-color' : '#000', 'padding' : '5px'});
	crearCarrusel3();
	verCaption3();

	
});

var parametros3 = ({	
		childSelector: 'img',
		startingChild: window.libro_inicial3,
		tilt: -3.5, 
		minOpacity:1, 
		minScale:.8, 
		duration:800,
		clickToFocus: true,
		clickToFocusCallback: verCaption3

	});

function crearCarrusel3 () {
	$('div#carousel3').roundabout(parametros3);
	
 	botones3();
}


function botones3 (){
	
	$('.siguiente3').click(function(){
		ocultarCaptions3();
		$('div#carousel3').roundabout('animateToNextChild', verCaption3);
	})
	$('.anterior3').click(function(){
		ocultarCaptions3();
		$('div#carousel3').roundabout('animateToPreviousChild', verCaption3);
	})
		
	$('div#carousel3 img').click(function(){
		ocultarCaptions3();
	})
}



// ============================= N° 1 ===================================================

function verCaption3 (){
	//alert( $('div#carousel').data('roundabout').childInFocus );
	var childInFocus3 = $('div#carousel3').data('roundabout').childInFocus;
	var setCaption3   = $('.carousel_data3 .carousel_item3 .caption3:eq('+childInFocus3+')').html();
	
	$('#captions3').html(setCaption3);
	$('#captions3').animate({'opacity':1}, 230);
}
function ocultarCaptions3 (){
	$('#captions3').animate({'opacity':0}, 230);
}



