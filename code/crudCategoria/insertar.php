<?php
if (!isset($_POST['idCategoria']) || !isset($_POST['descripcion']) || !isset($_POST['año'])){
	
	exit();
}

require '../conex.php';

$categoria   = $_POST['idCategoria'];
$descripcion = $_POST['nombreProd'];
$año         = $_POST['año'];

$sentencia = $conex->prepare("INSERT INTO categoria(idCategoria, nombreProd, año) VALUES (?, ?, ?);");

$result = $sentencia->execute([$categoria, $descripcion, $año]);

if ($result == true) {
	
	header('Location: categoria.php');
} else{
	echo "Error al agregar";
}
?>