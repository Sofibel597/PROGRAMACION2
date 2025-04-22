<?php
interface Reproducible {
    public function reproducir();
}

class Pelicula implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo película<br>";
    }
}

class Podcast implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo podcast<br>";
    }
}

// Prueba
$reproducibles = [new Pelicula(), new Podcast()];
foreach ($reproducibles as $reproducible) {
    $reproducible->reproducir();
}
?>