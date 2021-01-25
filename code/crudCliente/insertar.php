<?php
if (!isset($_POST['nombre']) || !isset($_POST['apellido']) || !isset($_POST['direccion']) || !isset($_POST['telefono'])){
	exit();
}

require '../conex.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$sentencia = $conex->prepare("INSERT INTO cliente(nombre, apellido, direccion, telefono) VALUES (?, ?, ?, ?);");

$result = $sentencia->execute([$nombre, $apellido, $direccion, $telefono]);

if ($result == true) {
	
	header('Location: clientes.php');
} else{
	echo "Error al agregar";
}
?>