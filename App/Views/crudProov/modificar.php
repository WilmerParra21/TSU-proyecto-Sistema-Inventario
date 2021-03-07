<?php

if(!isset($_POST['nombre2']) || !isset($_POST['apellido2']) || !isset($_POST['direccion2']) || !isset($_POST['telefono2']) || !isset($_POST['ciudad_prove2'])  || !isset($_POST['id_Producto2'])){

	header('Location: listar.php');
}

require '../../Models/conex.php';

$nombre2 = $_POST['nombre2'];
$apellido2 = $_POST['apellido2'];
$direccion2 = $_POST['direccion2'];
$telefono2 = $_POST['telefono2'];
$ciudad_prove2 = $_POST['ciudad_prove2'];
$id_Producto2 = $_POST['id_Producto2'];
$id_proveedor2 = $_POST['id_proveedor2'];

$cox = new Conex();

$sentencia = $cox->Conection()->prepare('UPDATE proveedor SET  nombre = ?, apellido = ?, direccion = ?, telefono = ?, ciudad_prove = ?, id_Producto = ? WHERE id_proveedor = ?;');

$result = $sentencia->execute([$nombre2, $apellido2, $direccion2, $telefono2, $ciudad_prove2, $id_Producto2, $id_proveedor2]);

if($result == true) {

	header('Location: listar.php');
} else{

	echo "Error al Modificar";
}
?>