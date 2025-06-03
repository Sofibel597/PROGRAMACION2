<?php
require 'conexion.php';
$nombreBuscado = 'Leche';

$sql = "SELECT * FROM productos WHERE nombre = :nombre";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => $nombreBuscado]);

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($resultado) {
    foreach ($resultado as $p) {
        echo "{$p['id']} - {$p['nombre']} - {$p['precio']}\n";
      }
} else {
    echo "No se encontró el producto.";
}
?>

