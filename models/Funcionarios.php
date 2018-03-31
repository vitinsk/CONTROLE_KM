<?php 
/**
 * 
 */
 class Funcionarios extends model
 {
	public function cadastrar($nome,$cpf,$telefone,$idmoto) {

		$sql = $this->db->prepare("INSERT INTO tblfuncionario SET nome = :nome, cpf = :cpf, telefone = :telefone, idmoto = :idmoto");
		$sql->bindValue(':nome',$nome);
		$sql->bindValue(':cpf',$cpf);
		$sql->bindValue(':telefone',$telefone);
		$sql->bindValue(':idmoto', $idmoto);
		$sql->execute();

 	}

 		public function mostrarFuncionario(){
 			$array = array();
 			$sql = $this->db->query("SELECT * FROM tblfuncionario");
 			$array = $sql->fetchAll();
 			return $array;
 		}


	public function getTotalFuncionarios(){
		$sql = $this->db->query("SELECT COUNT(*) as c FROM tblfuncionario");
		$row = $sql->fetch();
		return $row['c'];
	}

	public function excluir($id){
		
		$sql = $this->db->query("DELETE FROM tblfuncionario WHERE id = $id");
		$this->db->query($sql);
		//$sql = bindValue(':id', $id);
		//$sql->execute();
	}

	public function GetFunc_Servico($id){
		$array = array();
		$sql = $this->db->query("SELECT funcionario.id, funcionario.nome, moto.modelo, moto.placa, moto.km_x_litro, moto.kmatual, funcionario.idmoto, moto.kmarodar FROM tblfuncionario as funcionario INNER JOIN tblmoto as moto ON funcionario.idmoto = moto.id WHERE funcionario.id = $id");
	
		$array = $sql->fetchAll();
		return $array;
	}




 } 

 ?>