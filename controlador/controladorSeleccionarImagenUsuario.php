<?php
if(isset($_GET["IDUsuario"])){
    require_once __DIR__."../../modelo/modeloSeleccionarImagenUsuario.php";
    $tabla="usuario";
    $datos=array(
        "IDUsuario"=>$_GET["IDUsuario"]
    );
    $respuesta=modelo::seleccionarImagenUsuario($tabla, $datos);
    $jsonstring=json_encode($respuesta);
    echo $jsonstring;
}