<?php
class Vehiculo {
    protected $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function avanzar() {
        echo "El vehículo avanza<br>";
    }
}

class Moto extends Vehiculo {
    private $cilindrada;

    public function __construct($marca, $cilindrada) {
        parent::__construct($marca);
        $this->cilindrada = $cilindrada;
    }

    public function avanzar() {
        echo "La moto de {$this->cilindrada}cc avanza rápidamente<br>";
    }
}

// Prueba
$moto = new Moto("Yamaha", 250);
$moto->avanzar();
?>