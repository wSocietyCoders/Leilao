<?php
require_once "environment.php";

define("BASE_URL", "http://localhost/promo");

global $config;

$config =array();

if(ENVIRONMENT == "devlopment"){
	$config["dbname"] = "blog";
	$config["dbpass"] = "";
	$config["host"] = "localhost";
	$config["dbuser"] = "root"; 
}else{
	$config["dbname"] = "";
	$config["dbpass"] = "";
	$config["host"] = "";
	$config["dbuser"] = ""; 
}


?>