$(document).ready(function(){
	//contactform
	/*
	$('#contactform').submit(function(){

		var nombre = $('input[name=nombre]').val();
		var correo = $('input[name=correo_electronico]').val().trim();
		var telefono = $('input[name=telefono]').val().trim();
		var compania = $('input[name=compania]').val().trim();
		var mensaje = $('textarea[name=mensaje]').val().trim();
		if((nombre!="")&&(correo!="")&&(telefono!="")&&(mensaje!="")){
			$.get('php/smail.php', {n:nombre, c:correo, t:telefono, co:compania, m:mensaje}, function(data){
				apprise(data, {'textOk':'Aceptar'});
				});
		} else {
			apprise('Debes llenar todos los campos.', {'textOk':'Aceptar'});
		}
		return false;
	});
	*/
	//SlideIntro
	var ancho = $('#fullsite').width();
	$('#fullsite section').css({'margin-left':ancho+'px'}).animate({marginLeft:'0'});

	//MainMenu
	$('header a').click(function(e){
		e.preventDefault();
		var goto = $(this).attr('href');
		var init = $(this).parent().attr('id');
		if(init=='_inicio'){
			$('header').animate({marginTop:'-76px'});
		} else {
			$('header').animate({marginTop:'0px'});
		}
		$('#fullsite section').animate({marginLeft:'-'+ancho+'px'}, function(){
			window.location.href=goto;
		});
	});

});
