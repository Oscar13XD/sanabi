<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarImagenUsuario($tabla, $datos){
        $stmt = conexion::conectar()->prepare("SELECT Imagen FROM $tabla WHERE IDUsuario=:IDUsuario");
        $stmt->bindParam(":IDUsuario", $datos["IDUsuario"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt=null;
    }
}