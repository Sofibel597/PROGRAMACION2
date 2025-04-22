<?php
abstract class Animal {
    abstract public function alimentarse();
}

class Leon extends Animal {
    public function alimentarse() {
        echo "El león caza animales para alimentarse<br>";
    }
}

class Pajaro extends Animal {
    public function alimentarse() {
        echo "El pájaro come semillas<br>";
    }
}

// Prueba
$animales = [new Leon(), new Pajaro()];
foreach ($animales as $animal) {
    $animal->alimentarse();
}
?>