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

}

 ?>