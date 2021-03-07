<?php

require_once "conex.php";

class Usuario{
	
	protected $conex;
	protected $usuarios;

	public function __construct()
	{

		$this->conex = Conex::Conection();
		$this->usuarios = array();
	}

	public function listarUsuarios(){

	$sentencia = $this->conex->query('SELECT * FROM login;');

	$result = $sentencia->fetchAll(PDO::FETCH_OBJ);
	
		while($filas = $result){

			$this->usuarios[] = $filas;
		}

	return $this->usuarios;
	}
}

?>