<?php
if(isset($_POST["IDUsuario"])){
    require_once __DIR__."../../modelo/modeloRegistroUsuario.php";
    $tabla="usuario";
    $columna="IDUsuario";
    $valor=$_POST["IDUsuario"];
    $validarDocumento=modelo::seleccionarRegistroUsuario($tabla, $columna, $valor);
    if($validarDocumento==null){
        $datos=array(
            "IDUsuario"=>$_POST["IDUsuario"],
            "Apellido"=>$_POST["Apellido"],
            "Nombre"=>$_POST["Nombre"],
            "Email"=>$_POST["Email"],
            "Password"=>$_POST["Password"],
            "IDTipoUsuario"=>"1"
        );
        $respuesta=modelo::registroUsuario($tabla, $datos);
        if($respuesta=="ok"){
            echo "usuario registrado";
        }
    }else{
        echo "El usuario existe";
    }
}