<?php
if(isset($_POST["IDNoticia"])){
    require_once __DIR__."../../modelo/modeloEliminarRegistroNoticia.php";
    $tabla="noticia";
    $datos=array(
        "IDNoticia"=>$_POST["IDNoticia"]
    );
    $respuesta=modelo::eliminarRegistroNoticia($tabla, $datos);
    print_r($respuesta);
}