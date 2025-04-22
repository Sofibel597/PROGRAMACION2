<?php
class Libro {
    public $titulo;
    public $autor;
}

$libro = new Libro();
$libro->titulo = "Cien Años de Soledad";
$libro->autor = "Gabriel García Márquez";

echo "Título: " . $libro->titulo . "<br>";
echo "Autor: " . $libro->autor;
?>
