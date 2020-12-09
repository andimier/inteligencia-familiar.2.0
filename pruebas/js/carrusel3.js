
var libro_inicial = 1;
$(document).ready(function(){
	
	
	$('.carousel_data3 .carousel_item3').each(function(){
		$('#carousel3').append( $(this).find('.imagen3').html() );
	});
	
	crearCarrusel();
	verCaption3();
	
	
});

var parametros = ({	
		childSelector: 'img',startingChild: window.libro_inicial,
		tilt: -3.5, 
		minOpacity:1, 
		minScale:.8, 
		duration:800,
		clickToFocus: true,
		clickToFocusCallback: verCaption3
	});

function crearCarrusel () {
	
	$('div#carousel3').roundabout(parametros);
 	botones();
}


function botones (){
	
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


function verCaption3 (){
	var childInFocus3 = $('div#carousel3').data('roundabout').childInFocus;
	var setCaption3 = $('.carousel_data3 .carousel_item3 .caption:eq('+childInFocus3+')').html();
	
	$('#captions3').html(setCaption3);
	$('#captions3').animate({'opacity':1}, 230);
}

function ocultarCaptions3 (){
	$('#captions3').animate({'opacity':0}, 230);
}
