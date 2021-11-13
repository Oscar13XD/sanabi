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
$html='<div class="titulo-notica-PDF">'.$noticia["Titulo"].'</div>
    <hr>
    <div class="imagen-notica-PDF">
        <img class="imagen-PDF" src="'.$noticia["Imagen"].'">
    </div>
    <hr>
    <div class="enunciado-notica-PDF">'.$noticia["Descripcion"].'</div>
    <hr>
    <div class="fecha-notica-PDF">FECHA PUBLICACION: '.$fecha.'</div>
    <div class="fecha-notica-PDF">AUTOR: '.$noticia["IDUsuario"].'</div>
';


$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);