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

		
		
		// //if ($servicosObj->kmaRodar($id)) {
		// //	$dados['kms'] = $servicosObj->kmaRodar($id);

		// }
		// else {
		// 		$dados['kms'] = "Nemhum abastecimento foi realizado. Por favor abasteça a Motocicleta";
		// 			}			
		
		//manda dados para view
		$this->loadTemplate('servicos',$dados);

	}


	public function cadMovimento(){
		$idfuncionario = '15';
		$idvale = null;
		$Kminicial = $_POST['Kminicial'];
		$Kmfinal = $_POST['Kmfinal'];
		$kmaRodar = $_POST['kmaRodar'];
		$KmRodados = $_POST['KmRodados1'];
		$data = $_POST['data'];
		$servicosObj = new Servicos();
		$servicosObj->cadastroMovimento($idfuncionario,$idvale,$Kminicial,$Kmfinal,$kmaRodar,$KmRodados,$data);

		$dados = array();

		$funcionariosObj = new Funcionarios();
		$dados = $funcionariosObj->GetFunc_Servico($idfuncionario);
		foreach ($dados as $dado) {}
			$idmoto = $dado['idmoto'];
			$km = $dado['kmarodar'] - $KmRodados;

		$motocicletaObj = new Motocicletas();
		$motocicletaObj->atualizaKmarodar($idmoto,$km);
		$motocicletaObj->atualizaKmatual($idmoto,$Kmfinal);			

		
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

		$motocicletaObj = new Motocicletas();
		$dados = array();
		$dados = $motocicletaObj->getKm($idfuncionario);

		foreach ($dados as $dado) {

		}
	
		
		$km = $dado['kmarodar'] + ($dado['km_x_litro'] * $litros);
		$idmoto = $dado['idmoto'];
		
		$motocicletaObj->atualizaKmarodar($idmoto,$km);


	
		
		$this->loadView('home').
		header("location: ".BASE_URL.'servicos&id='.$idfuncionario);

	}


}

 ?>