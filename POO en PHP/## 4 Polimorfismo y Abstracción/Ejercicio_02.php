<?php
abstract class Vehiculo {
    abstract public function desplazarse();
}

class Bicicleta extends Vehiculo {
    public function desplazarse() {
        echo "La bicicleta avanza pedaleando<br>";
    }
}

class Avion extends Vehiculo {
    public function desplazarse() {
        echo "El avión vuela en el aire<br>";
    }
}

// Prueba
$vehiculos = [new Bicicleta(), new Avion()];
foreach ($vehiculos as $vehiculo) {
    $vehiculo->desplazarse();
}
?>