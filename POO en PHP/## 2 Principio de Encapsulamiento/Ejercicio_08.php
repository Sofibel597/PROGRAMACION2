<?php
class Empleado {
    private $sueldo;

    public function __construct($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function aumentarSueldo($porcentaje) {
        if ($porcentaje > 0) {
            $this->sueldo += $this->sueldo * ($porcentaje / 100);
        }
    }
}

// Prueba
$empleado = new Empleado(1000);
$empleado->aumentarSueldo(10);
echo "Nuevo sueldo: " . $empleado->getSueldo(); // 1100
?>