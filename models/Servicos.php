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


	public function abastecer($vale, $litros, $valor, $data, $idfuncionario){
		$sql = $this->db->prepare("INSERT INTO tblvale SET vale = :vale, litros = :litros, valor = :valor, data = :data, idfuncionario = :idfuncionario");
		$sql->bindValue(':vale',$vale);
		$sql->bindValue(':litros',$litros);
		$sql->bindValue(':valor',$valor);
		$sql->bindValue(':data',$data);
		$sql->bindValue(':idfuncionario',$idfuncionario);
		$sql->execute();
	}

}

 ?>