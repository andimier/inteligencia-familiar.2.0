
var libro_inicial = 1;
$(document).ready(function(){
	
	$('.carousel_data .carousel_item').each(function(){
		$('#carousel').append( $(this).find('.imagen').html() );
		$('.imagen').css('padding' , '10px');
	});
	
	$('.carousel_data2 .carousel_item2').each(function(){
		$('#carousel2').append( $(this).find('.imagen2').html() );
	});
	
	//$('imagen').css({'background-color' : '#000', 'padding' : '5px'});
	crearCarrusel();
	verCaption();
	verCaption2();
	
	
	
});

var parametros = ({	
		childSelector: 'img',
		startingChild: window.libro_inicial,
		tilt: -3.5, 
		minOpacity:1, 
		minScale:.8, 
		duration:800,
		clickToFocus: true,
		clickToFocusCallback: verCaption

	});
	
var parametros2 = ({	
		childSelector: 'img',
		startingChild: window.libro_inicial,
		tilt: -3.5, 
		minOpacity:1, 
		minScale:.8, 
		duration:800,
		clickToFocus: true,
		clickToFocusCallback: verCaption2
	});

function crearCarrusel () {
	$('div#carousel').roundabout(parametros	);
	$('div#carousel2').roundabout(parametros2);
	
 	botones();
}


function botones (){
	
	$('.siguiente').click(function(){
		ocultarCaptions();
		$('div#carousel').roundabout('animateToNextChild', verCaption);
	})
	$('.anterior').click(function(){
		ocultarCaptions();
		$('div#carousel').roundabout('animateToPreviousChild', verCaption);
	})
		
	$('div#carousel img').click(function(){
		ocultarCaptions();
	})
	
	//=============== No. 2 ==============================================================
	
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
	
	//=============== No. 3 ==============================================================
	
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

function verCaption (){
	//alert( $('div#carousel').data('roundabout').childInFocus );
	var childInFocus = $('div#carousel').data('roundabout').childInFocus;
	var setCaption = $('.carousel_data .carousel_item .caption:eq('+childInFocus+')').html();
	
	$('#captions').html(setCaption);
	$('#captions').animate({'opacity':1}, 230);
}
function ocultarCaptions (){
	$('#captions').animate({'opacity':0}, 230);
}

//========================== No. 2 ===================================================================

function verCaption2 (){
	var childInFocus2 = $('div#carousel2').data('roundabout').childInFocus;
	var setCaption2 = $('.carousel_data2 .carousel_item2 .caption2:eq('+childInFocus2+')').html();
	
	$('#captions2').html(setCaption2);
	$('#captions2').animate({'opacity':1}, 230);
}

function ocultarCaptions2 (){
	$('#captions2').animate({'opacity':0}, 230);
}




//=========================== ANIMACION DEL MENU DE ARTICULOS ===========================//


$(window).load(function() {
	
	$('.link3').click (arribaabajo);
	
	function arribaabajo () {
		event.preventDefault();
		//$('.link3').unbind('click');
	  	
	  	if($("#franjamenu2:first").is(":hidden")){
	  		$("#franjamenu2").slideDown("slow");
	  	}else{
	  		$("#franjamenu2").slideUp("slow");
	  	}
	}
	
	$('#boton-ocultos').click (arribaabajoOcultos);
	
	function arribaabajoOcultos () {
		event.preventDefault();
		//$('.link3').unbind('click');
	  	
	  	if($("#textos-ocultos:first").is(":hidden")){
	  		$("#textos-ocultos").slideDown("slow");
	  		$('#boton-ocultos').text('cerrar');
	  	}else{
	  		$("#textos-ocultos").slideUp("slow");
	  		$('#boton-ocultos').text('seguir leyendo...');
	  	}
	}
});
