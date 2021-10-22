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
    <form class="noticia">
        <div class="titulo-noticia">
            <input type="text" placeholder="TITULO">
        </div>
        <div class="titulo-enunciado">
            <textarea id="" placeholder="ENUNCIADO"></textarea>
        </div>
        <div class="tipo-noticia" id="lista">
            <div class="categoria"> 
                <select class="" id="lista-categorias">	
                    <option selected disabled value="">TIPO</option>
                    <option value="">ECONOMIA</option>
                </select>
            </div>
        </div>
        <button class="btn btn-publicar">PUBLICAR</button>

    </form>
    <button id="btn-agregar"class="btn btn-success btn-agregar"><i class="fas fa-plus-circle"></i></button>
    <script src="vistas/jquery-3/jquery-3.6.0.min.js"></script>
    <script src="vistas/js/plantilla_publicar-noticias.js"></script>
</body>
</html>