<?php
class Animal {
    protected $especie;

    public function __construct($especie) {
        $this->especie = $especie;
    }

    public function emitirSonido() {
        echo "Sonido genérico<br>";
    }
}

class Gato extends Animal {
    public function emitirSonido() {
        echo "¡Miau!<br>";
    }
}

// Prueba
$gato = new Gato("Felino");
$gato->emitirSonido();
?>