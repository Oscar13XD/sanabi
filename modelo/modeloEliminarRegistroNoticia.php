<?php
require_once __DIR__."/conexion.php";
class modelo{
	static public function eliminarRegistroNoticia($tabla, $datos){
		$stmt = conexion::conectar()->prepare("DELETE FROM $tabla WHERE IDNoticia=:IDNoticia");
		$stmt->bindParam(":IDNoticia", $datos["IDNoticia"], PDO::PARAM_INT);
        if($stmt->execute()){
			return "ok";
		}else{
			print_r(conexion::conectar()->errorInfo());
		}
		$stmt->close();
		$stmt=null;
    }
}