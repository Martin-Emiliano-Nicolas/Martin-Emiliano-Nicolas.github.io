<?php
$nombre = $_POST['nombre'];
// $apellido=$_POST['apellido'];
$mail = $_POST['email'];
$empresa = $_POST['mensaje'];


 // CONFIGURACION HTML
 $enviado_bien = "Su formulario ha sido enviado correctamente";
 $enviado_mal  = "ERROR: No se pudo enviar";

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre .",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date("d/m/Y H:i:s");

$para = 'nico051091@gmail.com';
$asunto = 'Mensaje de mi sitio web personal-CV';

$maill= mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location:index.html#contacto");
if (mail($para, $asunto, $mensaje, $header)) {
    echo $enviado_bien;
  } else {
    echo $enviado_mal;
  }

?>