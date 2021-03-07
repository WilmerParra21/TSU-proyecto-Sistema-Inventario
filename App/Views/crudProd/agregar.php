<?php 
include '../../Models/conex.php';

$cox = new Conex();

$sentencia = $cox->Conection()->query('SELECT idCategoria, nombreProd FROM categoria ORDER BY nombreProd ASC');

$categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar Producto</title>

	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
</head>
<body style="background-image: url('../../../img/slide02.jpg'); background-size: cover; background-attachment: fixed; background-position: center;">

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
        <a class="nav-link" href="../../../index.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(1, 1, 1, .9);">
          <a class="nav-link text-light ml-2" href="../crudCategoria/listar.php">Categoria</a>
          <a class="nav-link text-light ml-2" href="../crudCliente/listar.php">Clientes</a>
          <a class="nav-link text-light ml-2" href="listar.php">Productos</a>
          <a class="nav-link text-light ml-2" href="../crudProov/listar.php">Proveedores</a>
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

<form action="insertar.php" method="POST" accept-charset="utf-8" class="m-3 col-5 p-3 pr-5 pb-4" style="background-color: rgba(255, 255, 255, 0.3); border: 2px solid red">
	

<div class="m-3">	
<label for="idCategoria">Nombre</label>
<select name="idCategoria" class="form-control">
  <option selected disabled>--Seleccione--</option>
  <?php 
  foreach ($categorias as $cate){
  ?>
  <option><?php echo $cate->nombreProd?></option>
  <?php
  } 
  ?>
</select>
</div>
<div class="d-flex">
<div class="m-3">
<label for="precioProd">Precio</label>
<input type="text" name="precioProd" class="form-control">
</div>

<div class="m-3">	
<label for="iva">Iva</label>
<input type="text" name="iva" class="form-control">
</div>
</div>

<div class="d-flex">
<div class="m-3"> 
<label for="cantProd">Cantidad</label>
<input type="number" name="cantProd" class="form-control">
</div>

<div class="m-3">
<label for="marca">Marca</label>
<input type="text" id="marca" name="marca" class="form-control">
</div>

</div>
<div class="d-flex">
<div class="m-3"> 
<label for="stockMin">Stock Minimo</label>
<input type="number" id="stockMin" name="stockMin" class="form-control" min="5">
</div>

<div class="m-3">
<label for="stockMax">Stock Máximo</label>
<input type="number" id="stockMax" name="stockMax" class="form-control" max="320">
</div>
</div>
<div class="float-right px-3">
<input type="reset" value="Cancelar" onclick="productos.php" class="btn btn-danger">

<input type="submit" name="" value="Guardar" class="btn btn-success">
</div>
	</form>

<div class="p-5">
	<h1 class="text-center font-italic font-weight-bold text-light">Agregar producto</h1>
</div>
	</section>

<script src="../../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>