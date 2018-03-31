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

<<<<<<< HEAD
	public function cadastroMovimento($idfuncionario,$idvale,$Kminicial,$Kmfinal,$kmaRodar,$KmRodados,$data){
		$sql = $this->db->prepare("INSERT INTO tblkmrodado SET idfuncionario = :idfuncionario, idvale = :idvale, Kminicial = :Kminicial, Kmfinal = :Kmfinal,kmaRodar = :kmaRodar, KmRodados = :KmRodados, data = :data");
		
		$sql->bindValue(':idfuncionario',$idfuncionario);
		$sql->bindValue(':idvale',$idvale);
		$sql->bindValue(':Kminicial',$Kminicial);
		$sql->bindValue(':Kmfinal',$Kmfinal);
		$sql->bindValue(':kmaRodar',$kmaRodar);
		$sql->bindValue(':KmRodados',$KmRodados);
		$sql->bindValue(':data',$data);
		$sql->execute();

	}



	// public function kmaRodar($id){
	// 		$array = array();
	// 		$sql = $this->db->query("SELECT moto.km_x_litro as km, vale.litros 
	// 								FROM tblfuncionario as funcionario 
	// 								INNER JOIN tblmoto as moto
	// 								ON funcionario.idmoto = moto.id
	// 								INNER JOIN tblvale as vale
	// 								ON vale.idfuncionario = funcionario.id
	// 								WHERE funcionario.id = $id
	// 								ORDER BY vale.id DESC LIMIT 1;");


	// 		$array = $sql->fetch();
	// 		$array['litros'] *= $array['km'];
	// 		$calcular = $array['litros'];
	// 		$array['total'] = $calcular;
	// 		return $array;
	// 	}

=======
>>>>>>> parent of fc3d291... adicionado funcoes a servicos
}

 ?>