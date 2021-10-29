<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO-NOTICIAS</title>
    <link href="vistas/css/estilo_plantilla_registro-noticias.css" rel="stylesheet">
</head>
<body>
    <div class="titulo-agregar-categoria">
        <div>AGREGAR CATEGORIAS</div>
    </div>
    <form class="registro-categorias">
        <div>
            <input type="text" placeholder="ID_NOTICIA">  
        </div>
        <div class="categoria">
            <select class="" id="lista-categorias">	
                <option selected disabled value="">CATEGORIA</option>
            </select>
        </div>
        <div>
            <button class="btn ">AGREGAR</button>
        </div>
    </form>
    <div class="titulo-agregar-categoria">
        <div>REGISTRO NOTICIAS</div>
    </div>
    <div class="contenedor-noticias table-responsive mb-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID_NOTICIA</th>
                    <th>TITULO</th>
                    <th>DESCRIPCION</th>
                    <th>FECHA</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody id="tabla-noticias"></tbody>
        </table>
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_registro-noticias.js"></script>
</body>
</html>