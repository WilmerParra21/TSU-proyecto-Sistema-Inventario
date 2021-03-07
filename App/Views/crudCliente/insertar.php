<?php
if (!isset($_POST['nombre']) || !isset($_POST['apellido']) || !isset($_POST['direccion']) || !isset($_POST['telefono'])){
	exit();
}

require '../../Models/conex.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$cox = new Conex();

$sentencia = $cox->Conection()->prepare("INSERT INTO cliente(nombre, apellido, direccion, telefono) VALUES (?, ?, ?, ?);");

$result = $sentencia->execute([$nombre, $apellido, $direccion, $telefono]);

if ($result == true) {
	
	header('Location: listar.php');
} else{
	echo "Error al agregar";
}
?>