<?php
require_once __DIR__."/conexion.php";
class modelo{
    static public function actualizarRegistroNoticia($tabla, $datos){
		$stmt = conexion::conectar()->prepare("UPDATE $tabla SET Titulo=:Titulo, Descripcion=:Descripcion, Enlace=:Enlace, Fecha=:Fecha, Imagen=:Imagen, IDUsuario=:IDUsuario WHERE IDNoticia=:IDNoticia");
		$stmt->bindParam(":Titulo", $datos["Titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":Descripcion", $datos["Descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":Enlace", $datos["Enlace"], PDO::PARAM_STR);
		$stmt->bindParam(":Fecha", $datos["Fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":Imagen", $datos["Imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":IDUsuario", $datos["IDUsuario"], PDO::PARAM_STR);
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