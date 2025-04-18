<?php
// Operaciones aritméticas
$a = 10;
$b = 5;

echo "Suma: " . ($a + $b) . "\n";
echo "Resta: " . ($a - $b) . "\n";
echo "Multiplicación: " . ($a * $b) . "\n";
echo "División: " . ($a / $b) . "\n";

// Comparación
if ($a > $b) {
    echo "$a es mayor que $b\n";
} elseif ($a < $b) {
    echo "$b es mayor que $a\n";
} else {
    echo "Ambos son iguales\n";
}

// Concatenación de cadenas
$nombre = "Juan";
$apellido = "Pérez";
$nombreCompleto = $nombre . " " . $apellido;
echo "Nombre completo: $nombreCompleto\n";
?>
