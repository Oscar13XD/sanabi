<?php
// Varios destinatarios
$para  = $Email . ', '; // atención a la coma


// título
$título = 'Restablecer contraseña SANABI';
$Codigo = rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer contraseña</title>
</head>
<body>
  <h1> SANABI </h1>
  <p>Restablecer contraseña SANABI</p>
  <h3>'.$Codigo.'</h3>
  <p><small>si usted no envio este codigo, porfavor omitir</small></p>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
/*$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

// Enviarlo
$enviado = false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;
}
?>