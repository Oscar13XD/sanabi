<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroTips($tabla){
        $stmt = conexion::conectar()->prepare("SELECT IDTip, Titulo, Descripcion, IDUsuario, DATE_FORMAT(Fecha, '%d/%m/%Y') AS Fecha FROM $tabla ORDER BY MONTH(Fecha) DESC");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}