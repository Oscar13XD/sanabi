$('#titulo_header').html(`VER NOTICIAS`);
traerNoticias();
function traerNoticias(){
    const contenido=document.getElementById('noticias');
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroNoticiasImagen.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let noticias=JSON.parse(respuesta);
            console.log(noticias);
			let plantilla='';
            noticias.forEach(noticia => {
                plantilla+=`<div class="noticias">
                    <div class="titulo-noticia">${noticia.Titulo}</div>
                    <div class="imagen-noticia">
                        <img class="imagen-noticia" src="${noticia.Imagen}">
                    </div>
                    <div class="enunciado-noticia">${noticia.Descripcion}</div>
                    <div class="enlace-noticia">${noticia.Enlace}</div>
                    <div class="fecha-noticia">PUBLICACION NOTICIA: ${noticia.Fecha}<br>PUBLICADA POR: ${noticia.IDUsuario}</div>
                    <div class="pdf-noticia">
                        <form action="index.php?pagina=plantilla_PDF-noticia" method="post" target="blank">
                            <input type="hidden" name="ID_Noticia" value="${noticia.IDNoticia}">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-file-pdf"></i></button>                
                        </form>
                    </div>
                </div>`
            });
            contenido.innerHTML=plantilla;
        }
    });
}