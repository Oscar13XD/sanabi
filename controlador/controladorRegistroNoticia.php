<?php
if(isset($_POST["IDUsuario"])){
    date_default_timezone_set("America/Bogota");
    require_once __DIR__."../../modelo/modeloRegistroNoticia.php";
    $tabla="noticia";
    $datos=array(
        "Titulo"=>$_POST["Titulo"],
        "Descripcion"=>$_POST["Descripcion"],
        "Enlace"=>$_POST["Enlace"],
        "Fecha"=>$fechaActual=date("Y-m-d"),
        "IDUsuario"=>$_POST["IDUsuario"],
        "Imagen"=>$_POST["Imagen"]
    );

    $respuesta=modelo::registroNoticia($tabla, $datos);
    print_r($respuesta);

}