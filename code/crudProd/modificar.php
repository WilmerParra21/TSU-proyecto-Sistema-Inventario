<?php

if (!isset($_POST['nombreProd2']) || !isset($_POST['precioProd2']) || !isset($_POST['cantProd2']) || !isset($_POST['stockMin2']) || !isset($_POST['stockMax2'])){

	header('Location: ../../index.php');
}

require '../conex.php';

$id2 = $_POST['id2'];
$nombre2 = $_POST['nombreProd2'];
$precio2 = $_POST['precioProd2'];
$iva2 = $_POST['iva2'];
$cantidad2 = $_POST['cantProd2'];
$categoria2 = $_POST['idCategoria2'];
$marca2 = $_POST['marca2'];
$stockMin2 = $_POST['stockMin2'];
$stockMax2 = $_POST['stockMax2'];

$sentencia = $conex->prepare('UPDATE producto SET nombreProd = ?, precioProd = ?, iva = ?, stockMax = ?, stockMin = ?, cantProd = ?, idCategoria = ?, marca = ? WHERE id_Producto = ?;');

$result = $sentencia->execute([$nombre2, $precio2, $iva2, $stockMax2, $stockMin2, $cantidad2, $categoria2, $marca2, $id2]);

if($result === true) {
	
	header('Location: productos.php');

} else{

	echo "Error al Modificar";
}
?>