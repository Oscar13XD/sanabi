<?php
if(isset($_GET["IDNoticia"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroNoticiaCategoria.php";
    $tabla="noticia_categoria";
    $columna="IDNoticia";
    $valor=$_GET["IDNoticia"];
    $respuesta=modelo::seleccionarRegistroNoticiaCategoria($tabla, $columna, $valor);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}
