<?php
class Persona {
    public $nombre;
    public $edad;

    public function esAdulto() {
        return $this->edad >= 18;
    }
}

$persona = new Persona();
$persona->nombre = "Juan";
$persona->edad = 21;

echo $persona->nombre . " es adulto: " . ($persona->esAdulto() ? "Sí" : "No");
?>
