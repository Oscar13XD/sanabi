<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroTips.php";
    $tabla="tip";
    $respuesta=modelo::seleccionarRegistroTips($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}