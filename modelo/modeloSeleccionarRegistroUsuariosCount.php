<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroUsuariosCount($tabla){
        $stmt = conexion::conectar()->prepare("SELECT Descripcion, COUNT(*) AS TOTAL FROM $tabla JOIN tipousuario ON $tabla.IDTipoUsuario=tipousuario.IDTipoUsuario GROUP BY Descripcion");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}