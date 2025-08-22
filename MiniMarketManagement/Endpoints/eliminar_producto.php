<?php
header('Content-Type: application/json');
require 'conexion.php';

$input = json_decode(file_get_contents('php://input'), true);

$id = $input['id'] ?? null;

if (!$id) {
    echo json_encode(['error' => 'ID no especificado']);
    exit;
}

$stmt = $pdo->prepare("DELETE FROM producto WHERE id = ?");
$stmt->execute([$id]);

echo json_encode(['success' => true]);
?>
