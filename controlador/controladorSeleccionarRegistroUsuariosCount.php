<?php
if(isset($_GET["aprobar"])){
    require_once __DIR__."../../modelo/modeloSeleccionarRegistroUsuariosCount.php";
    $tabla="usuario";
    $respuesta=modelo::seleccionarRegistroUsuariosCount($tabla);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;

}