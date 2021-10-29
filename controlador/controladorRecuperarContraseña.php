<?php
    require_once __DIR__."/conexion.php";
     $Email =$_POST['Email'];

    $Token = random_bytes(5);

    include "plantilla_mail.php";

    if($enviado){
        $conexion->query("insert into passwords(Email, Token, Codigo)
        values('$Email','$Token','$Codigo')") or die($conexion->error);
        echo '<p>verifica tu email para restablecer contraseña</p>';
    }
?>