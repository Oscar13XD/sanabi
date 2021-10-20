<?php 
class conexion {
	static public function conectar (){
		$url = new PDO("mysql:host=localhost;dbname=sanabi",
			"root","");
		$url -> exec ("set names utf8");
		return $url;
	} 
}