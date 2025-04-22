<?php
class Vehiculo {
    private $kilometros;

    public function __construct($km) {
        $this->kilometros = $km;
    }

    public function getKilometros() {
        return $this->kilometros;
    }

    public function avanzar($km) {
        if ($km > 0) {
            $this->kilometros += $km;
        }
    }
}

// Prueba
$auto = new Vehiculo(100);
$auto->avanzar(50);
echo "Kilómetros: " . $auto->getKilometros(); // 150
?>