<?php 
if (!isset($_GET['id'])){
  exit();
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('DELETE FROM proveedor WHERE id_proveedor = ?;');

$result = $sentencia->execute([$id]);

if ($result == true) {
	header('Location: proveedor.php');
} else{
	echo "Error en Eliminar";
}
?>