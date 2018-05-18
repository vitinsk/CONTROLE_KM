<?php echo $menssagem ?>


<div class="container">
<h1 style="text-align: center"> Motocicletas </h1>
<hr>
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
        <h4 class="modal-title" style="text-align: center">Cadastro de Motocicletas</h4>
      </div>


    <div class="modal-body">  

	<form action="<?php BASE_URL?>Motocicletas/cadastrar" method="POST">
			 <div class="form-group">
			 	
			<label>Modelo</label>
			<input class="form-control" type="text" name="modelo" placeholder="FAN KS 150C"><br>
			<label>Placa</label>
			<input  class="form-control" type="text" name="placa" placeholder="AAA-0000">
			<!--<label>Funcionario</label>
			<select class="form-control" id="idfuncionario" name="idfuncionario">
		 	<?php 
				//foreach ($nomes as $fun) {
				//	echo "<option value=".$fun['id'].">".$fun['nome']."</option>";
				//}
			 ?>
			</select> -->
				<br>
			<label>KM POR LITRO</label>
			<input class="form-control" type="text" name="km_x_litro" placeholder="15km"><br>

			<br>
			<label>KM Atual</label>
			<input class="form-control" type="text" name="kmatual" placeholder=""><br>
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

<button style="width: 100%" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Novo</button>		
<hr>

<table class="table table-hover" width="100%">
	
	<thead>
		<th>Código</th>
		<th>Modelo</th>
		<th>Placa</th>
		<th>Funcionario</th>
		<th>Km por L</th>
	</thead>
	<tbody>
		<?php
						foreach ($motos as $moto) {
							echo "<tr>
										<td >".$moto['id']."</td>
										<td>".$moto['modelo']."</td>
										<td>".$moto['placa']."</td>
										<td></td>
										<td>".$moto['km_x_litro']."</td>
										<td> <button class='btn btn-default' style='width: 90%' id=".$moto['id']."type='submit'>Alterar</button> </td>
										<td> <a><button class='btn btn-danger' style='width: 90%' id=".$moto['id']."type='submit'>Excluir</button></a> </td>

									
							</tr>";
						}

					?>
	</tbody>



</table>

</div>
</div>
