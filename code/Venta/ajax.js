/*$(function(){
	console.log("JQuery esta ejecutando");

	$('#form').submit(function(e){
        
        const datos = {
            id: $('#id_Producto').val(),
            cantVent: $('#cantVent').val()
        }

        // enviar los datos con el metodo post, al archivo task-add
        $.post('insertar.php', datos, function(response){
            console.log(response);
        // resetear formulario
            $('#form').trigger('reset');
        });
        
        //cancela el comportamiento default
        e.preventDefault();
    });
});

*/