<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroNoticiasTipsCount.php";
    $tabla="noticia";
    $tabla2='tip';
    $respuesta=modelo::seleccionarRegistroNoticiasCount($tabla);
    $respuesta2=modelo::seleccionarRegistroTipsCount($tabla2);
    $array_resultante= array_merge($respuesta,$respuesta2);
    $jsonstring=json_encode($array_resultante);
    echo $jsonstring;
}