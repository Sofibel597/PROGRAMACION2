<?php
require 'autoload.php';


use Modelos\Usuario; 


$usuario = new Usuario();
echo $usuario->decirHola();

