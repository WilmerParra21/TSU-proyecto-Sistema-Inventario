<?php

if (!isset($_POST['idCategoria']) || !isset($_POST['año'])){

	header('Location: listar.php');
}

require '../../Models/conex.php';

$id2 	     = $_POST['id2'];
$idCategoria = $_POST['idCategoria'];
$nombreProd  = $_POST['nombreProd'];
$año 	     = $_POST['año'];

$cox = new Conex();

$sentencia = $cox->Conection()->prepare('UPDATE categoria SET idCategoria = ?, nombreProd = ?, año = ? WHERE idCategoria = ?;');

$result = $sentencia->execute([$idCategoria, $nombreProd, $año, $id2]);

if($result === true) {
	
	header('Location: listar.php');

} else{

	echo "Error al Modificar";
}
?>