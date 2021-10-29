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
        <form id="registro-usuarios">

        </form>
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_registro-usuarios.js"></script>
</body>
</html>