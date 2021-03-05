<?php

if (!isset($_POST['idCategoria']) || !isset($_POST['año'])){

	header('Location: categoria.php');
}

require '../conex.php';

$id2 	     = $_POST['id2'];
$idCategoria = $_POST['idCategoria'];
$nombreProd  = $_POST['nombreProd'];
$año 	     = $_POST['año'];

$sentencia = $conex->prepare('UPDATE categoria SET idCategoria = ?, nombreProd = ?, año = ? WHERE idCategoria = ?;');

$result = $sentencia->execute([$idCategoria, $nombreProd, $año, $id2]);

if($result === true) {
	
	header('Location: categoria.php');

} else{

	echo "Error al Modificar";
}
?>