$('#titulo_header').html(`REGISTRO NOTICIAS`);
traerCategorias();
traerNoticias();

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
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div></td>
                </tr>`
            });
            tabla.innerHTML+=plantilla;

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
    let IDNoticia=$(elemento).attr('IDNoticia');
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
            let descripcion=document.getElementById('enunciado_noticia');
            $('#titulo_noticia').val(noticia.Titulo);
            $('#imagen').html(`<img class="imagen-usuario" src="${noticia.Imagen}" alt="">`);
            descripcion.innerHTML=noticia.Descripcion;         
            //console.log(Noticia);
        }
    });
});