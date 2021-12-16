<?php

    $destinatario = 'kev.creativedesign@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina KeV";
    $mensajeCompleto = "\n nombre: " . $nombre . "\n"."email: " . $email ."\n"."mensaje" .$mensaje;  ;

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    echo "<script>alert('correo enviado exitosamente)</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000) </script>";

?>
