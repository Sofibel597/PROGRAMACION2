<?php
require 'conexion.php';

$sql = "SELECT * FROM productos ORDER BY id DESC";
$stmt = $pdo->query($sql);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos as $p) {
    echo "{$p['id']} - {$p['nombre']} - {$p['precio']}\n";
}
?>

