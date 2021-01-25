<?php 
if (!isset($_GET['id'])){
  exit();
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('DELETE FROM cliente WHERE id_Cliente = ?;');

$result = $sentencia->execute([$id]);

if ($result == true) {
	header('Location: clientes.php');
} else{
	echo "Error en Eliminar";
}
?>