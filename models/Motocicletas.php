
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


	public function getTotalFuncionarios(){
		$sql = $this->db->query("SELECT COUNT(*) as c FROM tblmoto");
		$row = $sql->fetch();
		return $row['c'];
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
 } 

 ?>




 		