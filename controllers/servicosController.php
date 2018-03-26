<?php 
/**
* 
*/
class servicosController extends controller
{
	public function index(){
		//retorna dados do usuario/funcionario
		$id = $_GET['id'];
		$funcionarioObj = new Funcionarios();		
		$funcionario = $funcionarioObj->GetFunc_Servico($id);
		$dados['funcionario'] = $funcionario;
		

		//mostra tabela com base no funcionario
		$servicosObj = new Servicos();
		$dados['servicos'] = $servicosObj->mostrarDados($id);


		//manda dados para view
		$this->loadTemplate('servicos',$dados);

	}




}

 ?>