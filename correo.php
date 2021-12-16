<?php

    $destinatario = 'kevinarguello5@hotmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina KeV";
    $mensajeCompleto = "\n nombre: " . $nombre . "\n"."email: " . $email ."\n"."mensaje" .$mensaje;  ;

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    header('location: index.html');

?>
