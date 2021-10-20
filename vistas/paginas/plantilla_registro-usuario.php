<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO-USUARIOS</title>
    <link href="vistas/css/estilo_plantilla_registro-usuario.css" rel="stylesheet">
</head>
<body>
    <div class="margen">
        <form class="registro" id="registro">
            <div class="ingreso-logo">
                <img src="vistas/img/logo.png">
            </div>
            <input type="email" name="email_usuario" placeholder="CORREO" required id="input_email_usuario">
            <input type="text" name="id_usuario" placeholder="USUARIO" required id="input_id_usuario">
            <input type="text" name="apellido_usuario" placeholder="APELLIDO" required id="input_apellido_usuario">
            <input type="text" name="nombre_usuario" placeholder="NOMBRE" required id="input_nombre_usuario">
            <input type="password" name="password_usuario" placeholder="CONTRASEÑA" required id="input_password_usuario">
            <div class="ingreso-button">
                <button type="submit">REGISTRARSE</button>
            </div>
        </form>
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_registro-usuario.js"></script>
</body>
</html>