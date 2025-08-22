<?php
header('Content-Type: application/json');
require 'conexion.php';
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['error' => 'No se recibieron datos']);
    exit;
}

$nombre = $input['nombre'] ?? null;
$precio = $input['precio'] ?? null;
$stock = $input['stock'] ?? null;

if (!$nombre || !$precio || !$stock) {
    echo json_encode(['error' => 'Faltan datos']);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)");
$stmt->execute([$nombre, $precio, $stock]);

echo json_encode(['success' => true; 'id' => $pdo->lastInsertId()]);
?>
