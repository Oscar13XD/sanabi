<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function modeloSeleccionarRegistroCategoriasNoticiasCount($tabla){
        $stmt = conexion::conectar()->prepare("SELECT $tabla.IDCategoria, Descripcion, COUNT(*) AS TOTAL_NOTICIAS FROM $tabla JOIN categoria ON $tabla.IDCategoria=categoria.IDCategoria GROUP BY IDCategoria");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}