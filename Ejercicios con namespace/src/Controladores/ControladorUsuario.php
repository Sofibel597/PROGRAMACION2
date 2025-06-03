<?php
namespace Controladores;

use Modelos\Usuario;

class ControladorUsuario {
    public function mostrarUsuario() {
        $usuario = new Usuario();
        return "El nombre del usuario es: " . $usuario->obtenerNombre();
    }
}
 
