<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;

    public function valorInventario() {
        return $this->precio * $this->stock;
    }
}

$producto = new Producto();
$producto->nombre = "Teclado";
$producto->precio = 30;
$producto->stock = 10;

echo "Valor total en inventario: $" . $producto->valorInventario();
?>
