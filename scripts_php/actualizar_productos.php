<?php
require 'conexion.php';
$nuevoPrecio = 4.99;
$idProducto = 1;

$sql = "UPDATE productos SET precio = :precio WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute(['precio' => $nuevoPrecio, 'id' => $idProducto]);
    echo "Producto actualizado correctamente.\n";
} catch (PDOException $e) {
    echo "Error al actualizar: " - $e->getMessage();
}
?>
