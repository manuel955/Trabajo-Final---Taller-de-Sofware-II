<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $destinatario ="Manuel.cortezballardo@outlool.com"
    $asunto = "Contacto desde Club Mascota";

    $carta = "De: $nombre \n"; 
    $carta .= "Correo: $correo \n"; 
    $carta .= "Correo: $correo \n"; 
    $carta .= "Mensaje: $mensaje \n";
    
    mail($destinatario, $asunto, $carta);
    header('Location:mensaje-enviado.php')
?>