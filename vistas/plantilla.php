<?php
require_once "controlador/controladorInicioUsuario.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/bootstrap-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/css/estilo_body.css">
    <link rel="icon"  href="vistas/img/logo.ico">
</head>
<body>
    <div class="container">
    <?php
        if(isset($_GET["pagina"])){
            if($_GET["pagina"]=="plantilla_inicio-de-sesion"||
                $_GET["pagina"]=="plantilla_inicio"||
                $_GET["pagina"]=="plantilla_registro-usuario"||
                $_GET["pagina"]=="plantilla_inicio-admin"||
                $_GET["pagina"]=="plantilla_inicio-user"||
                $_GET["pagina"]=="plantilla_cerrar-sesion"
            ){
                include "paginas/".$_GET["pagina"].".php";
            }else{
                include "paginas/plantilla_error404.php";
            }
        }else{
            include "paginas/plantilla_inicio.php";
        }
    ?>
    </div>
    <script src="vistas/bootstrap-5/js/bootstrap.min.js"></script>
    <script src="vistas/sweetalert2/sweetalert2.all.min.js"></script>
</body>
</html>