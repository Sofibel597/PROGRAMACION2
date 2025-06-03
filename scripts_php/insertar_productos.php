<?php
require 'conexion.php';

$productos = [
    ['nombre' => 'Pan', 'precio' => 1.50],
    ['nombre' => 'Leche', 'precio' => 2.00],
    ['nombre' => 'Queso', 'precio' => 3.72],
];

foreach ($productos as $p) {
    $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, stock) values (:nombre, :precio, :stock)");
    $stmt->execute(['nombre'=> $p['nombre'], 'precio' => $p['precio'], 'stock' => 10]);
}

echo "Productos insertados.";
?>

