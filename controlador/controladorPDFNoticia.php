<?php
require_once __DIR__."../../modelo/modeloSeleccionarRegistroNoticiaUPDF.php";
class controladorPDF{
    static public function seleccionarRegistroNoticiaU($valor){
        $tabla="noticia";
        $columna="IDNoticia";
        $respuesta=modeloPHP::seleccionarRegistroNoticiaU($tabla, $columna, $valor);
        return $respuesta;
    }
}