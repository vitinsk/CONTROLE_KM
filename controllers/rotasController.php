<?php 
/**
* 
*/
class rotasController extends controller
{
	
	public function index(){
		$dados = array();
		$this->loadTemplate('rotas',$dados);
	}
}


 ?>