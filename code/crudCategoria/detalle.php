<?php
	if (!isset($_GET['id'])){
  header('Location: categoria.php');
}
require "../conex.php";

$id = $_GET['id'];

$sentencia = $conex->prepare('SELECT * FROM categoria WHERE id_Categoria = ?;');

$result = $sentencia->execute([$id]);

$categoria = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Categoria</title>
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
<h1 class="text-center text-light font-weight-bold mt-2 font-italic text-capitalize"><?php echo $categoria->descripcion;?></h1>
	</header><!-- /header -->


<section class="m-5">
  
  <ul class="list-unstyled d-flex"> 

<div class="m-4">
     <li class="font-weight-bold">Categoria: <p class="text-primary"><?php echo $categoria->id_Categoria;?></p></li>

      <li class="font-weight-bold">Marca: <p class="text-primary"><?php echo $categoria->marca;?></p></li>

      <li class="font-weight-bold">Año: <p class="text-primary"><?php echo $categoria->año;?></p></li>

</div>
  </ul>
</section>

<a href="categoria.php" class="btn btn-outline-primary ml-5">Volver atrás</a>
</body>
</html>