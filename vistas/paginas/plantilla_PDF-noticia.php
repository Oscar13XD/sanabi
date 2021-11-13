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
require_once __DIR__.'/../mpdf/vendor/autoload.php';
require_once "controlador/controladorPDFNoticia.php";

if(isset($_POST["ID_Noticia"])){
    $noticia=controladorPDF::seleccionarRegistroNoticiaU($_POST["ID_Noticia"]);
	//echo '<pre>'; print_r($noticia); echo '</pre>';
    $fecha = date("d/m/Y", strtotime($noticia["Fecha"]));

    $mpdf = new \Mpdf\Mpdf([
        'format' => 'A4'
    ]);
    $stylesheet = file_get_contents('vistas/css/estilo_plantilla_ver-noticias.css');
    $mpdf->SetTitle('REPORTE-NOTICIA');
    $mpdf->SetWatermarkImage('vistas/img/logo.png',0.1,'F');
    $mpdf->showWatermarkImage = true;
    $mpdf->SetCompression(true);
    $mpdf->addpage();
    include __DIR__.'/PDF-noticia.php';
    $mpdf->Output('REPORTE-NOTICIA.pdf', \Mpdf\Output\Destination::INLINE);
}