

	<div class="container">
	<H1 style="text-align: center"> FUNCIONARIOS 	</H1>
	<!-- ESPAÇO EM BRANCO  -->
	<div class="col-md-2">
		
	</div>
	<!-- TABELAS  -->
	<div class="col-md-10">
	<!-- Trigger the modal with a button -->


	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">

	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title" style="text-align: center">Cadastro de Funcionarios</h4>
	      </div>


	    <div class="modal-body">  

		<form action="<?php BASE_URL?>Funcionarios/cadastrar" method="POST">
				 <div class="form-group">
				 	
				<label for="nome">Nome</label>
				<input class="form-control" type="name" name="nome" placeholder="Nome"><br>
				<label>Telefone</label>
				<input class="form-control" type="text" name="telefone" placeholder="0000-0000"><br>
				<label>CPF</label>
				<input class="form-control" type="text" name="cpf" placeholder="Ex: 000.000.000-00"><br><hr>		
				<label>Motocicleta</label>
					<select class="form-control" name="idmoto">
				<?php 
					foreach ($motos as $moto) {
						?> 
						<option value="<?= $moto['id'] ?>"><?=$moto['placa']?></option>";
				
				 
				<?php } ?>
				</select>
				<br>	
				<label>	Modelo</label>

					<input type="text" class="form-control" name="modelo" value="<?= $moto['placa']?>">


				</div>

		</div>

			<div class="modal-footer">
			     <button type="submit" class="btn btn-primary">Gravar</button>
			     <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>

			</div>

		</form>
	    </div>

	  </div>
	</div>


	<hr>




	<button style="width: 100%" type="button" class="btn btn-info btn-lg teste" data-toggle="modal" data-target="#myModal">Novo</button>		
	<hr>

		<table class="table table-hover" width="100%">
				<tr>	
						<th>Código</th>
						<th>Nome</th>
						<th>Telefone	</th>
						<th>CPF	</th>
						<th></th>
						<th></th>

				</tr>

					<?php
						foreach ($nomes as $nome) {
							
						?>

						<tr>
							
						<form method="POST">	
							<td><?php echo $nome['id']; ?></td>
							<td><?php echo $nome['nome']; ?></td>
							<td><?php echo $nome['telefone']; ?></td>
							<td><?php echo $nome['cpf']; ?></td>
							<td><button class="btn btn-default" id="<?= $nome['id']?>"><a  href="">Alterar</a></button></td>
							<td><button class="btn btn-danger" id="<?= $nome['id']?> "><a href="funcionarios/excluir&id=<?= $nome['id']?>">Excluir</a></button></td>
						</tr>
					</form>
						<?php } ?>

				<!-- 		//	foreach ($nomes as $nome) {
						//		echo "<tr>
						//					<td >".$nome['id']."</td>
						//					<td>".$nome['nome']."</td>
						//					<td>".$nome['telefone']."</td>
						//					<td>".$nome['cpf']."</td>
						//					<td> <button class='btn btn-default' style='width: 90%' id=".$nome['id']."type='submit'>Alterar</button> </td>
						//					<td> <button class='btn btn-danger' style='width: 90%' id=".$nome['id']."type='submit'>Excluir</button> </td>

										
						//		</tr>";
						//	} -->

					
			
		</table>
		<hr>
	</div>

	</div>


	<script type="text/javascript">
		function Alerta(){
			alert('alerta!');
		}
	</script>

		<td> <a href='' value=".$nome['id'].">Editar</a>
											<td> <a href='' id=".$nome['id']." value=".$nome['id'].">Excluir</a>