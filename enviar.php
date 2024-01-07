<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Configurar el correo
    $destinatario = "tu_correo@example.com";  // Reemplaza con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto desde el sitio web";

    // Construir el mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo electrónico: $correo\n\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $correo\r\n";
    $cabeceras .= "Reply-To: $correo\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
} else {
    // Redirigir si se accede directamente al archivo
    header("Location: index.html");
    exit();
}
?>
