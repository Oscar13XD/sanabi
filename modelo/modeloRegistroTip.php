<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function registroTip($tabla, $datos){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (Titulo, Descripcion, Fecha, IDUsuario) VALUES (:Titulo, :Descripcion, :Fecha, :IDUsuario)");
		$stmt->bindParam(":Titulo", $datos["Titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":Fecha", $datos["Fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":IDUsuario", $datos["IDUsuario"], PDO::PARAM_STR);
        if($stmt->execute()){
			$stmt=null;
			return "ok";
		}else{
			print_r(conexion::conectar()->errorInfo());
		}
    }
}