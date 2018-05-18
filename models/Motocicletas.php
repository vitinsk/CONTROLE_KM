
<?php 
/**
 * 
 */
 class Motocicletas extends model
 {
	public function cadastrar($modelo,$placa,$km_x_litro, $kmatual) {

		$sql = $this->db->prepare("INSERT INTO tblmoto SET modelo = :modelo, placa = :placa, km_x_litro = :km_x_litro, kmatual = :kmatual");
		$sql->bindValue(':modelo',$modelo);
		$sql->bindValue(':placa',$placa);
		$sql->bindValue(':km_x_litro',$km_x_litro);
		$sql->bindValue(':kmatual', $kmatual);
		$sql->execute();
 	}

 		public function mostrar(){
 			$array = array();
 			$sql = $this->db->query("SELECT * FROM tblmoto");
 			$array = $sql->fetchAll();
 			return $array;
 		}


	public function getKm($id){
		$array = array();
		$sql = $this->db->query("SELECT funcionario.idmoto, moto.km_x_litro, moto.kmatual, moto.kmarodar
								FROM tblfuncionario as funcionario
								INNER JOIN tblmoto as moto
								ON funcionario.idmoto = moto.id
								WHERE funcionario.id = $id");

		$array = $sql->fetchAll();
		return $array;
	}

	public function atualizaKmarodar($id,$km){
		$sql = $this->db->query("UPDATE tblmoto SET kmarodar = $km WHERE id = $id");
	
	
		$sql->execute();
	}

	public function atualizaKmatual($id,$km){
		$sql = $this->db->query("UPDATE tblmoto SET kmatual = $km WHERE id = $id");
	}


		public function valida($idfuncionario){
		$sql = $this->db->query("SELECT COUNT(*) as c FROM tblmoto WHERE idfuncionario =".$idfuncionario);	
			$row = $sql->fetch();
		return $row['c'];
		

	}
			public function validaPlaca($idfuncionario){
			$sql = $this->db->query("SELECT COUNT(*) as c FROM tblmoto WHERE idfuncionario =".$idfuncionario);	
			$row = $sql->fetch();
			return $row['c'];
		

	}


		public function excluir($id){
		
		$sql = $this->db->query("DELETE FROM tblmoto WHERE id = $id");
		$this->db->query($sql);
		
	}
 } 

 ?>




 		