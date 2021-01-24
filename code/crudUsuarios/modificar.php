<?php

if (!isset($_POST['nombre_ape']) || !isset($_POST['nombre_usuario']) || !isset($_POST['correo']) || !isset($_POST['clave']) || !isset($_POST['acceso'])){

	header('Location: ../../index.php');
}

require '../conex.php';

$id2 = $_POST['id2'];
$nombre2 = $_POST['nombre_ape'];
$usuario2 = $_POST['nombre_usuario'];
$correo2 = $_POST['correo'];
$clave2 = $_POST['clave'];
$acceso2 = $_POST['acceso'];

$sentencia = $conex->prepare('UPDATE login SET nombre_ape = ?, nombre_usuario= ?, clave = ?, correo = ?, acceso = ? WHERE id = ?;');

$result = $sentencia->execute([$nombre2, $usuario2, $clave2, $correo2, $acceso2, $id2]);

if($result === true) {
	
	header('Location: listar.php');

} else{

	echo "Error al Modificar";
}
?>