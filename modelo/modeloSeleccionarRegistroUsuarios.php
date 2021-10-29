<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroUsuarios($tabla){
        $stmt = conexion::conectar()->prepare("SELECT IDUsuario, Apellido, Nombre, Email, Descripcion FROM $tabla JOIN tipousuario ON $tabla.IDTipoUsuario=tipousuario.IDTipoUsuario");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}