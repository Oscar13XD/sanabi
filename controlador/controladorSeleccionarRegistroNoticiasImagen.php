<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroNoticiasImagen.php";
    $tabla="noticia";
    $respuesta=modelo::seleccionarRegistroNoticiasImagen($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}