<?php
// Recupera los datos del formulario
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];

// Configura los datos del correo electrónico
$to = 'iriartetomi5@gmail.com'; 
$subject = 'Mensaje de contacto';
$body = "Nombre: $name\nCorreo electrónico: $email\nTeléfono: $phone\n\nMensaje:\n$message";

// Envía el correo electrónico
if (mail($to, $subject, $body)) {
    echo "Correo electrónico enviado con éxito.";
} else {
    echo "Error al enviar el correo electrónico.";
}
?>

