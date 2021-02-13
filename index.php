<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login de Ingreso</title>

  <link rel="stylesheet" type="text/css" href="css/all.min.css">

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
        <a class="nav-link" href="code/inicio.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Clientes</a>
          <a class="dropdown-item" href="#">Productos</a>
          <a class="dropdown-item" href="#">Proveedores</a>
           <a class="dropdown-item" href="#">ventas</a>
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
			<h2>Sistema de Ingreso</h2>
		</div>
<form id="formulary" action="code/inicio.php" method="POST" class="" accept-charset="utf-8">

<div class="mt-3 separador">
<label for="usuario">Usuario:</label>
<input type="text" placeholder="Ingrese su usuario" id="usuario" name="usuario" class="ml-4" onpaste="return false">
</div>

<div class="mt-3 separador">
<label for="clave">Contraseña:</label>
<input type="password"placeholder="Ingrese su Clave" id="clave" name="clave" onpaste="return false">
</div>

<div class="d-flex">
<p class="text-light font-italic m-2">¿No estás registrado?</p>
<a href="registro.php" class="nav-link text-light">Registrate aqui</a>
</div>
<div class="mt-4 botones">
<input type="reset" id="borrar" class="btn btn-outline-danger" value="Borrar">

<input type="submit" id="ingresar" class="btn btn-outline-light" value="Ingresar">

</div>
</form>
	</section>

<script src="js/all.min.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>