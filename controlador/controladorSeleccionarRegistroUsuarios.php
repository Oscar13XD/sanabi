<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroUsuarios.php";
    $tabla="usuario";
    $respuesta=modelo::seleccionarRegistroUsuarios($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}