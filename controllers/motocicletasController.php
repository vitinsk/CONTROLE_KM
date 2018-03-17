<?php 
class motocicletasController extends controller {

	public function index(){
		$f = new Funcionarios();
		$todos = $f->mostrarFuncionario();

		$dados['nomes'] = $todos;
		$dados['menssagem'] = null;
		
		$this->loadTemplate('motocicletas', $dados);
	}
	//Cadastra a motocicleta
	public function Cadastrar(){
		$dado = array();
		$m = new motocicletas();
		$modelo = $_POST['modelo'];
		$placa = $_POST['placa'];
		$idfuncionario = $_POST['idfuncionario'];
		$km_x_litro = $_POST['km_x_litro'];

		if(isset($modelo) && !empty($modelo)){
			$teste = $m->Valida($idfuncionario); // verifica se o funcionario já tem cadastro em outra motocicleta				
			if($teste == 0){ // se verdadeiro = 0: CADASTRA O FUNCIONARIO		
				$m->Cadastrar($modelo,$placa,$idfuncionario,$km_x_litro);
				$dados['menssagem'] = 'Cadastro efetuado com Sucesso!';
				$this->loadTemplate('home', $dados);
			}

			else{
				$dados['menssagem'] = 'O funcionario '. $idfuncionario .' já tem moto cadastrada.';
				$this->loadTemplate('home', $dados);
			}
		}
		else
		{
			$dados['menssagem'] = 'Por favor complete todos os campos.';
			$this->loadTemplate('home', $dados);
		}



		
	}


}

?>