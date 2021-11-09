<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO-USUARIOS</title>
    <link href="vistas/css/estilo_plantilla_registro-usuarios.css" rel="stylesheet">
</head>
<body>
    <div class="contenedor-usuarios">
        <div class="contenedor-tabla table-responsive">
            <table class="table">
                <thead>
                    <tr class="">
                        <th>IDUSUARIO</th>
                        <th>APELLIDO</th>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th>ROL</th>
                    </tr>
                </thead>
                <tbody id="tabla-usuarios"></tbody>
            </table>
        </div>
    </div>
    <div Class="titulo-graficos">
        <div>
            ESTADISTICAS
        </div>
    </div>
    <div class="contenedor-graficas">
        <div>
            <canvas id="numero_usuarios"></canvas>
        </div>
        <div>
            <canvas id="numero_noticias-tips"></canvas>
        </div>
        <div>
            <canvas id="numero_noticias-cat"></canvas>
        </div>
    </div>


    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/chart/chart.min.js"></script>
    <script src="vistas/js/plantilla_registro-usuarios.js"></script>
</body>
</html>