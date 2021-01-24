<?php
if (!isset($_GET['id'])){
  header('Location: listar.php');
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('SELECT * FROM login WHERE id = ?;');

$result = $sentencia->execute([$id]);

$usuario = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/login.css">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<header id="header" class="">
		<div class="encabezado">
		
<nav class="navbar navbar-expand-lg navbar-light mt-3" style="background-color: rgba( 255, 255, 255, .5);
">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Clientes</a>
          <a class="dropdown-item" href="../crudProd/productos.php">Productos</a>
          <a class="dropdown-item" href="#">Proveedores</a>
           <a class="dropdown-item" href="#">ventas</a>
        </div>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Layout</a>
      </li>
      <div class="d-flex" style="margin-left: 30rem">
      	 <li class="nav-item">
        <a class="nav-link text-dark" href="code/ingreso.php">iniciar sesión</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark" href="#">cerrar sesion</a>
      </li>
      </div>
    </ul>
  </div>
</nav>
		</div>

	</header><!-- /header -->

	<section class="contenedor">
		<div>
			<h2>Registro</h2>
		</div>
<form id="formulary" action="modificar.php" method="POST" accept-charset="utf-8">
<div style="margin-top: -2rem">
<label for="nombre_ape">Nombre Completo:</label>
<input type="text" id="nombre_ape" name="nombre_ape" onpaste ="return false" value="<?php echo $usuario->nombre_ape; ?>">
</div>

<label for="correo">E-mail:</label>
<input type="email" style="margin-left:  6.2rem" id="correo" name="correo" onpaste="return false" value="<?php echo $usuario->correo; ?>">
</div>

<label for="usuario">Usuario:</label>
<input type="text" id="usuario" style="margin-left: 5.4rem" name="nombre_usuario" onpaste="return false" value="<?php echo $usuario->nombre_usuario; ?>">

<label for="clave">Nueva Contraseña:</label>
<input type="password" id="clave" name="clave" onpaste="return false" value="<?php echo $usuario->clave; ?>">

<label for="rol">Rol:</label>
<select name="acceso" id="rol" style="margin-left: 8.2rem">
  <option>--Seleccionar--</option>
 <option value="Administrador">Administrador</option>
 <option value="Usuario">Usuario</option>
</select>
<input type="hidden" name="id2"value="<?php echo $usuario->id; ?>">

<div class="mt-0 botones">
<input type="reset" id="borrar" class="btn btn-outline-danger" value="Borrar">

<input type="submit" id="ingresar" class="btn btn-outline-light" value="Registrarse">

</div>
</form>
	</section>

<script src="../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>