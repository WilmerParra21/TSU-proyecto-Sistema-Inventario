<?php 
if (!isset($_GET['id'])){
  exit();
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('DELETE FROM producto WHERE id_Producto = ?;');

$result = $sentencia->execute([$id]);

if ($result == true) {
	header('Location: productos.php');
} else{
	echo "Error en Eliminar";
}
?>