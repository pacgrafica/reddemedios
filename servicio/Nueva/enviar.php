<?php  

// Llamando a los campos
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];

$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "brayanalex.ltg@gmail.com";

$asunto = "Un servicio nuevo";

$carta = "De: $codigo \n";
$carta .= "Nombre: $nombre \n";
$carta .= "Cédula: $cedula \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Servicio: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
  echo '<script> alert("Su Servicio Fue Enviado Exitosamente"); window.history.go(-3); </script>';
    exit;


?>