<?php
header('Content-Type: application/json');
require 'conexion.php';

$input = json_decode(file_get_contents('php://input'), true);

$id = $input['id'] ?? null;
$nombre = $input['nombre'] ?? null;
$precio = $input['precio'] ?? null;
$stock = $input['stock'] ?? null;

if (!$id || !$nombre || !$precio || !$stock) {
    echo json_encode(['error' => 'Faltan datos']);
    exit;
}

$stmt = $pdo->prepare("UPDATE productos SET nombre = ?, precio = ?, stock = ?, WHERE id = ?");
$stmt->execute([$nombre, $precio, $stock, $id]);
echo json_encode(['success' => true]);
?>
