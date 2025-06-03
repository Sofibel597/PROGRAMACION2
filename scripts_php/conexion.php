<?php
$host = 'localhost';
$db = 'tienda';
$user = 'usuario_php';
$pass = '1234';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

