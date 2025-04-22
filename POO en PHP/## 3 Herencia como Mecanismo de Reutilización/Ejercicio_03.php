<?php
class Persona {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        echo "Hola, soy {$this->nombre}<br>";
    }
}

class Profesor extends Persona {
    private $materia;

    public function __construct($nombre, $edad, $materia) {
        parent::__construct($nombre, $edad);
        $this->materia = $materia;
    }

    public function saludar() {
        echo "Hola, soy {$this->nombre}, y enseño {$this->materia}<br>";
    }
}

// Prueba
$profesor = new Profesor("Laura", 40, "Matemática");
$profesor->saludar();
?>