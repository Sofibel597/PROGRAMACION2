<?php
class CuentaCorriente {
    private $saldo;
    private $limite;

    public function __construct($saldo, $limite) {
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function retirar($monto) {
        if ($monto <= ($this->saldo + $this->limite)) {
            $this->saldo -= $monto;
        }
    }
}

// Prueba
$cuenta = new CuentaCorriente(500, 200);
$cuenta->retirar(600);
echo "Saldo tras retiro: " . $cuenta->getSaldo(); // -100
?>