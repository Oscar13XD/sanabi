<?php
if(isset($_GET["IDNoticia"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroNoticiaU.php";
    $tabla="noticia";
    $columna="IDNoticia";
    $valor=$_GET["IDNoticia"];
    $respuesta=modelo::seleccionarRegistroNoticiaU($tabla, $columna, $valor);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;    
}