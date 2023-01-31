<?php
$nombre_formu= $_POST['nombre'];
// $apellido_formu= $_POST['apellido'];
// $edad_formu= $_POST['edad'];
$correo_formu= $_POST['email'];
// $motivo_consulta =$_POST['motivo'];
$detalle_consulta=$_POST['mensaje'];
// $apellido_formu= $_POST['apellido'];

$mensaje= "Nombre: ".$nombre_formu."\n"."Correo: ".$correo_formu."\n"."Mensaje: ".$detalle_consulta;

$remitente= "From: Martin Nicolas <nico051091@gmail.com>";

mail ($correo_formu,"Datos de Consulta web",$mensaje, $remitente);
// mail ("nico051091@gmail.com", "Datos de Consulta web", $mensaje);

header("Location: index.html");

?>