<?php
if (!isset($_POST['nombre']) || !isset($_POST['apellido']) || !isset($_POST['direccion']) || !isset($_POST['telefono'] ) || !isset($_POST['ciudad_prove'])  || !isset($_POST['id_Producto'])) {
	exit();
}

require '../conex.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$ciudad_prove = $_POST['ciudad_prove'];
$id_Producto = $_POST['id_Producto'];

$sentencia = $conex->prepare("INSERT INTO proveedor(nombre, apellido, direccion, telefono, ciudad_prove, id_Producto) VALUES (?, ?, ?, ?, ?, ?);");

$result = $sentencia->execute([$nombre, $apellido, $direccion, $telefono, $ciudad_prove, $id_Producto]);

if ($result == true) {
	
	header('Location: proveedor.php');
} else{
	echo "Error al agregar";
}
?>