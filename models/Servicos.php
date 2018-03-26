<?php 
/**
* 
*/
class Servicos extends model



{


	public function cadastrar($servico,$valor){

		$sql = $this->db->prepare("INSERT INTO tbl_servico SET descricao = :servico, valor = :valor");
		$sql->bindValue(':servico', $servico);
		$sql->bindValue(':valor', $valor);
		$sql->execute();
		
	}

	public function mostrarDados($id){
		$array = array();
		$sql = $this->db->query("SELECT * FROM tblkmrodado WHERE idfuncionario = $id");
		$array = $sql->fetchAll();
		return $array;

	}

}

 ?>