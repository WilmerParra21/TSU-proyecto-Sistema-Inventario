<?php

if (!isset($_POST['nombreProd2']) || !isset($_POST['precioProd2']) || !isset($_POST['cantProd2']) || !isset($_POST['stockMin2']) || !isset($_POST['stockMax2'])){

	header('Location: ../../../index.php');
}

require '../../Models/conex.php';

$id2 	   = $_POST['id2'];
$categoria2   = $_POST['idCategoria2'];
$precio2   = $_POST['precioProd2'];
$iva2 	   = $_POST['iva2'];
$cantidad2 = $_POST['cantProd2'];
$categoria2= $_POST['idCategoria2'];
$stockMin2 = $_POST['stockMin2'];
$stockMax2 = $_POST['stockMax2'];
$marca2    = $_POST['marca2'];

$cox = new Conex();
$sentencia = $cox->Conection()->prepare('UPDATE producto SET idCategoria = ?, precioProd = ?, iva = ?, stockMax = ?, stockMin = ?, cantProd = ?, idCategoria = ?, marca = ? WHERE id_Producto = ?;');

$result = $sentencia->execute([$categoria2, $precio2, $iva2, $stockMax2, $stockMin2, $cantidad2, $marca2, $id2]);

if($result === true) {
	
	header('Location: listar.php');

} else{

	echo "Error al Modificar";
}
?>