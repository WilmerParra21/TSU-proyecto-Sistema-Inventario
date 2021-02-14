<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio</title>
  <link rel="stylesheet" type="text/css" href="../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body id="header">
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
        <a class="nav-link" href="inicio.php">inicio</a>
      </li>
   
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listados</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgba(1, 1, 1, .9);">
         <a class="nav-link text-light ml-2" href="crudCategoria/categoria.php">Categoria</a>
          <a class="nav-link text-light ml-2" href="crudCliente/clientes.php">Clientes</a>
          <a class="nav-link text-light ml-2" href="crudProd/productos.php">Productos</a>
          <a class="nav-link text-light ml-2" href="crudProov/proveedor.php">Proveedores</a>
          <a class="nav-link text-light ml-2" href="crudUsuarios/listar.php">Usuarios</a>
          <a class="nav-link text-light ml-2" href="Venta/listar.php">Ventas</a>
        </div>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="../Pagina Web/index.html">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Layout</a>
      </li>
      <div class="d-flex" style="margin-left: 28rem">
      	 <li class="nav-item">
        <a class="nav-link text-dark" href="../index.php">iniciar sesíón</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark" href="sessionOff.php">cerrar sesion</a>
      </li>
      </div>
    </ul>
  </div>
</nav>
		</div>

	</header><!-- /header -->

<main class="container">
  <section class="d-flex">
    <article class="col-5">
    
    <div class="p-2" style="background-color: black; font-family: 'Open sans', sans-serif;">
       
  <h3 class="text-light text-capitalize text-center pb-2 font-weight-bold font-italic border-bottom border-success">Inversiones raulin</h3>
        
    </div>
      
      <ul class="list-unstyled procesos">
       <li>
         <a class="nav-link text-light" href="#">Comprar</a>
      </li>
       <li>
          <a class="nav-link text-light" href="#">Devoluciones</a>
      </li>
       <li>
          <a class="nav-link text-light" href="ProductosAgotados/listar.php">Productos Agotados</a>
       </li>
      
      <li>
          <a class="nav-link text-light" href="Venta/agregar.php">Realizar Venta</a>
       </li>
      </ul>
 
    </article>
    <article class="col-5">
      <p class="pl-2 text-light shadow" id="concepto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>
  </section>

<section class="">
  
</section>
</main>

<!--texto para mostrar la hora actual con js-->
<h6 class="m-4 text-light font-weight-bold" id="tiempo"></h6>

<!-- footer // pie de Página -->
<footer class="page-footer mt-5 border-top border-light" style="background-color: rgba(1, 1, 1, .7);">

<div class="container text-center text-md-left pt-2 pt-md-4">
  
  <div class="row mt-1 mt-md-0 mb-3 mb-md-0">

    <hr class="clearfix d-md-none">

    <div class="col-md-3 mx-auto mt-2 mt-md-0 mb-0 mb-md-4">
      
      <h5 class="text-light pb-3 border-bottom border-success w-50">Servicios</h5>
    <br>

    <ul class="list-unstyled foot-desc">
      <li class="mb-1">
                  <small><a href="#!" class="text-decoration-none text-light">Comprar</a></small>
              </li>

              <li class="mb-1">
                <small><a href="#!" class="text-decoration-none text-light">Productos Agotados</a></small>
              </li>

              <li class="mb-1">
                <small><a href="#!" class="text-decoration-none text-light">Devoluciones</a></small>
              </li>
              <li class="mb-1">
                <small><a href="#!" class="text-decoration-none text-light">Ventas</a></small>
              </li>
    </ul>
    </div>

    <hr class="clearfix w-100 d-md-none">
                  
       <div class="col-md-3 mx-auto mt-2 mt-md-0 mb-0 mb-md-4">
                      
    <h5 class="text-light pb-3 border-bottom border-primary w-50">Contacto</h5>
    <br>
        <ul class="fa-ul ml-4">
       <li class="mb-2 text-white"><small><span class="fa-li"><i class="far fa-map"></i></span>Aragua, Maracay-Centro</small>
       </li>
                            
      <li class="mb-2 text-white"><small><span class="fa-li"><i class="fas fa-phone-alt"></i></span>+58 424 819 102</small></li>
     
      <li class="mb-2 text-white"><small><span class="fa-li"><i class="far fa-envelope"></i></span>InversionesRaulin@gmail.com</small></li>
     
      <li class="text-white"><small><span class="fa-li"><i class="far fa-clock"></i></span>Lunes - Sábado: 8-17</small></li>
                        </ul>
                    </div>
  </div>
</div>
<div class="border-top border-danger text-center py-3 text-capitalize text-muted">&copy2021 Copyright desarrollado por: <a href="#" class="text-decoration-none text-light">Dani Pereira</a><a href="#" class="text-decoration-none text-light">, Dovany Liscano y </a><a href="#" class="text-decoration-none text-light"> Wilmer Parra</a>
           
</div>
</footer>
<script src="../js/app.js" type="text/javascript"></script>
<script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/all.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>