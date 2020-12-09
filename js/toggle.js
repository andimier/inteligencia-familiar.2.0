$(window).load(function() {
	
	$('.link3').click (arribaabajo);
	
	function arribaabajo () {
		//event.preventDefault();
		//$('.link3').unbind('click');
	  	
	  	if($("#franjamenu2:first").is(":hidden")){
	  		$("#franjamenu2").slideDown("slow");
	  	}else{
	  		$("#franjamenu2").slideUp("slow");
	  	}
	}
	
	//============  TEXTO DE PERFIL =============================//
	
	$('#boton-ocultos').click (arribaabajoOcultos);
	
	function arribaabajoOcultos () {
		//event.preventDefault();
		//$('.link3').unbind('click');
	  	
	  	if($("#textos-ocultos:first").is(":hidden")){
	  		$("#textos-ocultos").slideDown("slow");
	  		$('#boton-ocultos').text('cerrar');
	  	}else{
	  		$("#textos-ocultos").slideUp("slow");
	  		$('#boton-ocultos').text('seguir leyendo...');
	  	}
	}
	
	
	//============  GANANCIAS =============================//
	
	$('#etqa_ganancias').click (arribaabajoGanancias);
	
	function arribaabajoGanancias () {
		//event.preventDefault();
		//$('.link3').unbind('click');
	  	
	  	if($("#cnt_ganancias:first").is(":hidden")){
	  		$("#cnt_ganancias").slideDown("slow");
	  		//$('#etqa_ganancias').text ('- Cerrar Ganancias');
	  	}else{
	  		$("#cnt_ganancias").slideUp("slow");
	  		$('#etqa_ganancias').text ('+ Ganancias de la Inteligencia Familiar');
	  	}
	}
});