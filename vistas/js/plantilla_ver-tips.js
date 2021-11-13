$('#titulo_header').html(`VER TIPS`);

traerTips();

function traerTips(){
    const contenido=document.getElementById('tips');
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroTips.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let tips=JSON.parse(respuesta);
			let plantilla='';
            tips.forEach(tip => {
                plantilla+=`<div class="titulo-tip">
                    <div>${tip.Titulo}</div>
                </div>
                <div class="contenido-tip mb-4">
                    <div class="enunciado-tip">${tip.Descripcion}</div><hr>
                    <div class="info-tip">Fecha publicacion: ${tip.Fecha}<br>Autor: ${tip.IDUsuario}</div>
                </div>`
            });
            contenido.innerHTML=plantilla;
        }
    });

}

