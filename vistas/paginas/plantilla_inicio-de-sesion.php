<!DOCTYPE html>
<html>
<head>
    <title>INGRESO-USUARIOS</title>
    <link href="vistas/css/estilo_plantilla_inicio-de-sesion.css" rel="stylesheet">
</head>
<body>
    <div class="margen">
        <form class="ingreso" id="ingreso">
            <div class="ingreso-logo">
                <img src="vistas/img/logo.png">
            </div>
            <input type="text" name="id_usuario" placeholder="USUARIO" required id="input_id_usuario" />
            <input type="password" name="password_usuario" placeholder="CONTRASEÑA" required id="input_password_usuario" />
            <div class="ingreso-button">
                <button type="submit">INGRESAR</button>
            </div>
            <div class="olvidar-contraseña">
                <a href="index.php?pagina=plantilla_olvido-contraseña">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_inicio-de-sesion.js"></script>
</body>
</html>
