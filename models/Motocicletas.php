
<?php 
/**
 * 
 */
 class Motocicletas extends model
 {
	public function cadastrar($modelo,$placa,$idfuncionario,$km_x_litro) {

		$sql = $this->db->prepare("INSERT INTO tbl_moto SET modelo = :modelo, placa = :placa, idfuncionario = :idfuncionario, km_x_litro = :km_x_litro");
		$sql->bindValue(':modelo',$modelo);
		$sql->bindValue(':placa',$placa);
		$sql->bindValue(':idfuncionario',$idfuncionario);
		$sql->bindValue(':km_x_litro',$km_x_litro);
		$sql->execute();
 	}

 		public function mostrarClientes(){
 			$array = array();
 			$sql = $this->db->query("SELECT * FROM tbl_moto");
 			$array = $sql->fetchAll();
 			return $array;
 		}


	public function getTotalFuncionarios(){
		$sql = $this->db->query("SELECT COUNT(*) as c FROM tbl_moto");
		$row = $sql->fetch();
		return $row['c'];
	}


		public function valida($idfuncionario){
		$sql = $this->db->query("SELECT COUNT(*) as c FROM tbl_moto WHERE idfuncionario =".$idfuncionario);	
			$row = $sql->fetch();
		return $row['c'];
		

	}
			public function validaPlaca($idfuncionario){
			$sql = $this->db->query("SELECT COUNT(*) as c FROM tbl_moto WHERE idfuncionario =".$idfuncionario);	
			$row = $sql->fetch();
			return $row['c'];
		

	}
 } 

 ?>




 		