

function agregardatos(name,description){	
	cadena = "name=" + name +
	"&description=" + description;

	$.ajax({

		type:"POST",
		url:"agregarDatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('tabla.php');
				$('#buscador').load('buscador.php');
				alertify.success("Agregado con exito :)");
			}else{
				alertify.error("Fallo el Servidor :(");
			}
		}
	});
}


function agregaform(datos){

	d=datos.split('||');

	$('#id').val(d[0]);
	$('#name').val(d[1]);
	$('#description').val(d[2]);

}

function actualizaDatos(){
	
	id=$('#id').val();
	name=$('#name').val();
	description=$('#description').val();

	cadena = "id=" + id +
	"&name=" + name + 
	"&description=" + description ;

	$.ajax({

		type:"POST",
		url:"actualizaDatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('tabla.php');
				alertify.success("Actualizado con Exito :)");
			}else{
				alertify.error("Fallo el Servidor :(");
			}
		}
	});

}


function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de Eliminar Este Registro?', 
		function(){ eliminarDatos(id) }
		, function(){ alertify.error('Accion Cancelada')});
}


function eliminarDatos(id){

	cadena="id=" + id;

	$.ajax({
		type:"POST",
		url:"eliminarDatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('tabla.php');
				alertify.success("Eliminado con Exito :)");
			}else{
				alertify.error("Fallo el Servidor :(");
			}
		}
	});

}
