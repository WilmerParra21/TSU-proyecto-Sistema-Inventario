<?php

require_once "conex.php";

class Usuario{
	
	protected $conex;
	protected $usuarios;
	protected $id;
	protected $usuario;
	protected $nombre_ape;
	protected $clave;
	protected $correo;
	protected $acceso;

	public function __construct()
	{
		$this->conex = Conex::Conection();
		$this->usuarios = array();
	}

	public function listarUsuarios(){

	$sentencia = $this->conex->query('SELECT * FROM login;');

	$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
	
	return $usuarios;
	}

	// Detalle de Usuario
	public function detalleUsuario($id){
	
	// si no existe una id para este detalle, devuelve la vista al listado
		if(!isset($_GET['id'])){
			header('Location: listar.php');
		}
		
	// le asigno el valor de la id a la variable
	$id = $_GET['id'];
	
	// igualo la referencia a la variable para su uso
	$conex = $this->conex;

	// creo la consulta SQL con valor indeterminado para la protecccion de inyecciones SQL
	$sentencia = $conex->prepare('SELECT * FROM login WHERE id = ?;');
	
	// paso el valor de la variable id a la consulta a ejecutar
	$sentencia->execute([$id]);
	
	// almaceno los datos en la variable usuario, aplicando la funcion de recibir datos de la BD para retornarlos
	$usuario = $sentencia->fetch(PDO::FETCH_OBJ);

	// retorno usuario para su uso
	return $usuario;
	}

	// Mostrar vista de Editar Usuario
	public function editarUsuario($id){

		if (!isset($_GET['id'])){
			header('Location: listar.php');
		}
		
		$id = $_GET['id'];
		// igualo la referencia a la variable para su uso
		$conex = $this->conex;

		$sentencia = $conex->prepare('SELECT * FROM login WHERE id = ?;');

		$sentencia->execute([$id]);

		$usuario = $sentencia->fetch(PDO::FETCH_OBJ);

		return $usuario;
	}
	

	// Modificar Usuario
	public function modificarUsuario($id){

		// si un dato esta vacio al modificar, devuelve la vista al listado
		if (!isset($_POST['nombre_ape']) || !isset($_POST['usuario']) || !isset($_POST['correo']) || !isset($_POST['clave']) || !isset($_POST['acceso'])){

			header('Location: ../../../index.php');
		}
		
	// le asigno el valor de la id a la referencia creada en el constructor
	$this->id = $_POST['id'];
	
	// igualo la referencia a la variable para su uso
	$id = $this->id;
	$conex = $this->conex;

	// se le asignan los ddatos a las variables
	$id      = $_POST['id'];
	$nombre  = $_POST['nombre_ape'];
	$usuario = $_POST['usuario'];
	$correo  = $_POST['correo'];
	$clave   = $_POST['clave'];
	$acceso  = $_POST['acceso'];

	// se prepara la consulta con valores indeterminados para la protección de la consulta
	$sentencia = $conex->prepare('UPDATE login SET nombre_ape = ?, usuario = ?, clave = ?, correo = ?, acceso = ? WHERE id = ?;');

	// se le asignan los valores a la consulta y se ejecuta
	$result = $sentencia->execute([$nombre, $usuario, $clave, $correo, $acceso, $id]);

	// si $result es verdadero, redirecciona al listar, de lo contrario, dame mensaje de error
	if($result === true) {
		
		header('Location: listar.php');

	} else{

		echo "Error al Modificar";
	}

	return $result;
	}
}

?>