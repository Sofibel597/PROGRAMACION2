<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $matricula;

    public function mostrarDatos() {
        echo "Nombre: $this->nombre<br>";
        echo "Edad: $this->edad<br>";
        echo "Matrícula: $this->matricula";
    }
}

$estudiante = new Estudiante();
$estudiante->nombre = "Ana";
$estudiante->edad = 20;
$estudiante->matricula = "A202501";

$estudiante->mostrarDatos();
?>
