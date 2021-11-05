$('#titulo_header').html(`REGISTRO NOTICIAS`);
const categoriasTabla=document.getElementById('categoria-noticia');
traerCategorias();
traerNoticias();
var imagen_usuario='';
var IDNoticia;
function traerNoticias(){
    const tabla=document.getElementById('tabla-noticias');
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroNoticias.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let noticias=JSON.parse(respuesta);
            //console.log(noticias);
			let plantilla='';
            noticias.forEach(noticia => {
                plantilla+=`<tr IDNOticia="${noticia.IDNoticia}">
                    <td><div>${noticia.IDNoticia}</div></td>
                    <td><div><div class="titulo">${noticia.Titulo}</div></div></td>
                    <td><div><div class="descripcion">${noticia.Descripcion}</div></div></td>
                    <td><div>${noticia.Fecha}</div></td>
                    <td><div class="btn-group">
                        <button type="button" class="btn btn-warning editar" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-pencil-alt"></i></button>
                        <button type="button" class="btn btn-danger eliminar"><i class="fas fa-trash-alt"></i></button>
                    </div></td>
                </tr>`
            });
            tabla.innerHTML=plantilla;
        }
    });
}

function traerCategorias(){
    const listaCat=document.getElementById('lista-categorias');
    const aprobar={
        aprobar: "true"
    }
    let url='controlador/controladorSeleccionarRegistroCategoria.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let categorias= JSON.parse(respuesta);
            let plantilla='';
            categorias.forEach(categoria => {
                plantilla+=`<option value="${categoria.IDCategoria}">${categoria.Descripcion}</option>`
            });
            listaCat.innerHTML+=plantilla;
        }
    });
}

$(document).on('click', '.editar', function(){
    let elemento=$(this)[0].parentElement.parentElement.parentElement;
    IDNoticia=$(elemento).attr('IDNoticia');
    const datosGet={
        IDNoticia: IDNoticia
    }
    let url='controlador/controladorSeleccionarRegistroNoticiasU.php';
    $.ajax({
        type: "GET",
        data: datosGet,
        url: url,
        success: function(respuesta){
            let noticia= JSON.parse(respuesta);
            imagen_usuario=noticia.Imagen;
            let descripcion=document.getElementById('enunciado_noticia');
            $('#titulo_noticia').val(noticia.Titulo);
            $('#imagen').html(`<img class="imagen-noticia" src="${noticia.Imagen}" alt="">`);
            $('#enlace_noticia').val(noticia.Enlace);
            descripcion.innerHTML=noticia.Descripcion;         
            //console.log(Noticia);
        }
    });

    traerCategoriasU(datosGet);    
});

$(document).on('click', '.eliminar', function(){
    let elemento=$(this)[0].parentElement.parentElement.parentElement;
    IDNoticia=$(elemento).attr('IDNoticia');
    const datosPost={
        IDNoticia: IDNoticia
    }
    let url='controlador/controladorEliminarrRegistroNoticiasU.php';
    $.post(url, datosPost, function(respuesta){
        if(respuesta=="ok"){
            Swal.fire({
                title: "Noticia Eliminada",
                icon: "info"
            });
            traerNoticias();
        }
    });
});

$(document).on('click', '.eliminar-categoria', function(){
    let elemento=$(this)[0].parentElement.parentElement;
    IDNoticia=$(elemento).attr('IDNoticia');
    IDCategoria=$(elemento).attr('IDCategoria');
    const datosPost={
        IDNoticia: IDNoticia,
        IDCategoria: IDCategoria
    }
    let url='controlador/controladorEliminarrRegistroNoticiasCategoria.php';
    $.post(url, datosPost, function(respuesta){
        if(respuesta=="ok"){
            Swal.fire({
                title: "Categoria Eliminada",
                icon: "info"
            });
            traerCategoriasU(datosPost);
        }
    });
});

$('#seleccionar-imagen').on("change",function(){
    let imagen = $(this)[0].files[0];
    let fileReader = new FileReader();
    fileReader.readAsDataURL(imagen);
    fileReader.onload = function(){
        console.log()
        imagen_usuario = fileReader.result
        $('#imagen').html(`<img class="imagen-noticia" src="${fileReader.result}" alt="">`);
    }
});

$('#agregar-noticia').submit(function(e){
    const datosForm={
        IDNoticia: IDNoticia,
        IDUsuario: IDUsuario,
        Titulo: $('#titulo_noticia').val(),
        Descripcion: $('#enunciado_noticia').val(),
        Enlace: $('#enlace_noticia').val(),
        Imagen: imagen_usuario
    }
    let url='controlador/controladorActualizarRegistroNoticia.php';
    $.post(url, datosForm, function(respuesta){
        if(respuesta=="ok"){
            $('#agregar-noticia').trigger('reset');
            $('#imagen').html(``);
            Swal.fire({
                title: "Noticia Actualizada",
                icon: "success"
            });
            $('#exampleModal').modal('hide');
            traerNoticias();
        }
    });
    e.preventDefault();
});

$('#registro_categorias').submit(function(e){
    const datosForm={
        IDNoticia: $('#registro_IDNoticia').val(),
        IDCategoria: $('#lista-categorias').val(),
    }
    let url='controlador/controladorRegistroNoticiaCategoria.php';
    $.post(url, datosForm, function(respuesta){
        switch(respuesta){
            case "error_id_noticia":
                Swal.fire({
                    title: "El ID_Noticia no existe",
                    icon: "error"
                });
                break;
            case "error_noticia_categoria":
                Swal.fire({
                    title: "Categoria previamente agregada",
                    icon: "info"
                });
                break;
            case "ok":
                Swal.fire({
                    title: "Categoria Agregada",
                    icon: "success"
                });
                $('#registro_categorias').trigger('reset');
                break;
            default:
                break;
        }
    });
    e.preventDefault();
});

function traerCategoriasU(datosGet){
    let url2='controlador/controladorSeleccionarRegistroNoticiaCategoria.php';
    $.ajax({
        type: "GET",
        data: datosGet,
        url: url2,
        success: function(respuesta){
            let categorias= JSON.parse(respuesta);
            let plantilla='';
            categorias.forEach(categoria => {
                plantilla+=`<tr IDNOticia="${categoria.IDNoticia}" IDCategoria="${categoria.IDCategoria}">
                    <td>${categoria.Descripcion}<td>
                    <td><button type="button" class="btn btn-danger eliminar-categoria"><i class="fas fa-trash-alt"></i></button><td>
                </tr>`
            });
            categoriasTabla.innerHTML=plantilla;
        }
    });
}

