<?php 

class Conex{
	
	public static function Conection(){	
	
		try{

		$conex = new PDO('mysql:host=localhost;dbname=sistema', "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		return $conex;
			} catch(Exception $e){
				echo "Error presente en ".$e->getMessage();
		}
	}
}

?>