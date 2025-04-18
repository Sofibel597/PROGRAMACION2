<?php
// if-else
$edad = 20;
if ($edad >= 18) {
    echo "Mayor de edad\n";
} else {
    echo "Menor de edad\n";
}

// for del 1 al 20
for ($i = 1; $i <= 20; $i++) {
    echo "$i ";
}
echo "\n";

// while que suma del 1 al 50
$suma = 0;
$i = 1;
while ($i <= 50) {
    $suma += $i;
    $i++;
}
echo "Suma total del 1 al 50: $suma\n";

// foreach con array de nombres
$nombres = ["Ana", "Luis", "Pedro", "Sofía"];
echo "<ul>";
foreach ($nombres as $nombre) {
    echo "<li>$nombre</li>";
}
echo "</ul>";

// switch con días de la semana
$dia = 3; // por ejemplo
switch ($dia) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "Día inválido\n";
}
?>
