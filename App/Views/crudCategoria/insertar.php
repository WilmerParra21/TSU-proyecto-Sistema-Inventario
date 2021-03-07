<?php
if (!isset($_POST['idCategoria']) || !isset($_POST['nombreProd']) || !isset($_POST['año'])){
	
	exit();
}

require '../../Models/conex.php';

$categoria   = $_POST['idCategoria'];
$nombreProd  = $_POST['nombreProd'];
$año         = $_POST['año'];


$cox = new Conex();

$sentencia = $cox->Conection()->prepare("INSERT INTO categoria(idCategoria, nombreProd, año) VALUES (?, ?, ?);");

$result = $sentencia->execute([$categoria, $nombreProd, $año]);

if ($result == true) {
	
	header('Location: listar.php');
} else{
	echo "Error al agregar";
}
?>