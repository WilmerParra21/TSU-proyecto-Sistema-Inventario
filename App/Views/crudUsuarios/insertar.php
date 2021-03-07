<?php
if (!isset($_POST['nombre_ape']) || !isset($_POST['nombre_usuario']) || !isset($_POST['clave']) || !isset($_POST['correo']) || !isset($_POST['acceso'])){
	exit();
}

require '../conex.php';

$nombre = $_POST['nombre_ape'];
$usuario = $_POST['nombre_usuario'];
$clave = $_POST['clave'];
$correo = $_POST['correo'];
$acceso = $_POST['acceso'];

$sentencia = $conex->prepare("INSERT INTO login(nombre_ape, nombre_usuario, clave, correo, acceso) VALUES (?, ?, ?, ?, ?);");

$result = $sentencia->execute([$nombre, $usuario, $clave, $correo, $acceso]);

if ($result == true) {
	
	header('Location: ../../index.php');
} else{
	echo "Error al agregar usuario";
}
?>