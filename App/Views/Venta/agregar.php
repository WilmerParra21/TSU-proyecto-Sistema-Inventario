<?php
require '../../Models/conex.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Realizar Venta</title>
	<link rel="stylesheet" type="type/css" href="../../../css/all.min.css">

	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
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
        <a class="nav-link" href="../../../index.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(1, 1, 1, .9);">
    <a class="nav-link text-light ml-2" href="../crudCategoria/listar.php">Categoria</a>
    <a class="nav-link text-light ml-2" href="../crudCliente/listar.php">Clientes</a>
    <a class="nav-link text-light ml-2" href="../crudProd/listar.php">Productos</a>
    <a class="nav-link text-light ml-2" href="../crudProov/listar.php">Proveedores</a>
    <a class="nav-link text-light ml-2" href="listar.php">Ventas</a>
        </div>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Layout</a>
      </li>
      <div class="d-flex" style="margin-left: 30rem">
      	 <li class="nav-item">
        <a class="nav-link text-dark" style="font-family: 'Lato', sans-serif;" href="#"></a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark" href="../sessionOff.php">cerrar sesion</a>
      </li>
      </div>
    </ul>
  </div>
</nav>

</div>
<h1 class="text-center text-light font-weight-bold mt-2 font-italic">Realizar Venta</h1>
</header><!-- /header -->

<div class="mb-0 border-bottom border-dark">
	<form action="insertar.php" method="POST" accept-charset="utf-8" class="m-5">

<label for="id_Producto" class="font-italic font-weight-bold">Código del Producto:</label>
	<input type="text" name="id_Producto" placeholder="Introduce el Código del Producto a Vender" class="form-control d-block">

<label for="cantVent" class="font-weight-bold font-italic">Cantidad a Vender:</label>
	<input type="number" name="cantVent" min="1" class="form-control">

	<input type="submit" class="btn btn-primary mt-3 px-3" value="Agregar">
	</form>
</div>
<div class="bg-light">
<?php
session_start();

$Total = 0;
$cantVent = 0;
// si existe la sesion la uso
if(isset($_SESSION["venta"])){
	$venta = $_SESSION["venta"];
	
	// mensaje de prueba para mostrar la cantidad de productos que se agrega:
	//echo "Cantidad: ".count($venta);
?>
<div class="ml-5 mr-5 bg-white">
	<table class="table border-left border-right border-dark shadow">
	<thead>
			<tr class="">
				<th class="p-3 text-center" scope="col">ID Venta</th>
				<th class="p-3 text-center" scope="col">Código</th>
				<th class="p-3 text-center" scope="col">Producto</th>
				<th class="p-3 text-center" scope="col">Precio</th>
				<th class="p-3 text-center" scope="col">Cantidad</th>
				<th class="p-3 text-center" scope="col">Marca</th>
				<th class="p-3 text-center" scope="col">Sub-Total</th>
				<th class="p-3 text-center" scope="col">Quitar de la Venta</th>
			</tr>
		</thead>
		<tbody>
			
		<?php

foreach ($venta as $producto){

if($producto->id_Producto == $producto->id_Producto){
	$Subtotal = $producto->precioProd * $cantVent;
}

//$producto->cantProd = $cantVent;

		?>
		<tr>
		<td class="text-center"></td>
		<td class="text-center"><?php echo $producto->id_Producto; ?></td>
		<td class="text-center"><?php echo $producto->nombreProd; ?></td>
		<td class="text-center"><?php echo $producto->precioProd; ?>$</td>
		<td class="text-center"><?php echo $cantVent;?></td>
		<td class="text-center"><?php echo $producto->marca; ?></td>
		<td class="text-center"><?php echo $Subtotal; ?>$</td>
		<td class="text-center">
			<a href="#" class="btn btn-danger px-4"><i class="fas fa-minus-circle"></i></a>
		</td>
		</tr>
	<?php
	$Total += $Subtotal;
}

}
?>
		</tbody>
	</table>
<div class="m-3">

<?php 

if($Total == 0){
	echo "<h4 class='text-muted mb-2'>Total: 0</h4>";
} else{
?>
<h4 class="text-muted mb-2">Total: <?php echo $Total; }?></h4>
<a href="#" class="btn btn-success px-3">Procesar Venta</a>
<a href="destroySession.php" class="btn btn-danger px-3">Cancelar Venta</a>
</div>
</div>

</div>


<script src="../../../js/all.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
<script src="ajax.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>