<?php

// Se llama al modelo Usuario
require_once "../Models/Usuario.php";

$instancia = new Usuario();

$usuario = $instancia->listarUsuarios();

// se redirecciona a la vista

require_once "../Views/crudUsuarios/listar.php";

?>