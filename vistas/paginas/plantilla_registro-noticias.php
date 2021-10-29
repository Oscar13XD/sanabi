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
                    <th><div>ID_NOTICIA</div></th>
                    <th><div>TITULO</div></th>
                    <th><div>DESCRIPCION</div></th>
                    <th><div>FECHA</div></th>
                    <th><div>ACCIONES</div></th>
                </tr>
            </thead>
            <tbody id="tabla-noticias"></tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR NOTICIA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="registro-noticia">
                    <div class="titulo-noticia">
                        <label for="titulo_noticia"class="form-label">TITULO</label>
                        <input type="text" class="form-control" placeholder="TITULO" id="titulo_noticia" required>
                    </div>
                    <div class="imagen-enunciado mt-2">
                        <div class="contenedores">
                            <label class="form-label">IMAGEN</label>
                            <div class="imagen" id="imagen">
                            </div>
                        </div>
                        <div class="contenedores">
                            <label class="form-label">ENUNCIADO</label>
                            <div>
                                <textarea id="enunciado_noticia"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_registro-noticias.js"></script>
</body>
</html>