<?php
if(isset($_POST["IDNoticia"])){
    require_once __DIR__."../../modelo/modeloRegistroNoticiaCategoria.php";
    $tabla="noticia";
    $columna="IDNoticia";
    $valor=$_POST["IDNoticia"];
    $validar=modelo::seleccionarRegistroNoticiaU($tabla, $columna, $valor);
    if($validar!=null){
        $tabla2="noticia_categoria";
        $datos=array(
            "IDNoticia"=>$_POST["IDNoticia"],
            "IDCategoria"=>$_POST["IDCategoria"]
        );
        $validar2=modelo::seleccionarRegistroNoticiaCategoria($tabla2, $datos);
        if($validar2==null){
            $respuesta=modelo::registroNoticiaCategoria($tabla2, $datos);
            echo $respuesta;
        }else{
            print_r("error_noticia_categoria");
        }
    }else{
        echo "error_id_noticia";
    }
    


}