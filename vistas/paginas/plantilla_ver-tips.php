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
    <title>VER TIPS</title>
    <link href="vistas/css/estilo_plantilla_ver-tips.css" rel="stylesheet">
</head>
<body>
    <div class="titulo-agregar-tip">
        <div>REGISTRO TIPS</div>
    </div>
    <div class="margen" id="tips">
        
    </div>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_ver-tips.js"></script>
</body>
</html>