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


		//conta o km a rodar

		
		
		if ($servicosObj->kmaRodar($id)) {
			$dados['kms'] = $servicosObj->kmaRodar($id);

		}
		else {
				$dados['kms'] = "Nemhum abastecimento foi realizado. Por favor abasteça a Motocicleta";
					}			
		
		//manda dados para view
		$this->loadTemplate('servicos',$dados);

	}


	public function cadddd(){
		$idfuncionario = '1';//$_GET['id'];
		$idvale = '10';//null;
		$Kminicial = '1';//$_POST['Kminicial'];
		$Kmfinal = '1';//$_POST['Kmfinal'];
		$kmaRodar = '1';//$_POST['kmaRodar'];
		$KmRodados = '1';//$_POST['KmRodados'];
		$data = '1-1-1';//$_POST['data'];
		$servicosObj = new Servicos();
		$servicosObj->cadastroMovimento($idfuncionario,$idvale,$Kminicial,$Kmfinal,$kmaRodar,$KmRodados,$data);
		$dados = array();
		$this->loadView('home').
		header("location: ".BASE_URL.'servicos&id='.$idfuncionario);

	}

	public function cadastroVale(){

		$vale = $_POST['vale'];
		$litros = $_POST['litros'];
		$valor = $_POST['valor'];
		$data = $_POST['data'];
		$idfuncionario = $_POST['idfuncionario'];
		$servicosObj = new Servicos();
		$servicosObj->abastecer($vale,$litros,$valor,$data, $idfuncionario);
	
		$dados = array();
		$this->loadView('home').
		header("location: ".BASE_URL.'servicos&id='.$idfuncionario);

	}


}

 ?>