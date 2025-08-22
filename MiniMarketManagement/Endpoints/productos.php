<?php
header('Content-Type: application/json');
require 'conexion.php';

$stmt = $pdo->query("SELECT * FROM productos");
$productos = $stmt->fetchAll();

echo json_encode($productos);
?>
