<?php
spl_autoload_register(function ($clase) {
    $prefijo = 'Modelos\\';
    $baseDir = __DIR__ . '/src/Modelos/';

    if (strncmp($prefijo, $clase, strlen($prefijo)) !== 0) {
        return;
    }

    $claseRelativa = substr($clase, strlen($prefijo));
    $archivo = $baseDir . str_replace('\\', '/', $claseRelativa) . '.php';

    if (file_exists($archivo)) {
        require $arcihvo;
    }

}));

