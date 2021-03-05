<?php
if (!isset($_POST['idCategoria']) || !isset($_POST['precioProd']) || !isset($_POST['cantProd']) || !isset($_POST['stockMin']) || !isset($_POST['stockMax'])){
	exit();
}

require '../conex.php';

$categoria = $_POST['idCategoria'];
$precio = $_POST['precioProd'];
$iva = $_POST['iva'];
$cantidad = $_POST['cantProd'];
$stockMax = $_POST['stockMax'];
$stockMin = $_POST['stockMin'];
$marca = $_POST['marca'];

$sentencia = $conex->prepare("INSERT INTO producto(idCategoria, precioProd, iva, stockMax, stockMin, cantProd, marca) VALUES (?, ?, ?, ?, ?, ?, ?);");

$result = $sentencia->execute([$categoria, $precio, $iva, $stockMax, $stockMin, $cantidad, $marca]);

if ($result == true) {
	
	header('Location: productos.php');
} else{
	echo "Error al agregar";
}
?>