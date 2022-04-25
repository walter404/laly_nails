<?php
//donde va a llegar el correo que te manda
$destinatario = 'walterame123@gmail.com';

//variables del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header =  "Enviado desde la pagina de ...";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $mensaje, $mensajeCompleto, $header);
echo "<script>alert('correo enviado')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>