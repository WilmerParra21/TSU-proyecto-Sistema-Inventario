<?php
if (!isset($_GET['id'])){
  header('Location: listar.php');
}
require "../../Models/conex.php";

$id = $_GET['id'];

$cox = new Conex();

$sentencia = $cox->Conection()->prepare('SELECT * FROM categoria WHERE idCategoria = ?;');

$result = $sentencia->execute([$id]);

$categoria = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Categoria</title>

	<link rel="stylesheet" href="../../../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
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
        <a class="nav-link" href="../../../index.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(1, 1, 1, .9);">
          <a class="nav-link text-light ml-2" href="listar.php">Categoria</a>
          <a class="nav-link text-light ml-2" href="../crudCliente/listar.php">Clientes</a>
          <a class="nav-link text-light ml-2" href="../crudProd/listar.php">Productos</a>
          <a class="nav-link text-light ml-2" href="../crudProov/proveedor.php">Proveedores</a>
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
	
<div>
<label for="id_Categoria">Categoria</label>
<input type="text" name="id_Categoria" class="form-control" value="<?php echo $categoria->idCategoria; ?>">
</div>

<div class="m-1">
<label for="nombreProd">Descripcion del Producto:</label>
<input type="text" id="nombreProd" name="nombreProd" class="form-control" value="<?php echo $categoria->nombreProd; ?>">
</div>

<div class="m-1">	
<label for="año">Año</label>
<input type="text" name="año" class="form-control" value="<?php echo $categoria->año; ?>">
</div>

<input type="hidden" name="id2"value="<?php echo $categoria->idCategoria; ?>">

<div class="float-right mt-3 px-3">
<input type="reset" value="Cancelar" class="btn btn-danger">

<input type="submit" name="" value="Guardar" class="btn btn-success">
</div>
	</form>

<div class="p-5">
	<h1 class="text-center font-italic font-weight-bold text-light">Editar Categoria</h1>
</div>
	</section>
</body>
</html>