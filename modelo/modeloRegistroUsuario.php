<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function seleccionarRegistroUsuario($tabla, $columna, $valor){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla JOIN tipousuario ON $tabla.IDTipoUsuario=tipousuario.IDTipoUsuario WHERE $columna = :$columna");
        $stmt->bindParam(":".$columna, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt=null;
    }
    static public function registroUsuario($tabla, $datos){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (IDUsuario, Apellido, Nombre, Email, Password, IDTipoUsuario) VALUES (:IDUsuario, :Apellido, :Nombre, :Email, :Password, :IDTipoUsuario)");

		$stmt->bindParam(":IDUsuario", $datos["IDUsuario"], PDO::PARAM_STR);
		$stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Email", $datos["Email"], PDO::PARAM_STR);
		$stmt->bindParam(":Password", $datos["Password"], PDO::PARAM_STR);
		$stmt->bindParam(":IDTipoUsuario", $datos["IDTipoUsuario"], PDO::PARAM_STR);

        if($stmt->execute()){
			return "ok";
		}else{
			print_r(conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
    }
}