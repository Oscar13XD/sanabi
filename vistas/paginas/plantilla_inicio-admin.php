<?php
if(isset($_SESSION["validarIngreso"])){

	if($_SESSION["validarIngreso"][0]!="okAdm"){
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
    <link href="vistas/css/estilo_plantilla_inicio-admin.css" rel="stylesheet">
</head>
<body>
    <div class="titulo">
        <div class="linea-izquierda"></div>
        <div class="titulo-centro" id="titulo_header">BIENVENIDO ADMINISTRADOR</div>
        <div class="linea-derecha"></div>
    </div>
    <nav class="navegador">
        <ul>
            <li><a href="index.php?pagina=plantilla_inicio-admin&nav=plantilla_perfil-admin">INICIO</a></li>
            <li><a href="">PUBLICAR</a></li>
            <li class="item_r"><a href="index.php?pagina=plantilla_cerrar-sesion">CERRAR SESION</a></li>
        </ul>
    </nav>
    <?php
        if(isset($_GET["nav"])){
            if($_GET["nav"]=="plantilla_perfil-admin"){
                include $_GET["nav"].".php";
            }else{
                include "plantilla_error404.php";
            }
        }else{
            include "plantilla_perfil-admin.php";
        }
    ?>
</body>
</html>