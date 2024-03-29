<?php
class Core {

	 

	public function run(){

		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);

		$params = array();

		if(empty($url) == false){
			$url = explode("/", $url);
			$url = array_shift($url);;

			$currentController = $url[0]."Controller";
			array_shift($url);

			if(isset($url[0])){
				$currentAction = $url[0];
			}else{
				$currentAction = "index";
			}

			if(count($url)>0){
				$params = $url;
			}
		}else{
			$currentAction = "index";
			$currentController = "homeController";
		}

		require "Core/Controller.php";
		$c = new $currentController();

		call_user_func_array(array($c, $currentAction ), $params);
	}
}

?>