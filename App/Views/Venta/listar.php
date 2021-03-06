<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ventas Realizadas</title>
	<link rel="stylesheet" type="text/css" href="../../../css/all.min.css">
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
        <a class="nav-link text-dark" style="font-family: 'Lato', sans-serif;" href="#">iniciar sesión</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark text-capitalize" href="../sessionOff.php">cerrar sesion</a>
      </li>
      </div>
    </ul>
  </div>
</nav>

</div>
<h1 class="text-center text-light font-weight-bold mt-2 font-italic">Ventas Realizadas</h1>

	</header><!-- /header -->

	<div class="container mt-2">
<div class="col col-3 float-right mr-3">
	<a href="agregar.php" class="btn btn-block btn-outline-warning mb-3"><i class="fas fa-plus"></i>Realizar Venta</a>
	</div>
	<table class="table">
		<thead class="table-dark">
	<tr>
			<th class="text-center" scope="col">ID Venta</th>
			<th class="text-center" scope="col">Cliente</th>
			<th class="text-center" scope="col">Tipo de Pago</th>
			<th class="text-center" scope="col">Total</th>
			<th class="text-center" scope="col">Fecha</th>
		
		<th class="text-center">Acciones</th>
	</tr>
		</thead>
		<tbody>
<?php

?>
<tr class="border border-danger">
	
	<td class="text-center"><?php ?></td>
	
	<td class="text-capitalize text-center"><?php ?></td>
	
	<td class="text-center"><?php ?></td>
	
	<td class="text-center"><?php ?></td>
	
	<td class="text-center"><?php ?></td>
	
	<td class="text-center">
	<a href="venta.php?id=<?php  ?>" class="btn btn-outline-primary">Ver Factura</a>

	<a href="eliminar.php?id=<?php  ?>" class="btn btn-outline-danger" onclick="confirm('¿Desea Eliminar?')"><i class="fas fa-minus-circle"></i> Eliminar de la lista</a>
			</td>
	
			</tr>
<?php

?>
	</tbody>
	</table>

	<div class="card float-right" style="width: 40rem;">
<div class="card-body badge-pill">
<div class="d-flex justify-content-center">
<div>
<p class="card-text font-italic mr-4 border-bottom border-dark pb-2">Generar Reporte PDF de todo el registro de las Ventas</p>
</div>
	<a href="../ReportPdf/productoPDF.php" class="btn btn-danger badge-pill"><i class="fas fa-download"></i> Obtener en PDF</a>

</div>
</div>
</div>
</div>

<script src="../../../js/all.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>