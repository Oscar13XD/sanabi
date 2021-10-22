<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroCategoria($tabla){
        $stmt = conexion::conectar()->prepare("SELECT IDCategoria, Descripcion FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}