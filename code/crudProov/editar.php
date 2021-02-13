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
  <title>Modificar Proveedor</title>

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

<form action="modificar.php" method="post" accept-charset="utf-8" class="m-3 col-5 p-3 pr-5 pb-4" style="background-color: rgba(255, 255, 255, 0.3); border: 2px solid red">

<div class="m-3 ml-4">  
<label for="nombre2">Nombre</label>
<input type="text" name="nombre2" class="form-control" value="<?php echo $proveedor->nombre; ?>">
</div>

<div class="m-3 ml-4">
<label for="apellido2">Apellido</label>
<input type="text" name="apellido2" class="form-control" value="<?php echo $proveedor->apellido; ?>">
</div>

<div class="m-3 ml-4">  
<label for="direccion2">Dirección</label>
<input type="text" name="direccion2" class="form-control" value="<?php echo $proveedor->direccion; ?>">
</div>

<div class="m-3 ml-4"> 
<label for="telefono2">Teléfono</label>
<input type="text" name="telefono2" class="form-control" value="<?php echo $proveedor->telefono; ?>">
</div>

<div class="m-3 ml-4"> 
<label for="ciudad_prove2">Ciudad del Proveedor</label>
<input type="text" name="ciudad_prove2" class="form-control" value="<?php echo $proveedor->ciudad_prove; ?>">
</div>

<div class="m-3 ml-4"> 
<label for="id_Producto2">id Producto</label>
<input type="num" name="id_Producto2" class="form-control" value="<?php echo $proveedor->id_Producto; ?>">
</div>

<input type="hidden" name="id_proveedor2" value="<?php echo $proveedor->id_proveedor; ?>">

<div class="float-right p-3">

<input type="reset" value="Cancelar" class="btn btn-danger">

<input type="submit" value="Guardar" class="btn btn-success">
</div>
  </form>

<div class="p-5">
  <h1 class="text-center font-italic font-weight-bold text-light">Modificar Proveedor</h1>
</div>
  </section>
</body>
</html>