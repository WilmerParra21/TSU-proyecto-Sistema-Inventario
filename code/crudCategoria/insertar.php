<?php
if (!isset($_POST['idCategoria']) || !isset($_POST['descripcion']) || !isset($_POST['marca']) || !isset($_POST['año'])){
	
	exit();
}

require '../conex.php';

$categoria   = $_POST['idCategoria'];
$descripcion = $_POST['descripcion'];
$marca       = $_POST['marca'];
$año         = $_POST['año'];

$sentencia = $conex->prepare("INSERT INTO categoria(idCategoria, descripcion, marca, año) VALUES (?, ?, ?, ?);");

$result = $sentencia->execute([$categoria, $descripcion, $marca, $año]);

if ($result == true) {
	
	header('Location: categoria.php');
} else{
	echo "Error al agregar";
}
?>