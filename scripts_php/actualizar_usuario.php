<?php
require 'conexion.php';

$idUsuario = 1;
$nuevoEstado = 'activo';

try {
    $sql = "UPDATE usuarios SET estado = :estado WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['estado' => $nuevoEstado, ''id => $idUsuario]);
} catch (PDOException $e) {
    echo "Error al actualizar: ". $e->getMessage();
}
?>
