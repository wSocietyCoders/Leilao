<?php
	require_once "config.php";
class Model{

	protected $pdo;

	public function __construct(){
		global $config;
	
		try{
			$this->pdo= new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"], $config["dbuser"], $config["dbpass"]);
			
		}catch(PDOexception $e){
			echo "Connection Refused"."<br/>".$e->getMessage();
		}
	}

}
?>