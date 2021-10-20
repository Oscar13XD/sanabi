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
    <title>INICIO-ADMIN</title>
    <link href="vistas/css/estilo_plantilla_perfil-admin.css" rel="stylesheet">
</head>
<body>
    <div class="margen">
        <div class="informacion">
            <div class="contenedor-img">
                <div id="imagen"></div>
        		<div class="seleccionar-archivo-vista">
                    <p>Seleccionar Imagen</p>
            		<input type="file"id="seleccionar-imagen" class="seleccionar-archivo" >
                </div>
                <div class="guardar bg-success">Guardar</div>
            </div>
            <div class="contendor-datos">
                <div>IDUsuario: <?php echo $usuario["IDUsuario"];?></div>
                <div>Nombre Usuario: <?php echo $usuario["Nombre"];?></div>
                <div>Apellido Usuario: <?php echo $usuario["Apellido"];?></div>
                <div>Correo Usuario: <?php echo $usuario["Email"];?></div>
            </div>
        </div>
    </div>
    <script>
        var IDUsuario='<?php echo $usuario["IDUsuario"];?>';
    </script>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_perfil-admin.js"></script>
</body>
</html>