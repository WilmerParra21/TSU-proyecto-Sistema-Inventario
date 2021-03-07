<?php

if(!isset($_POST['id_Producto'])){

	exit();
}

require '../conex.php';

$id = $_POST['id_Producto'];
$cantVent = $_POST['cantVent'];

$sentencia = $conex->prepare('SELECT * FROM producto WHERE id_Producto = ?;');

$result = $sentencia->execute([$id]);

$producto = $sentencia->fetch(PDO::FETCH_OBJ);

session_start();

// si existe la sesion la uso
if(isset($_SESSION["venta"])){
	$venta = $_SESSION["venta"];
} else{
	// en caso de que no exista, se crea
	$venta = array();
}

// se agrega el producto a la venta
array_push($venta, $producto);
// se sube a la sesion
$_SESSION["venta"] = $venta;

header("location: agregar.php");

?>