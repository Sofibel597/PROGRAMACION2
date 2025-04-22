<?php
class Trabajador {
    public $nombre;
    public $cargo;
    public $salario;

    public function informacion() {
        echo "Nombre: $this->nombre<br>";
        echo "Cargo: $this->cargo<br>";
        echo "Salario: $this->salario";
    }
}

$trabajador = new Trabajador();
$trabajador->nombre = "Luis";
$trabajador->cargo = "Analista";
$trabajador->salario = 3500;

$trabajador->informacion();
?>
