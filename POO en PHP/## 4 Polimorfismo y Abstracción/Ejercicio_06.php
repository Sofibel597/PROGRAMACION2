<?php
abstract class Trabajador {
    abstract public function calcularIngreso();
}

class Fijo extends Trabajador {
    private $salario;

    public function __construct($salario) {
        $this->salario = $salario;
    }

    public function calcularIngreso() {
        return $this->salario;
    }
}

class Temporal extends Trabajador {
    private $horas;
    private $tarifa;

    public function __construct($horas, $tarifa) {
        $this->horas = $horas;
        $this->tarifa = $tarifa;
    }

    public function calcularIngreso() {
        return $this->horas * $this->tarifa;
    }
}

// Prueba
$trabajadores = [new Fijo(3000), new Temporal(40, 15)];
foreach ($trabajadores as $trabajador) {
    echo "Ingreso: $" . $trabajador->calcularIngreso() . "<br>";
}
?>