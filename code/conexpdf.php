<?php

try {
	
$mysqli = new mysqli("localhost", 'root', '', 'sistema');

} catch (Exception $e) {
	echo "Error al Conectar";
}
?>