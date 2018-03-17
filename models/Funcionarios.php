<?php 
/**
 * 
 */
 class Funcionarios extends model
 {
	public function cadastrar($nome,$cpf,$telefone) {

		$sql = $this->db->prepare("INSERT INTO tbl_funcionario SET nome = :nome, cpf = :cpf, telefone = :telefone");
		$sql->bindValue(':nome',$nome);
		$sql->bindValue(':cpf',$cpf);
		$sql->bindValue(':telefone',$telefone);
		$sql->execute();
 	}

 		public function mostrarFuncionario(){
 			$array = array();
 			$sql = $this->db->query("SELECT * FROM tbl_funcionario");
 			$array = $sql->fetchAll();
 			return $array;
 		}


	public function getTotalFuncionarios(){
		$sql = $this->db->query("SELECT COUNT(*) as c FROM tbl_funcionario");
		$row = $sql->fetch();
		return $row['c'];
	}




 } 

 ?>