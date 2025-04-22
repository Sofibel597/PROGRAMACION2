<?php
class Usuario {
    private $edad;

    public function __construct($edad) {
        $this->setEdad($edad);
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($nuevaEdad) {
        if ($nuevaEdad > 0) {
            $this->edad = $nuevaEdad;
        }
    }
}

// Prueba
$usuario = new Usuario(25);
$usuario->setEdad(30);
echo "Edad: " . $usuario->getEdad(); // 30
?>