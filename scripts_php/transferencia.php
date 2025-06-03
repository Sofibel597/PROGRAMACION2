<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=tienda", "sofiarosas", "1234");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->beginTransaction();

    $cuentaOrigen = 1;
    $cuentaDestino = 2;
    $monto = 200.00;

    $stmt = $pdo->prepare("UPDATE cuentas SET saldo = saldo + :monto WHERE id = :id")
;
    $stmt->execute(['monto' => $monto, 'id' => $cuentaDestino]);

    $pdo->commit();
    echo "Transferencia realizada con exito.";
} catch (Exception $e){
    $pdo->rollBack();
    echo "Error en la transferencia:". $e->getMessage();
}
?>
