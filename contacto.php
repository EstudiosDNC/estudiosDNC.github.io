<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Obtener los datos del formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Configurar el correo electrónico
  $to = "contacto.estudios.dnc@gmail.com"; // Cambia esto con tu dirección de correo
  $subject = "Nuevo mensaje de contacto";
  $message = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
  $headers = "From: $email";

  // Enviar el correo electrónico
  if (mail($to, $subject, $message, $headers)) {
    // El correo se ha enviado correctamente
    echo "Gracias por contactarnos. Pronto te responderemos.";
  } else {
    // Ocurrió un error al enviar el correo
    echo "Ha ocurrido un error. Por favor, intenta nuevamente.";
  }
} else {
  // Si no se ha enviado el formulario, redireccionar al formulario de contacto
  header("Location: contacto.html");
  exit;
}
?>
