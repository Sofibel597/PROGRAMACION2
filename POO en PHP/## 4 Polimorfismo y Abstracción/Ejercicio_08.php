<?php
abstract class Instrumento {
    abstract public function tocar();
}

class Violin extends Instrumento {
    public function tocar() {
        echo "El violín produce música suave<br>";
    }
}

class Bateria extends Instrumento {
    public function tocar() {
        echo "La batería suena fuerte y rítmica<br>";
    }
}

// Prueba
$instrumentos = [new Violin(), new Bateria()];
foreach ($instrumentos as $instrumento) {
    $instrumento->tocar();
}
?>