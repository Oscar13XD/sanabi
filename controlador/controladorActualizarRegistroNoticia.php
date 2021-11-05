<?php
if(isset($_POST["IDUsuario"])){
    date_default_timezone_set("America/Bogota");
    require_once __DIR__."../../modelo/modeloActualizarRegistroNoticia.php";
    $tabla="noticia";
    $datos=array(
        "IDNoticia"=>$_POST["IDNoticia"],
        "Titulo"=>$_POST["Titulo"],
        "Descripcion"=>$_POST["Descripcion"],
        "Enlace"=>$_POST["Enlace"],
        "Fecha"=>$fechaActual=date("Y-m-d"),
        "IDUsuario"=>$_POST["IDUsuario"],
        "Imagen"=>$_POST["Imagen"],  
    );
    $respuesta=modelo::actualizarRegistroNoticia($tabla, $datos);
    print_r($respuesta);
}