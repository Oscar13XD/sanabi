var imagen_usuario;
$('#titulo_header').html(`BIENVENIDO ADMINISTRADOR`);
traerImagen();
$('#seleccionar-imagen').on("change",function(){
    let imagen = $(this)[0].files[0];
    let fileReader = new FileReader();
    fileReader.readAsDataURL(imagen);
    fileReader.onload = function(){
        console.log()
        imagen_usuario = fileReader.result
        $('#imagen').html(`<img class="imagen-usuario" src="${fileReader.result}" alt="">`);
    }
});

//GUARDAR IMAGEN
$(document).on('click', '.guardar', function(e){
    if(imagen_usuario!=null){
        const datosPost={
            IDUsuario: IDUsuario,
            Imagen: imagen_usuario,
        }
        let url='controlador/controladorRegistroImagenUsuario.php';
        $.post(url, datosPost, function(respuesta){
            if(respuesta=="ok"){
                Swal.fire({
                    title: "Imagen Guardada",
                    icon: "success"
                });
            }else{
                console.log(respuesta);
            }
        });
    }else{
        Swal.fire({
            title: "No se ha seleccionado una Imagen",
            icon: "info"
        });
    }
});

function traerImagen(){
    let url = "controlador/controladorSeleccionarImagenUsuario.php";
    const datosGet={
        IDUsuario: IDUsuario
    }
    $.ajax({
        type: "GET",
        data: datosGet,
        url: url,
        success: function(respuesta){
            let img= JSON.parse(respuesta);
            if(img.Imagen!=null){
                $('#imagen').html(`<img class="imagen-usuario" src="${img.Imagen}" alt="">`);
            }else{
                $('#imagen').html(`<img src="vistas/img/user.png">`);
            }
        }
    });

}