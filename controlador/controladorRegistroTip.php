<?php
if(isset($_POST["IDUsuario"])){
    date_default_timezone_set("America/Bogota");
    require_once __DIR__."../../modelo/modeloRegistroTip.php";
    $tabla="tip";
    $datos=array(
        "Titulo"=>$_POST["Titulo"],
        "Descripcion"=>$_POST["Descripcion"],
        "Fecha"=>$fechaActual=date("Y-m-d"),
        "IDUsuario"=>$_POST["IDUsuario"]
    );

    $respuesta=modelo::registroTip($tabla, $datos);
    print_r($respuesta);
}