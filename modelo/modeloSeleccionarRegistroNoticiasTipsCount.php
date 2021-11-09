<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroNoticiasCount($tabla){
        $stmt = conexion::conectar()->prepare("SELECT COUNT(IDNoticia) AS NOTICIAS FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function seleccionarRegistroTipsCount($tabla){
        $stmt = conexion::conectar()->prepare("SELECT COUNT(*) AS TIPS FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}