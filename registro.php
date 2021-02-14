<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login de Ingreso</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
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
        <a class="nav-link disabled" href="#">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Clientes</a>
          <a class="dropdown-item" href="#">Productos</a>
          <a class="dropdown-item" href="#">Proveedores</a>
           <a class="dropdown-item" href="#">Ventas</a>
        </div>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="Pagina Web/index.html">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Layout</a>
      </li>
      <div class="d-flex" style="margin-left: 30rem">
      	 <li class="nav-item">
        <a class="nav-link text-dark" href="index.php">iniciar sesión</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark" href="registro.php">Registrarse</a>
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
<form id="formulary" action="code/crudUsuarios/insertar.php" method="POST" accept-charset="utf-8">
<div style="margin-top: -2rem">
<label for="nombre_ape">Nombre Completo:</label>
<input type="text" id="nombre_ape" name="nombre_ape" placeholder="Ingrese Nombre y Apellido" onpaste ="return false">
</div>

<label for="correo">E-mail:</label>
<input type="email" placeholder="Ingrese su Correo léctronico" style="margin-left:  6.2rem" id="correo" name="correo" onpaste="return false">
</div>

<label for="usuario">Nuevo Usuario:</label>
<input type="text" placeholder="Ingrese un Nuevo Usuario" id="usuario" style="margin-left: 1.8rem" name="nombre_usuario" onpaste="return false">

<label for="clave">Nueva Contraseña:</label>
<input type="password"placeholder="Ingrese una Nueva Clave" id="clave" name="clave" onpaste="return false">

<label for="rol">Rol:</label>
<select name="acceso" id="rol" style="margin-left: 8.2rem">
  <option>--Seleccionar--</option>
 <option value="Administrador">Administrador</option>
 <option value="Usuario">Usuario</option>
</select>

<div class="mt-0 botones">
<input type="reset" id="borrar" class="btn btn-outline-danger" value="Borrar">

<input type="submit" id="ingresar" class="btn btn-outline-light" value="Registrarse">

</div>
</form>
	</section>

</body>
</html>