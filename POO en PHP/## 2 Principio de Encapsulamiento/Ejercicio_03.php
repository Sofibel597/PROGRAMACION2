<?php
class Producto {
    private $precio;

    public function __construct($precio) {
        $this->setPrecio($precio);
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($nuevoPrecio) {
        if ($nuevoPrecio > 0) {
            $this->precio = $nuevoPrecio;
        }
    }
}

// Prueba
$producto = new Producto(10);
$producto->setPrecio(-5); // inválido
echo "Precio: " . $producto->getPrecio(); // 10
?>