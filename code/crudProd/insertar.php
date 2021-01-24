<?php
if (!isset($_POST['nombreProd']) || !isset($_POST['precioProd']) || !isset($_POST['cantProd']) || !isset($_POST['stockMin']) || !isset($_POST['stockMax'])){
	exit();
}

require '../conex.php';

$nombre = $_POST['nombreProd'];
$precio = $_POST['precioProd'];
$iva = $_POST['iva'];
$cantidad = $_POST['cantProd'];
$categoria = $_POST['idCategoria'];
$marca = $_POST['marca'];
$stockMin = $_POST['stockMin'];
$stockMax = $_POST['stockMax'];

$sentencia = $conex->prepare("INSERT INTO producto(nombreProd, precioProd, iva, stockMax, stockMin, cantProd, idCategoria, marca) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");

$result = $sentencia->execute([$nombre, $precio, $iva, $stockMax, $stockMin, $cantidad, $categoria, $marca]);

if ($result == true) {
	
	header('Location: productos.php');
} else{
	echo "Error al agregar";
}
?>