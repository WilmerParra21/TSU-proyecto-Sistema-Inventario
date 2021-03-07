<?php
if (!isset($_POST['idCategoria']) || !isset($_POST['precioProd']) || !isset($_POST['cantProd']) || !isset($_POST['stockMin']) || !isset($_POST['stockMax'])){
	exit();
}

require '../../Models/conex.php';

$categoria = $_POST['idCategoria'];
$precio = $_POST['precioProd'];
$iva = $_POST['iva'];
$cantidad = $_POST['cantProd'];
$stockMax = $_POST['stockMax'];
$stockMin = $_POST['stockMin'];
$marca = $_POST['marca'];

$cox = new Conex();

$sentencia = $cox->Conection()->prepare("INSERT INTO producto(idCategoria, precioProd, iva, stockMax, stockMin, cantProd, marca) VALUES (?, ?, ?, ?, ?, ?, ?);");

$result = $sentencia->execute([$categoria, $precio, $iva, $stockMax, $stockMin, $cantidad, $marca]);

if ($result == true) {
	
	header('Location: listar.php');
} else{
	echo "Error al agregar";
}
?>