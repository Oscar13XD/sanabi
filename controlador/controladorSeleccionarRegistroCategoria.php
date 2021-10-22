<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroCategoria.php";
    $tabla="categoria";
    $respuesta=modelo::seleccionarRegistroCategoria($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}