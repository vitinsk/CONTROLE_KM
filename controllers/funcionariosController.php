<?php 
class funcionariosController extends controller {

public function index(){
	
	$dados = array();
	$f = new Funcionarios();	
	$dados['nomes'] = $f->mostrarFuncionario();

	$motocicletasObj = new Motocicletas();
	$dados['motos'] = $motocicletasObj->mostrar();
	$this->loadTemplate('funcionarios', $dados);

}

public function cadastrar(){
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$idmoto = $_POST['idmoto'];
	$f = new funcionarios();
	$f->cadastrar($nome,$cpf,$telefone,$idmoto);
	$totalFuncionarios = $f->getTotalFuncionarios();
	//$dados['totalFuncionarios'] = $totalFuncionarios;
	//$dados['menssagem'] = 'Usuario cadastrado com Sucesso!';
	//$this->loadTemplate('home', $dados);
	header("location: ".BASE_URL.'funcionarios');	
	}

public function excluir(){
	$id = $_GET['id'];
	$f = new funcionarios();
	$f->excluir($id);
	header("location: ".BASE_URL.'funcionarios');
}	

}


?>
