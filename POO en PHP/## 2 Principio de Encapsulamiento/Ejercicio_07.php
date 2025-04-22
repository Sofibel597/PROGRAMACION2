<?php
class Libro {
    private $numeroPaginas;

    public function __construct($paginas) {
        $this->setPaginas($paginas);
    }

    public function getPaginas() {
        return $this->numeroPaginas;
    }

    public function setPaginas($paginas) {
        if ($paginas > 0) {
            $this->numeroPaginas = $paginas;
        }
    }
}

// Prueba
$libro = new Libro(120);
$libro->setPaginas(200);
echo "Páginas: " . $libro->getPaginas(); // 200
?>