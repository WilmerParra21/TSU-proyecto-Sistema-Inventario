<?php
	if (!isset($_GET['id'])){
  header('Location: proveedor.php');
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('SELECT * FROM proveedor WHERE id_proveedor = ?;');

$result = $sentencia->execute([$id]);

$proveedor = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ver Proveedor</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>

	<header class="header">
		<div class="encabezado">
		
<nav class="navbar navbar-expand-lg navbar-light mt-3" style="background-color: rgba( 255, 255, 255, .5);
">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">inicio</a>
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
<h1 class="text-center text-light font-weight-bold mt-2 font-italic text-capitalize">Proveedor <?php echo $proveedor->nombre;?> <?php echo $proveedor->apellido;?></h1>

	</header><!-- /header -->


<section class="m-5">
  
  <ul class="list-unstyled d-flex"> 

<div class="m-4">

     <li class="font-weight-bold">Dirección: <p class="text-primary"><?php echo $proveedor->direccion;?></p></li>
</div>
<div class="m-4">

    <li class="font-weight-bold">Teléfono: <p class="text-primary"><?php echo $proveedor->telefono;?></p></li>
</div>

<div class="m-4">
<li class="font-weight-bold">Ciudad Proveedor: <p class="text-primary"><?php echo $proveedor->ciudad_prove;?></p></li>
</div>

<div class="m-4">
<li class="font-weight-bold">id Producto: <p class="text-primary"><?php echo $proveedor->id_Producto;?></p></li>
</div>
  </ul>
</section>

<a href="proveedor.php" class="btn btn-outline-primary ml-5">Volver atrás</a>

<script src="../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>