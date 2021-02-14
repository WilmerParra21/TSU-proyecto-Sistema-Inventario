<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar Proveedor</title>

	<link rel="stylesheet" href="../../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body style="background-image: url('../../img/slide02.jpg'); background-size: cover; background-attachment: fixed; background-position: center;">

	<header>
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
       <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(1, 1, 1, .9);">
           <a class="nav-link text-light ml-2" href="../crudCategoria/categoria.php">Categoria</a>
          <a class="nav-link text-light ml-2" href="../crudCliente/clientes.php">Clientes</a>
          <a class="nav-link text-light ml-2" href="../crudProd/productos.php">Productos</a>
          <a class="nav-link text-light ml-2" href="proveedor.php">Proveedores</a>
           <a class="nav-link text-light ml-2" href="../Venta/listar.php">Ventas</a>
        </div>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Layout</a>
      </li>
    </ul>
  </div>
</nav>

		</div>

	</header><!-- /header -->

<section class="p-3 d-flex">

<form action="insertar.php" method="post" accept-charset="utf-8" class="m-3 col-5 p-3 pr-5 pb-4" style="background-color: rgba(255, 255, 255, 0.3); border: 2px solid red">
	
<div class="m-3 ml-4">	
<label for="id_proveedor">id proveedor</label>
<input type="text" name="id_proveedor" class="form-control">
</div>

<div class="m-3 ml-4">	
<label for="nombre">Nombre</label>
<input type="text" name="nombre" class="form-control">
</div>

<div class="m-3 ml-4">
<label for="apellido">Apellido</label>
<input type="text" name="apellido" class="form-control">
</div>

<div class="m-3 ml-4">	
<label for="direccion">Dirección</label>
<input type="text" name="direccion" class="form-control">
</div>

<div class="m-3 ml-4"> 
<label for="telefono">Teléfono</label>
<input type="text" name="telefono" class="form-control">
</div>

<div class="m-3 ml-4"> 
<label for="ciudad_prove">Ciudad Proveedor</label>
<input type="text" name="ciudad_prove" class="form-control">
</div>

<div class="m-3 ml-4"> 
<label for="id_Producto">id Producto</label>
<input type="text" name="id_Producto" class="form-control">
</div>

<div class="float-right px-3">
<input type="reset" value="Cancelar" class="btn btn-danger">

<input type="submit" name="" value="Guardar" class="btn btn-success">
</div>
	</form>

<div class="p-5">
	<h1 class="text-center font-italic font-weight-bold text-light">Agregar Proveedor</h1>
</div>
	</section>

<script src="../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>