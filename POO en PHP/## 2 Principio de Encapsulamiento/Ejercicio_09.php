<?php
class Circulo {
    private $radio;

    public function __construct($radio) {
        $this->setRadio($radio);
    }

    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($nuevoRadio) {
        if ($nuevoRadio > 0) {
            $this->radio = $nuevoRadio;
        }
    }
}

// Prueba
$circulo = new Circulo(5);
$circulo->setRadio(-3); // inválido
echo "Radio: " . $circulo->getRadio(); // 5
?>