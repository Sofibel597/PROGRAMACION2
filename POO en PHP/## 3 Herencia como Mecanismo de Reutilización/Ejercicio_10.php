<?php
class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function moverse() {
        echo "{$this->nombre} se mueve<br>";
    }
}

class Pez extends Animal {
    private $tipoAgua;

    public function __construct($nombre, $tipoAgua) {
        parent::__construct($nombre);
        $this->tipoAgua = $tipoAgua;
    }

    public function moverse() {
        echo "{$this->nombre} nada en agua {$this->tipoAgua}<br>";
    }
}

// Prueba
$pez = new Pez("Nemo", "salada");
$pez->moverse();
?>