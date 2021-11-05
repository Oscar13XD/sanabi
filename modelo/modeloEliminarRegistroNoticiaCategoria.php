<?php
require_once __DIR__."/conexion.php";
class modelo{
	static public function eliminarRegistroNoticiaCategoria($tabla, $datos){
		$stmt = conexion::conectar()->prepare("DELETE FROM $tabla WHERE IDNoticia=:IDNoticia && IDCategoria=:IDCategoria");
		$stmt->bindParam(":IDNoticia", $datos["IDNoticia"], PDO::PARAM_STR);
		$stmt->bindParam(":IDCategoria", $datos["IDCategoria"], PDO::PARAM_STR);
        if($stmt->execute()){
			return "ok";
		}else{
			print_r(conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
    }
}