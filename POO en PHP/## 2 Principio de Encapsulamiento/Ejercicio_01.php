<?php
class CuentaBancaria {
    private $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }
}

// Prueba
$cuenta = new CuentaBancaria(1000);
$cuenta->depositar(500);
echo "Saldo actual: " . $cuenta->getSaldo(); // 1500
?>