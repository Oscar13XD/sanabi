$('#titulo_header').html(`REGISTRO USUARIOS`);

traerUsuarios();
//graficos();
traerNumeroUsuarios();
traerNumeroNoticiasTips();
traerCategoriasNoticias();

function traerCategoriasNoticias(){
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroCategoriasNoticiasCount.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let titulo =[];
            let cantidad=[];
            let color=[];
            let borde=[];
            let tipo='bar';
            let encabezado='Numero de Noticias por categoria';
            let id='numero_noticias-cat';
            let numCatNot=JSON.parse(respuesta);
            for(var i=0; i<numCatNot.length; i++){
                titulo.push(numCatNot[i]["Descripcion"]);
                cantidad.push(numCatNot[i]["TOTAL_NOTICIAS"]);
                color.push(colorRGB());
                borde.push(colorRGB());
            }
            graficos(titulo, cantidad, color, borde, tipo, encabezado, id);
            //console.log(numCatNot);
        }
    });
}

function traerNumeroNoticiasTips(){
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroNoticiasTipsCount.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let titulo =['NOTICIAS', 'TIPS'];
            let cantidad=[];
            let color=[];
            let borde=[];
            let tipo='bar';
            let encabezado='Numero Noticias y Tips';
            let id='numero_noticias-tips';
            let numNocTip=JSON.parse(respuesta);
            for(var i=0; i<numNocTip.length; i++){
                cantidad.push(numNocTip[i][0]);
                color.push(colorRGB());
                borde.push(colorRGB());
            }
            graficos(titulo, cantidad, color, borde, tipo, encabezado, id);             
        }
    });
}

function traerNumeroUsuarios(){
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroUsuariosCount.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let titulo =[];
            let cantidad=[];
            let color=[];
            let borde=[];
            let tipo='bar';
            let encabezado='Numero de Usuarios';
            let id='numero_usuarios';
            let numUsuarios=JSON.parse(respuesta);
            //console.log(numUsuarios);
            for(var i=0; i<numUsuarios.length; i++){
                titulo.push(numUsuarios[i]["Descripcion"]);
                cantidad.push(numUsuarios[i]["TOTAL"]);
                color.push(colorRGB());
                borde.push(colorRGB());
            }
            //console.log(titulo);
            //console.log(cantidad);
            graficos(titulo, cantidad, color, borde, tipo, encabezado, id);         
        }
    });
}

function traerUsuarios(){
    const tabla=document.getElementById('tabla-usuarios');
    const aprobar={
        aprobar: "true"
    }
	let url='controlador/controladorSeleccionarRegistroUsuarios.php';
    $.ajax({
        type: "GET",
        data: aprobar,
        url: url,
        success: function(respuesta){
            let usuarios=JSON.parse(respuesta);
			let plantilla='';
            usuarios.forEach(usuario => {
                plantilla+=`<tr>
                    <td>${usuario.IDUsuario}</td>
                    <td>${usuario.Apellido}</td>
                    <td>${usuario.Nombre}</td>
                    <td>${usuario.Email}</td>
                    <td>${usuario.Descripcion}</td>
                </tr>`
            });
            tabla.innerHTML+=plantilla;
        }
    });
}

function graficos(titulo, cantidad, color, borde, tipo, encabezado, id){
    const ctx = document.getElementById(id);
    const myChart = new Chart(ctx, {
    type: tipo,
    data: {
        labels: titulo,
        datasets: [{
            label: encabezado,
            data: cantidad,
            backgroundColor: color,
            borderColor: borde,
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
    });
}

function generarNumero(numero){
	return (Math.random()*numero).toFixed(0);
}

function colorRGB(){
    var color = "("+generarNumero(255)+"," + generarNumero(255) + "," + generarNumero(255) +")";
    return "rgb" + color;
}
