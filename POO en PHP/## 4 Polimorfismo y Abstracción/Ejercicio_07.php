<?php
interface Comunicable {
    public function enviarMensaje();
}

class Correo implements Comunicable {
    public function enviarMensaje() {
        echo "Enviando correo<br>";
    }
}

class Texto implements Comunicable {
    public function enviarMensaje() {
        echo "Enviando mensaje de texto<br>";
    }
}

// Prueba
$mensajes = [new Correo(), new Texto()];
foreach ($mensajes as $mensaje) {
    $mensaje->enviarMensaje();
}
?>