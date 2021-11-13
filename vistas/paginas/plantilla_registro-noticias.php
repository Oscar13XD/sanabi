<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO-NOTICIAS</title>
    <link href="vistas/css/estilo_plantilla_registro-noticias.css" rel="stylesheet">
</head>
<body>
    <div class="titulo-agregar-categoria">
        <div>AGREGAR CATEGORÍAS</div>
    </div>
    <form class="registro-categorias" id="registro_categorias">
        <div>
            <input type="number" placeholder="ID_NOTICIA" id="registro_IDNoticia" required>  
        </div>
        <div class="categoria">
            <select class="" id="lista-categorias" required>	
                <option selected disabled value="">CATEGORÍA</option>
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
                    <th><div>TÍTULO</div></th>
                    <th><div>DESCRIPCIÓN</div></th>
                    <th><div>FECHA</div></th>
                    <th><div>ACCIONES</div></th>
                </tr>
            </thead>
            <tbody id="tabla-noticias"></tbody>
        </table>
    </div>

    <div class="titulo-agregar-categoria">
        <div>REGISTRO TIPS</div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDITAR NOTICIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="registro-noticia" id="agregar-noticia">
                        <div class="titulo-noticia">
                            <label for="titulo_noticia"class="form-label">TÍTULO</label>
                            <input type="text" class="form-control" placeholder="TITULO" id="titulo_noticia" required>
                        </div>
                        <div class="imagen-enunciado mt-2">
                            <div class="contenedores">
                                <label class="form-label">IMAGEN</label>
                                <div class="imagen" id="imagen"></div>
                                <div class="agregar-img">
                                    <i class="fas fa-pencil-alt"></i>
                                    <input type="file" id="seleccionar-imagen" class="seleccionar-archivo">
                                </div>
                            </div>
                            <div class="contenedores">
                                <label class="form-label">ENUNCIADO</label>
                                <div>
                                    <textarea id="enunciado_noticia"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="enlace-noticia mt-2">
                            <label for="enlace_noticia"class="form-label">ENLACE</label>
                            <input type="text" class="form-control" placeholder="ENLACE (opcional)" id="enlace_noticia">
                        </div>
                        <hr>
                        <button type="button" class="btn btn-danger cerrar mx-2" data-bs-dismiss="modal">CERRAR</button>
                        <button type="submit" class="btn btn-success cerrar">GUARDAR</button>
                    </form>
                    <br><br>
                    <div class="categoria-noticia table-responsive">
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th>CATEGORÍA</th>
                                        <th>ACCIONES</th>
                                    </tr>
                            </thead>
                            <tbody id="categoria-noticia"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-noticias table-responsive mb-4">
        <table class="table">
            <thead>
                <tr>
                    <th><div>ID_TIP</div></th>
                    <th><div>TÍTULO</div></th>
                    <th><div>DESCRIPCIÓN</div></th>
                    <th><div>FECHA</div></th>
                </tr>
            </thead>
            <tbody id="tabla-tips"></tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EDITAR TIP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="registro-noticia" id="agregar-tip">
                        <div class="titulo-tip">
                            <label for="titulo_tip"class="form-label">TÍTULO</label>
                            <input type="text" class="form-control" placeholder="TITULO" id="titulo_tip" required>
                        </div>
                        <div class="contenedores">
                            <label class="form-label">ENUNCIADO</label>
                            <div>
                                <textarea id="enunciado_tip"></textarea>
                            </div>
                        </div>
                        <hr>
                        <button type="button" class="btn btn-danger cerrar mx-2" data-bs-dismiss="modal">CERRAR</button>
                        <button type="submit" class="btn btn-success cerrar">GUARDAR</button>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_registro-noticias.js"></script>
    <script>
        var IDUsuario='<?php echo $usuario["IDUsuario"];?>';
    </script>
</body>
</html>