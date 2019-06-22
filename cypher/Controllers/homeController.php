<?php
class homeController extends Controller{
	
	public function index(){
		$fotos = new Fotos();
		$fotos->getFotos();
	}
}

?>