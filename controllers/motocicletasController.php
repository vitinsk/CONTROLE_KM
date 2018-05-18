<?php 
class motocicletasController extends controller {

	public function index(){
		$dados['menssagem'] = null;
		$f = new Funcionarios();
		$todosNomes = $f->mostrarFuncionario();
		$dados['nomes'] = $todosNomes;
		$m = new motocicletas();
		$todosMotos = $m->mostrar();
		$dados['motos'] = $todosMotos;

		
		$this->loadTemplate('motocicletas', $dados);
	}
	//Cadastra a motocicleta
	public function Cadastrar(){
		$dado = array();
		$m = new motocicletas();
		$modelo = $_POST['modelo'];
		$placa = $_POST['placa'];
	
		$km_x_litro = $_POST['km_x_litro'];
		$kmatual = $_POST['kmatual'];

		if(isset($modelo) && !empty($modelo)){
			//$teste = $m->Valida($); // verifica se o funcionario já tem cadastro em outra motocicleta				
			//if($teste == 0){ // se verdadeiro = 0: CADASTRA O FUNCIONARIO		
				$m->Cadastrar($modelo,$placa,$km_x_litro,$kmatual);
				$dados['menssagem'] = 'Cadastro efetuado com Sucesso!';
				$this->loadView('home', $dados);
				header("location: ".BASE_URL.'motocicletas');
			}
		}

	public function excluir(){
	$id = $_GET['id'];
	$motocicletasObj = new motocicletas();
	$motocicletasObj->excluir($id);
	header("location: ".BASE_URL.'motocicletas');
}

	}
	

// 			else{
// 				echo "Alerta()";
// 				$dados['menssagem'] = 'O funcionario '. $idfuncionario .' já tem moto cadastrada.';
// 				$this->loadTemplate('home', $dados);
// 			}
// 		}
// 		else
// 		{
// 			echo "<script> Alerta('Por favor complete todos os campos'); </script>";	
// 			$dados['menssagem'] = 'Por favor complete todos os campos.';
// 			$this->loadTemplate('home', $dados);
// 			//header("location: ".BASE_URL.'motocicletas');


// 		}



		
// 	}


// }





?>

