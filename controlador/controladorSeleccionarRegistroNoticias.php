<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroNoticias.php";
    $tabla="noticia";
    $respuesta=modelo::seleccionarRegistroNoticias($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}