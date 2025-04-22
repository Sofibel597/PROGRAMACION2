<?php
class Producto {
    protected $nombre;
    protected $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function detalle() {
        return "{$this->nombre} cuesta {$this->precio}";
    }
}

class ProductoOferta extends Producto {
    private $descuento;

    public function __construct($nombre, $precio, $descuento) {
        parent::__construct($nombre, $precio);
        $this->descuento = $descuento;
    }

    public function detalle() {
        $precioFinal = $this->precio - ($this->precio * $this->descuento / 100);
        return "{$this->nombre} en oferta cuesta {$precioFinal}";
    }
}

// Prueba
$oferta = new ProductoOferta("Zapatillas", 100, 20);
echo $oferta->detalle() . "<br>";
?>