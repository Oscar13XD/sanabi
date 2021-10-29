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
                plantilla+=`<tr>
                    <td>${noticia.IDNoticia}</td>
                    <td>${noticia.Titulo}</td>
                    <td>${noticia.Descripcion}</td>
                    <td>${noticia.Fecha}</td>
                    <td>proceso</td>
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