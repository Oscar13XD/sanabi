<?php
if(isset($_POST["IDUsuario"])){
    require_once __DIR__."../../modelo/modeloActualizarImgUsuario.php";
    $tabla="usuario";
    $datos=array(
        "IDUsuario"=>$_POST["IDUsuario"],
        "Imagen"=>$_POST["Imagen"]
    );
    $respuesta=modelo::actualizarImgUsuario($tabla, $datos);
    if($respuesta=="ok"){
        echo $respuesta;
    }

}
