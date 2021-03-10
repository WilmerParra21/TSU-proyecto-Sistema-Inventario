<?php
if (!isset($_GET['id'])){
  header('Location: listar.php');
}
require "../../Models/conex.php";

$id = $_GET['id'];

$cox = new Conex();
$sentencia  = $cox->Conection()->prepare('SELECT * FROM producto WHERE id_Producto = ?;');
$sentencia2 = $cox->Conection()->prepare('SELECT * FROM categoria');

$result  = $sentencia->execute([$id]);

$producto = $sentencia->fetch(PDO::FETCH_OBJ);
$categoria = $sentencia2->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Producto</title>

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

<form action="modificar.php" method="POST" accept-charset="utf-8" class="m-3 col-5 p-3 pr-5 pb-4" style="background-color: rgba(255, 255, 255, 0.3); border: 2px solid green">
	
<div class="m-3">	

<label>Nombre</label>
<select name="idCategoria" class="form-control">
  <?php
  foreach ($categoria as $cate){
  ?>
  <option value="<?php $cate->idCategoria; ?>" <?php $cate->idCategoria == $producto->idCategoria ? 'selected' : '' ?> > <?php echo $cate->nombreProd; ?></option>
  <?php
  } 
  ?>
</select>
</div>
<div class="d-flex">
<div class="m-3">
<label for="precioProd2">Precio</label>
<input type="text" name="precioProd2" class="form-control" value="<?php echo $producto->precioProd; ?>">
</div>

<div class="m-3">	
<label for="iva2">Iva</label>
<input type="text" name="iva2" class="form-control" value="<?php echo $producto->iva; ?>">
</div>
</div>

<div class="d-flex mb-2">
<div class="m-3"> 
<label for="cantProd2">Cantidad</label>
<input type="number" name="cantProd2" class="form-control" value="<?php echo $producto->cantProd; ?>">
</div>

<div class="m-3"> 
<label for="marca2">Marca</label>
<input type="text" name="marca2" class="form-control" value="<?php echo $producto->marca; ?>">
</div>
</div>

<div class="d-flex">
<div class="m-3"> 
<label for="stockMin2">Stock Minimo</label>
<input type="number" name="stockMin2" class="form-control" min="6" value="<?php echo $producto->stockMin; ?>">
</div>

<div class="m-3">
<label for="stockMax2">Stock Máximo</label>
<input type="number" name="stockMax2" class="form-control" value="<?php echo $producto->stockMax; ?>">
</div>
</div>

<input type="hidden" name="id2"value="<?php echo $producto->id_Producto; ?>">

<div class="float-right px-3">
<input type="reset" value="Cancelar" class="btn btn-danger">

<input type="submit" value="Guardar" class="btn btn-success">
</div>
	</form>

<div class="p-5">
	<h1 class="text-center font-italic font-weight-bold text-light">Editar producto</h1>
</div>
	</section>

<script src="../../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>