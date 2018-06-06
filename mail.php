<?php

    $sd = $_POST['asunto'];
    if(!empty($_POST)){
    $email_to = "soportejm3d@gmail.com";
    $email_subject = $sd;
    $email_message = "Novedad registrada:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Telefono: " . $_POST['asunto'] . "\n";
    $email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


    // Ahora se envía el e-mail usando la función mail() de PHP
     $mail = $_POST['email'];
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    if(mail($email_to, $email_subject, $email_message,$header)){
        echo 'Enviado Correctamente';
    }else{
        echo 'No se pudo enviar el correo';
    }

    
}
?>