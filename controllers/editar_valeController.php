<?php 
class editar_valeController extends controller {

	public function index(){
		$dados['menssagem'] = null;
		$servicosObj = new Servicos();
		$id = $_POST['id'];
		$dados['vales'] = $servicosObj->getVale($id);
	
		$this->loadViewInTemplate('editar_vale', $dados);

	}
}

 ?>