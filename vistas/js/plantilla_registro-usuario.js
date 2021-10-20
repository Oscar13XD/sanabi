$('#registro').submit(function(e){
    const datosForm={
        IDUsuario: $('#input_id_usuario').val(),
        Apellido: $('#input_apellido_usuario').val(),
        Nombre: $('#input_nombre_usuario').val(),
        Email: $('#input_email_usuario').val(),
        Password: $('#input_password_usuario').val(),
    }
    let url='controlador/controladorRegistroUsuario.php';
    $.post(url, datosForm, function(respuesta){
        switch(respuesta){
            case "usuario registrado":
                $('#registro').trigger('reset');
                Swal.fire({
                    title: "Ha sido registrado",
                    icon: "success"
                });
                break;
            case "El usuario existe":
                Swal.fire({
                    title: "El usuario ya existe",
                    icon: "info"
                });
                break;
            default:
                console.log(respuesta);
                break;
        }
    });
    e.preventDefault();
});