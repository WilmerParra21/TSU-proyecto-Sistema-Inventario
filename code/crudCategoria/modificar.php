<?php

if (!isset($_POST['idCategoria']) || !isset($_POST['descripcion']) || !isset($_POST['marca']) || !isset($_POST['año'])){

	header('Location: categoria.php');
}

require '../conex.php';

$id2 	   = $_POST['id2'];
$idCategoria   = $_POST['idCategoria'];
$descripcion   = $_POST['descripcion'];
$marca	   = $_POST['marca'];
$año = $_POST['año'];

$sentencia = $conex->prepare('UPDATE categoria SET idCategoria = ?, descripcion = ?, marca = ?, año = ? WHERE idCategoria = ?;');

$result = $sentencia->execute([$idCategoria, $descripcion, $marca, $año, $id2]);

if($result === true) {
	
	header('Location: categoria.php');

} else{

	echo "Error al Modificar";
}
?>