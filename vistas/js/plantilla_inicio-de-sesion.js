$('#ingreso').submit(function(e){
    //console.log("hola");
    const datosForm={
        IDUsuario: $('#input_id_usuario').val(),
        Password: $('#input_password_usuario').val()
    }
    let url='controlador/controladorInicioUsuario.php';
    $.post(url, datosForm, function(respuesta){
        switch(respuesta){
            case "okAdm":
                $('#ingreso').trigger('reset'); 
                window.location='index.php?pagina=plantilla_inicio-admin';
                break;
            case "okUser":
                $('#ingreso').trigger('reset'); 
                window.location='index.php?pagina=plantilla_inicio-user';
                break;
            case "El usuario no existe":
                Swal.fire({
                    title: "Usuario o Contraseña incorrectos",
                    icon: "error"
                });
                break;
            default:
                console.log(respuesta);
                break;
        }
    });
    e.preventDefault();
});