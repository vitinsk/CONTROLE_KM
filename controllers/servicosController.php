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

	public function cadastroVale(){

		$vale = $_POST['vale'];
		$litros = $_POST['litros'];
		$valor = $_POST['valor'];
		$data = date("d-m-Y");
		$idfuncionario = $_POST['idfuncionario'];
		$servicosObj = new Servicos();
		$servicosObj->abastecer($vale,$litros,$valor,$data, $idfuncionario);
	
		$dados = array();
		$this->loadView('home').
		header("location: ".BASE_URL.'servicos&id='.$idfuncionario);

	}


}

 ?>