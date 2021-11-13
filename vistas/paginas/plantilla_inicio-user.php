<?php
if(isset($_SESSION["validarIngreso"])){

	if($_SESSION["validarIngreso"][0]!="okUser"){
		echo '<script>window.location="index.php?pagina=plantilla_inicio";</script>';
		return;
	}
}else{
	echo '<script>window.location="index.php?pagina=plantilla_inicio";</script>';
	return;
}
$usuario=$_SESSION["validarIngreso"][1];
?>
<!DOCTYPE html>
<html>
<head>
    <link href="vistas/css/estilo_plantilla_inicio-user.css" rel="stylesheet">
</head>
<body>
    <div class="titulo">
        <div class="linea-izquierda"></div>
        <div class="titulo-centro" id="titulo_header"></div>
        <div class="linea-derecha"></div>
    </div>
    <nav class="navegador">
        <ul>
            <li><a href="index.php?pagina=plantilla_inicio-user&nav=plantilla_perfil-user">INICIO</a></li>
            <li><a href="index.php?pagina=plantilla_inicio-user&nav=plantilla_ver-noticias">VER NOTICIAS</a></li>
            <li><a href="index.php?pagina=plantilla_inicio-user&nav=plantilla_ver-tips">VER TIPS</a></li>
            <li class="item_r"><a href="index.php?pagina=plantilla_cerrar-sesion">CERRAR SESION</a></li>
        </ul>
    </nav>
    <?php
        if(isset($_GET["nav"])){
            if($_GET["nav"]=="plantilla_perfil-user"||
                $_GET["nav"]=="plantilla_ver-noticias"||
                $_GET["nav"]=="plantilla_ver-tips"
            ){
                include $_GET["nav"].".php";
            }else{
                include "plantilla_error404.php";
            }
        }else{
            include "plantilla_perfil-user.php";
        }
    ?>
</body>
</html>