<?php 
if (!isset($_GET['id'])){
  exit();
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('DELETE FROM login WHERE id = ?;');

$result = $sentencia->execute([$id]);

if ($result == true) {
	header('Location: listar.php');
} else{
	echo "Error en Eliminar";
}
?>