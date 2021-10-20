<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function actualizarImgUsuario($tabla, $datos){
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET Imagen=:Imagen WHERE IDUsuario=:IDUsuario");
		$stmt->bindParam(":Imagen", $datos["Imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":IDUsuario", $datos["IDUsuario"], PDO::PARAM_STR);
		if($stmt->execute()){
			$stmt=null;
			return "ok";
		}else{
			print_r(conexion::conectar()->errorInfo());
		}
    }
}