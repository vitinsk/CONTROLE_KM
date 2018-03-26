<?php 
class homeController extends controller {

	public function index(){
		$dados['menssagem'] = null;
		$this->loadTemplate('home', $dados);


	}

	public function mostrar(){
		$msg = "sdadas";
		return $msg;

	}




}

 ?>