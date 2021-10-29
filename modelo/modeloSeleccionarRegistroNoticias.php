<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroNoticias($tabla){
        $stmt = conexion::conectar()->prepare("SELECT IDNoticia, Titulo, Descripcion, DATE_FORMAT(Fecha, '%d/%m/%Y') AS Fecha FROM $tabla ORDER BY Fecha DESC, IDNoticia DESC");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}