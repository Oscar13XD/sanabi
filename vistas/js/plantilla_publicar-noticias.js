//traerCategorias();
var imagen_usuario='';
$('#titulo_header').html(`PUBLICAR NOTICIAS`);

$('#agregar-noticia').submit(function(e){
    const datosForm={
        IDUsuario: IDUsuario,
        Titulo: $('#titulo_noticia').val(),
        Descripcion: $('#enunciado_noticia').val(),
        Enlace: $('#enlace_noticia').val(),
        Imagen: imagen_usuario
    }
    //console.log(datosForm);
    let url='controlador/controladorRegistroNoticia.php';
    $.post(url, datosForm, function(respuesta){
        if(respuesta=="ok"){
            $('#agregar-noticia').trigger('reset');
            $('#imagen').html(``);
            Swal.fire({
                title: "Noticia Publicada",
                icon: "success"
            });
        }
    });
    e.preventDefault();
});

$('#agregar-tip').submit(function(e){
    const datosForm={
        IDUsuario: IDUsuario,
        Titulo: $('#titulo_tip').val(),
        Descripcion: $('#enunciado_tip').val()
    }
    let url='controlador/controladorRegistroTip.php';
    $.post(url, datosForm, function(respuesta){
        if(respuesta=="ok"){
            $('#agregar-tip').trigger('reset');
            Swal.fire({
                title: "Tip Publicado",
                icon: "success"
            });
        }
    });
    e.preventDefault();
});

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

//const btnAgregar=document.getElementById('btn-agregar');
//const lista=document.getElementById('lista');

/*btnAgregar.addEventListener('click', () =>{
    const elemento=`<div class="categoria"> 
        <select class="" id="">	
            <option selected disabled value="">TIPO</option>
        </select>
    </div>`;
    lista.innerHTML+=elemento;
});*/