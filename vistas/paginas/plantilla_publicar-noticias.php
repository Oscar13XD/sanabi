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
    <title>PUBLICAR-NOTICIAS</title>
    <link href="vistas/css/estilo_plantilla_publicar-noticias.css" rel="stylesheet">
</head>
<body>
    <div class="titulo-agregar-noticia">
        <div>AGREGAR NOTICIA</div>
    </div>
    <form class="noticia" id="agregar-noticia">
        <div class="titulo-noticia">
            <input type="text" placeholder="TITULO" id="titulo_noticia" required>
        </div>
        <div class="cotenedor-enu-img">
            <div class="titulo-enunciado">
                <textarea placeholder="ENUNCIADO" id="enunciado_noticia" required></textarea>
            </div>
            <div class="imagen-noticia">
                <div class="imagen" id="imagen">
                </div>
                <div class="seleccionar-archivo-vista">
                    <i class="fas fa-plus"></i>
            		<input type="file"id="seleccionar-imagen" class="seleccionar-archivo">
                    <div class="pt-5 mt-4">
                        IMAGEN
                    </div>
                </div>
            </div>
        </div>
        <div class="titulo-enlace">
            <textarea placeholder="ENLACE (opcional)" id="enlace_noticia"></textarea>
        </div>
        <!--<div class="tipo-noticia" id="lista">
            <div class="categoria" id="lista-cat"> 
                <select class="" id="lista-categorias">	
                    <option selected disabled value="">TIPO</option>
                </select>
            </div>
        </div>-->
        <button type="submit" class="btn btn-publicar">PUBLICAR</button>
    </form>
    <div class="titulo-agregar-noticia">
        <div>AGREGAR TIP</div>
    </div>
    <form class="tip" id="agregar-tip">
        <div class="titulo-tip">
            <input type="text" placeholder="TITULO" id="titulo_tip" required>
        </div>
        <div class="titulo-enunciado-tip">
            <textarea placeholder="ENUNCIADO" id="enunciado_tip" required></textarea>
        </div>
        <button type="submit" class="btn btn-publicar mb-4">PUBLICAR</button>
    </form>
    
    <!--<button id="btn-agregar"class="btn btn-success btn-agregar"><i class="fas fa-plus-circle"></i></button>-->
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_publicar-noticias.js"></script>
    <script>
        var IDUsuario='<?php echo $usuario["IDUsuario"];?>';
    </script>
</body>
</html>