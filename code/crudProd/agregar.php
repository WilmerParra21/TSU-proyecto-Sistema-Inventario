<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar Producto</title>

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
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Clientes</a>
          <a class="dropdown-item" href="code/productos.php">Productos</a>
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
    </ul>
  </div>
</nav>

		</div>

	</header><!-- /header -->

<section class="p-3 d-flex">

<form action="insertar.php" method="post" accept-charset="utf-8" class="m-3 col-5 p-3 pr-5 pb-4" style="background-color: rgba(255, 255, 255, 0.3); border: 2px solid red">
	

<div class="m-3">	
<label for="nombreProd">Nombre</label>
<input type="text" name="nombreProd" class="form-control" placeholder="Nombre del Producto">
</div>
<div class="d-flex">
<div class="m-3">
<label for="precioProd">Precio</label>
<input type="text" name="precioProd" class="">
</div>

<div class="m-3">	
<label for="iva">Iva</label>
<input type="text" name="iva" class="">
</div>
</div>

<div class="d-flex mb-2">
<div class="m-3"> 
<label for="cantProd">Cantidad</label>
<input type="number" name="cantProd" class="">
</div>
<div class="m-3"> 
<label for="idCategoria">Categoria</label>
<input type="text" name="idCategoria" class="">
</div>

</div>
<div class="m-3 ml-4"> 
<label for="marca">Marca</label>
<input type="text" name="marca" class="ml-5">
</div>
<div class="m-3"> 
<label for="stockMin">Stock Minimo</label>
<input type="number" name="stockMin" class="" min="5">
</div>

<div class="m-3">
<label for="stockMax">Stock Máximo</label>
<input type="number" name="stockMax" class="" min="72">
</div>

<div class="float-right px-3">
<input type="reset" value="Cancelar" class="btn btn-danger">

<input type="submit" name="" value="Guardar" class="btn btn-success">
</div>
	</form>

<div class="p-5">
	<h1 class="text-center font-italic font-weight-bold text-light">Agregar producto</h1>
</div>
	</section>
</body>
</html>