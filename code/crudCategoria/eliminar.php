<?php 
if (!isset($_GET['id'])){
  exit();
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('DELETE FROM categoria WHERE idCategoria = ?;');

$result = $sentencia->execute([$id]);

if ($result == true) {
	header('Location: categoria.php');
} else{
	echo "Error en Eliminar";
}
?>