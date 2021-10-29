$('#titulo_header').html(`REGISTRO USUARIOS`);

traerUsuarios();

function traerUsuarios(){
    const tabla=document.getElementById('tabla-usuarios');
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroUsuarios.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let usuarios=JSON.parse(respuesta);
			let plantilla='';
            usuarios.forEach(usuario => {
                plantilla+=`<tr>
                    <td>${usuario.IDUsuario}</td>
                    <td>${usuario.Apellido}</td>
                    <td>${usuario.Nombre}</td>
                    <td>${usuario.Email}</td>
                    <td>${usuario.Descripcion}</td>
                </tr>`
            });
            tabla.innerHTML+=plantilla;
        }
    });
}
