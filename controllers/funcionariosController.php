<?php 
class funcionariosController extends controller {

public function index(){
	
	$dados['menssagem'] = null;
	$this->loadTemplate('funcionarios', $dados);
}

public function cadastrar(){

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$f = new funcionarios();
	$f->cadastrar($nome,$cpf,$telefone);

	$totalFuncionarios = $f->getTotalFuncionarios();
	$dados['totalFuncionarios'] = $totalFuncionarios;
	$dados['menssagem'] = 'Usuario cadastrado com Sucesso!';
	$this->loadtemplate('home', $dados);

}


}

?>