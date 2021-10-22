traerCategorias();
$('#titulo_header').html(`PUBLICAR NOTICIAS`);

const btnAgregar=document.getElementById('btn-agregar');
const lista=document.getElementById('lista');

btnAgregar.addEventListener('click', () =>{
    const elemento=`<div class="categoria"> 
        <select class="" id="">	
            <option selected disabled value="">TIPO</option>
            <option value="">ECONOMIA</option>
        </select>
    </div>`;
    lista.innerHTML+=elemento;
});

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
