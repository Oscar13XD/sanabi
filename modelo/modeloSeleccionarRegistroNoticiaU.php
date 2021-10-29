<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroNoticiaU($tabla, $columna, $valor){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
        $stmt->bindParam(":".$columna, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt=null;
    }
}