<?php
if(isset($_POST["IDNoticia"])){
    require_once __DIR__."../../modelo/modeloEliminarRegistroNoticiaCategoria.php";
    $tabla="noticia_categoria";
    $datos=array(
        "IDNoticia"=>$_POST["IDNoticia"],
        "IDCategoria"=>$_POST["IDCategoria"]
    );
    $respuesta=modelo::eliminarRegistroNoticiaCategoria($tabla, $datos);
    echo $respuesta;
}