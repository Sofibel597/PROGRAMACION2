<?php
require 'conexion.php';

$cuentaOrigen = 1;
$cuentaDestino = 999;
$monto = 30.00;

try {
    $pdo->beginTransaction();
    
    $stmt1 = $pdo->prepare("UPDATE cuentas SET saldo = saldo - :monto WHERE id = :id");
    $stmt1->execute(['monto' => $monto, 'id' => $cuentaDestino]);

    $stmt2 = $pdo->prepare("UPDATE cuentas SET saldo = saldo + :monto WHERE id = :id");
    $stmt2->execute(['monto' => $monto, 'id' => $cuentaDestino]);

    $pdo->commit();
    echo "Transferencia realizada.";
} catch (PDOEception $e){
    $pdo->rollBack();
    echo "Error en la transferencia. Se hico rollBack: " . $e->getMessage();
}
?>

