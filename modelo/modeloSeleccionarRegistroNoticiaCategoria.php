<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroNoticiaCategoria($tabla, $columna, $valor){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla JOIN categoria ON $tabla.IDCategoria=categoria.IDCategoria WHERE $columna = :$columna");
        $stmt->bindParam(":".$columna, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }
}