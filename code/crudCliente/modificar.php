<?php

if(!isset($_POST['nombre2']) || !isset($_POST['apellido2']) || !isset($_POST['direccion2']) || !isset($_POST['telefono2'])){

	header('Location: clientes.php');
}

require '../conex.php';

$id2 = $_POST['id2'];
$nombre2 = $_POST['nombre2'];
$apellido2 = $_POST['apellido2'];
$direccion2 = $_POST['direccion2'];
$telefono2 = $_POST['telefono2'];

$sentencia = $conex->prepare('UPDATE cliente SET nombre = ?, apellido = ?, direccion = ?, telefono = ? WHERE id_Cliente = ?;');

$result = $sentencia->execute([$nombre2, $apellido2, $direccion2, $telefono2, $id2]);

if($result == true) {

	header('Location: clientes.php');
} else{

	echo "Error al Modificar";
}
?>