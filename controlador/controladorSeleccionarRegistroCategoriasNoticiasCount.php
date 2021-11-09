<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroCategoriasNoticiasCount.php";
    $tabla="noticia_categoria";
    $respuesta=modelo::modeloSeleccionarRegistroCategoriasNoticiasCount($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}