<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    
    $destinatario = "enrikus2004@gmail.com"; 
    $asunto = "Nuevo mensaje de contacto desde el sitio web";

    
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo electrónico: $correo\n\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    
    $cabeceras = "From: $correo\r\n";
    $cabeceras .= "Reply-To: $correo\r\n";

    
    if (mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
} else {
    
    header("Location: index.html");
    exit();
}
?>
