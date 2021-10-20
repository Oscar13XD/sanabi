<?php
session_start();
require_once __DIR__."../../modelo/modeloInicioUsuario.php";
if(isset($_POST["IDUsuario"])){
    $tabla="usuario";
    $columna="IDUsuario";
    $valor=$_POST["IDUsuario"];
    $respuesta=modelo::seleccionarRegistroUsuario($tabla, $columna, $valor);
    if($respuesta!=null){
        if($respuesta["IDUsuario"]==$_POST["IDUsuario"]&&$respuesta["Password"]==$_POST["Password"]){
            if($respuesta["IDTipoUsuario"]=="0"){
                $_SESSION["validarIngreso"]=array();
                $_SESSION["validarIngreso"][0]="okAdm";
                $_SESSION["validarIngreso"][1]=$respuesta;
                echo "okAdm";
            }else if($respuesta["IDTipoUsuario"]=="1"){
                $_SESSION["validarIngreso"]=array();
                $_SESSION["validarIngreso"][0]="okUser";
                $_SESSION["validarIngreso"][1]=$respuesta;
                echo "okUser";
            }else{
                echo "El usuario no existe";
            }            
        }else{
            echo "El usuario no existe";
        }
    }else{
        echo "El usuario no existe";
    }
}