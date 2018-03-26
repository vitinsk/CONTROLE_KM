<?php foreach ($funcionario as $func) {
	# code...
} ?>
<div class="informacoes">
<h4 class="">Funcionario:  <?php echo $func['nome'];?></h4>
<h4>Motocicleta: <?= $func['modelo']; ?></h4>
<h4>Placa: <?= $func['placa']; ?></h4>
<h4>Km por Litro: <?= $func['km_x_litro']; ?></h4>
</div>

<hr>



						<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">

	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title" style="text-align: center">Vale Combustivel</h4>
	      </div>


	    <div class="modal-body">  

		<form action="<?php BASE_URL?>servicos/vale" method="POST">
				 <div class="form-group">
				 	
				<label for="nome">Nº VALE</label>
				<input class="form-control" type="name" name="vale" placeholder="OF"><br>
				<label>Valor Total</label>
				<input class="form-control" type="text" name="valor" placeholder="R$"><br>
				<label>Total de Litros</label>
				<input class="form-control" type="text" name="litros" placeholder="Litros"><br>
				<hr>
				<label>Funcionario</label>
				<input class="form-control" type="text" name="funcionario" value="<?= $func['nome']?>" disabled = "">	

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





<form class="descer" method="POST">
<div class="form-group">
	<div class="container">
		<div class="row">
			<table class="table">
				
				<div>
					<th>Abastecer</th>
				<th class="alinhamento">Dia</th>
				<th class="alinhamento">Km Inicial</th>
				<th class="alinhamento">Km Final</th>
				<th class="alinhamento">Km a Rodar</th>
				<td></td>
			</div>
	

				<tbody>



					<td> <a href="" data-toggle="modal" data-target="#myModal"> <img class="imagem" src="<?=BASE_URL?>/assets/images/gasolina.jpg"></a></td>

					<td><input id="disabledTextInput" class="form-control" type="date" name="dia" value="<?= date("Y-m-d") ?>" disabled></td>

					<td><input class="form-control" type="text" name="km-inicial"></td>
					<td><input class="form-control" type="text" name="km-final"></td>
					<td><input class="form-control" id="tes" type="text" name="km-a-rodar" disabled="" value="<?php   ?>"></td>
					<td><button type="submit" class="btn btn-primary">Registrar</button></td>
				</tbody>
			</table>
		</div>
	</div>
</div>
</form>
<hr>
<h1 class="teste-ul well well-lm">Movimentação</h1>
<div class="form-group">
	<div class="container">
<div class="row">
<table class="table">
				
				<thead>	
				<th class="alinhamento">Dia</th>
				<th class="alinhamento">Km a Rodar</th>
				<th class="alinhamento">Km Inicial</th>
				<th class="alinhamento">Km Final</th>
				
				</thead>
				<?php foreach ($servicos as $servico) {
				
					 ?>
				<tbody style="text-align: center; background-color: white; font-size: 21px;">	
						<td><input class="form-control sm" type="text" name="" value="<?= date("d/m/Y", strtotime($servico['data']))?>">	</td>
						<td> <input class="form-control" type="" name="" value="<?= $servico['KmaRodar']	 ?>	" disabled> </td>
						<td><input class="form-control" type="" name="" value="<?= $servico['Kminicial']	 ?>"> 	</td>
						<td><input class="form-control" type="" name="" value="<?= $servico['Kmfinal']	 ?>"> 	</td>
						<td><button type="btn btn-danger"> Alterar </button></td>
						
					
				
			</tbody>
			<?php 	} ?>
			</div>
			</table>