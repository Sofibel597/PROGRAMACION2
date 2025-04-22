<?php
class Empleado {
    protected $nombre;
    protected $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function calcularPago() {
        return $this->salario;
    }
}

class Freelancer extends Empleado {
    private $horas;

    public function __construct($nombre, $salarioPorHora, $horas) {
        parent::__construct($nombre, $salarioPorHora);
        $this->horas = $horas;
    }

    public function calcularPago() {
        return $this->salario * $this->horas;
    }
}

// Prueba
$freelancer = new Freelancer("Ana", 20, 40);
echo "Pago del freelancer: $" . $freelancer->calcularPago() . "<br>";
?>