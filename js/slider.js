function comenzar(){

	var promo = document.getElementById('banner');
	var tit   = document.getElementById('textocolgajoprincipal');
	var imagenesarray = [];
	var textoarray = [];
	var linksarray = [];
	var indexarray = 0;
	var indexarray2 = 0;
	
	var tiempo = 7000;
	var intervalo = setInterval(cambio,tiempo);
		
	$('.datosbanner .item').each(function(){
	  	imagenesarray.push($(this).find('.imagen img').attr('src'));
	  	linksarray.push($(this).find('a').attr('href'));
		textoarray.push($(this).find('.caption').text());
	});
	
	//============= COMPROBACION =================//
	
	//$('.texto').text(textoarray[0]);
	//$('.texto2').text(textoarray[1]);
	//var imagenes = document.getElementById("imagen").src;
		
		
	function cambio(){
		$('#cuerpocolgajo img').fadeOut(700, function (){
			$('#cuerpocolgajo img').fadeIn(700);
			
			promo.setAttribute("src", imagenesarray[indexarray]);
			$('#cuerpocolgajo a').attr('href', linksarray[indexarray])
			$('#textocolgajoprincipal a').attr('href', linksarray[indexarray])
			
			indexarray++;
		});
		
		$('#textocolgajoprincipal').fadeOut(700, function (){
			$('#textocolgajoprincipal').fadeIn(700);
			tit.innerHTML = textoarray[indexarray2];
			indexarray2++;
		});
		
		
		if (indexarray >= imagenesarray.length) {
			indexarray = 0;
		}
		if (indexarray2 >= textoarray.length) {
			indexarray2 = 0;
		}
	}
	

	$('#cuerpocolgajo').css('cursor','pointer');
	
	/*promo.onclick = function (){
		if(tiempo === 6000){
			clearInterval(intervalo);
			alert("Haz parado la animacion!")
			tiempo = 0;
			
		}else{
			tiempo = 6000;
			alert("Haz reiniciado la animacion")
			intervalo = setInterval(cambio,tiempo);
		}
		
	}*/
	
}

window.onload = function(){
	comenzar();

}
