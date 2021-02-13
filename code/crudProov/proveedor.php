<?php
	include '../conex.php';

	$sentencia = $conex->query('SELECT * FROM proveedor;');

	$proveedor = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Proveedores</title>
	<link rel="stylesheet" type="text/css" href="../../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
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
        <a class="nav-link" href="../../index.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../crudCliente/clientes.php">Clientes</a>
          <a class="dropdown-item" href="../crudProd/productos.php">Productos</a>
          <a class="dropdown-item" href="proveedor.php">Proveedores</a>
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
<h1 class="text-center text-light font-weight-bold mt-2 font-italic">Proveedores</h1>

	</header><!-- /header -->

	<div class="container mt-2">
	<div class="col col-3 float-right shadow">
		<a href="agregar.php" class="btn btn-block btn-outline-warning mb-3"><i class="fas fa-plus"></i> Proveedor</a>
	</div>
	<table class="table">
		<thead class="table-dark">
			<tr>
			<th class="text-center" scope="col">ID</th>
			<th class="text-center" scope="col">Nombre</th>
			<th class="text-center" scope="col">Apellido</th>
			<th class="text-center" scope="col">Dirección</th>
			<th class="text-center" scope="col">Teléfono</th>
			<th class="text-center" scope="col">Ciudad</th>
			
			<th class="text-center">Acciones</th>
			</tr>
		</thead>

		<tbody>
<?php
foreach ($proveedor as $dato){
?>
<tr class="border border-danger">

	<td class="text-center"><?php echo $dato->id_proveedor;?></td>
	
	<td class="text-capitalize"><?php echo $dato->nombre;?></td>
	
	<td class="text-center"><?php echo $dato->apellido;?></td>
	
	<td class="text-center"><?php echo $dato->direccion;?></td>

	<td class="text-center"><?php echo $dato->telefono;?></td>

	<td class="text-center"><?php echo $dato->ciudad_prove;?></td>
	
	<td>
	<a href="detalle.php?id=<?php echo $dato->id_proveedor; ?>" class="btn btn-outline-info">Ver Detalle</a>

	<a href="editar.php?id=<?php echo $dato->id_proveedor; ?>" class="btn btn-outline-success"><i class="far fa-edit"></i> Editar</a>

	<a href="eliminar.php?id=<?php echo $dato->id_proveedor; ?>" class="btn btn-outline-danger" onclick="confirm('¿Desea Eliminar?')"><i class="fas fa-minus-circle"></i> Eliminar</a>
			</td>
			</tr>
<?php
}
?>
		</tbody>
	</table>

	<div class="card float-right" style="width: 40rem;">
<div class="card-body badge-pill">
<div class="d-flex justify-content-center">
<div>
<p class="card-text font-italic mr-4 border-bottom border-dark pb-2">Generar Reporte PDF de todo el registro de Proveedores</p>
</div>
	<a href="../ReportPdf/proveedorPDF.php" class="btn btn-danger badge-pill"><i class="fas fa-download"></i> Obtener en PDF</a>

</div>
</div>
</div>
</div>
<script src="../../js/all.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>