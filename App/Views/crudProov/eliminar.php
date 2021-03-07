<?php 
if (!isset($_GET['id'])){
  exit();
}
require "../../Models/conex.php";

$id = $_GET['id'];

$cox = new Conex();
$sentencia = $cox->Conection()->prepare('DELETE FROM proveedor WHERE id_proveedor = ?;');

$result = $sentencia->execute([$id]);

if ($result == true) {
	header('Location: listar.php');
} else{
	echo "Error en Eliminar";
}
?>