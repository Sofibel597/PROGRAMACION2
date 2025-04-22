<?php
abstract class Instrumento {
    abstract public function sonar();
}

class Piano extends Instrumento {
    public function sonar() {
        echo "El piano suena suavemente<br>";
    }
}

// Prueba
$piano = new Piano();
$piano->sonar();
?>