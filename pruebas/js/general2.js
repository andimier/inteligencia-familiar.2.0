
var libro_inicial = 1;
$(document).ready(function(){
	
	$('.carousel_data2 .carousel_item2').each(function(){
		$('#carousel2').append( $(this).find('.imagen2').html() );
	});
	crearCarrusel2();
	verCaption2();
});


function crearCarrusel2 () {
	$('div#carousel2').roundabout({
		childSelector: 'img',
		startingChild: window.libro_inicial,
		tilt: -3.5,
		minOpacity:1,
		minScale:.6,
		duration:800,
		clickToFocus: true,
		clickToFocusCallback: verCaption
	});
 	botones2();
}


function botones2 (){
	
	$('.siguiente2').click(function(){
		ocultarCaptions2();
		$('div#carousel2').roundabout('animateToNextChild', verCaption2);
	})
	$('.anterior2').click(function(){
		ocultarCaptions2();
		$('div#carousel2').roundabout('animateToPreviousChild', verCaption2);
	})
	
	$('div#carousel2 img').click(function(){
		ocultarCaptions2();
	})
}

function verCaption2 (){
	//alert( $('div#carousel').data('roundabout').childInFocus );
	var childInFocus2 = $('div#carousel2').data('roundabout').childInFocus;
	var setCaption2 = $('.carousel_data2 .carousel_item2 .caption2:eq('+childInFocus2+')').html();
	
	$('#captions2').html(setCaption2);
	$('#captions2').animate({'opacity':1}, 250);
}

function ocultarCaptions2 (){
	$('#captions2').animate({'opacity':0}, 250);
}
