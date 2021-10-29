<?php

// llamado a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// datos para el correo
$destinatario = "lmbredice@gmail.com";
$asunto = "Contacto desde la web"

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n"
$mensaje .= "Mensaje: $mensaje";

// enviando mensaje
mail ($destinatario, $asunto, $carta);

?>