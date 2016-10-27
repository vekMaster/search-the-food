$(document).on('ready',cargar());
//función encargada de agregar los eventos de submit a los formularios 
function cargar(){
	//se agrega el evento de submit al formulario, lo que quiere decir que ya se dio click en el botón
	//por lo tanto se debe validar 
	cargarEstablecimiento(); 
	$("#eliminarEstablecimiento").on('submit',eliminarEstablecimiento);
}
function eliminarEstablecimiento(){
	var confirmacion=confirm('Esta seguro de eliminar al cliente?');
	if(confirmacion){
		var entrada = {
			'correo': $('#selectCliente').val(),
			'clave' : $('#passwordA').val()
		}
	
		$.ajax({
			type: 'post',
			url: 'eliminarCliente.php',
			data: entrada
		})
		.done(function(data){
			$("#divEliminar").css('color','#FE0303');
			$('#divEliminar').html(data);

		})
	}
	event.preventDefault();
		
}

function cargarEstablecimiento(){
	$.ajax({
		type: 'post',
		url: 'cargarEstablecimiento.php',
	})
	.done(function(data){
		$("#selectEstablecimiento").html(data);
		

	})
}
	
