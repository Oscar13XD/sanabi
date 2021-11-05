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

    static public function seleccionarRegistroNoticiaCategoria($tabla, $datos){
        $stmt = conexion::conectar()->prepare("SELECT IDNoticia, IDCategoria FROM $tabla WHERE IDNoticia=:IDNoticia && IDCategoria=:IDCategoria");
        $stmt->bindParam(":IDNoticia", $datos["IDNoticia"], PDO::PARAM_INT);
        $stmt->bindParam(":IDCategoria", $datos["IDCategoria"], PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt=null;
    }

    static public function RegistroNoticiaCategoria($tabla, $datos){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (IDNoticia, IDCategoria) VALUES (:IDNoticia, :IDCategoria)");
        $stmt->bindParam(":IDNoticia", $datos["IDNoticia"], PDO::PARAM_INT);
        $stmt->bindParam(":IDCategoria", $datos["IDCategoria"], PDO::PARAM_INT);
        if($stmt->execute()){
			$stmt=null;
			return "ok";
		}else{
			print_r(conexion::conectar()->errorInfo());
		}
    }
}