<?php
require 'Database.php';
$db = new Database();

$db->createUser('prueba@email.com', 'inactivo');

$usuario = $db->getUserById(1);
print_r($usuario);

$db->updateUserEstado(1, 'activo');

$usuario = $db->getUserById(1);
print_r($usuario);
?>
