		
			<!-- RECEBE INFORMACOES DE FUNCIONARIO -->
		<?php foreach ($funcionario as $func) {} ?>

		<div class="centralizar">
	<div class="col-sm-4">	</div>

	<div class="container col-sm-4 ">
	  <ul class="list-group centraliza">
	    <li class="list-group-item menu-funcionario"><span class="negrito">Funcionario:</span>  <?php echo $func['nome'];?></li>
	    <li class="list-group-item"><span class="negrito"> Motocicleta: </span><?= $func['modelo']; ?></li>
	    <li class="list-group-item "><span class="negrito">Placa: </span> <?= $func['placa']; ?></li>
	    <li class="list-group-item"><span class="negrito">Km por Litro:</span> <?= $func['km_x_litro']; ?></li>
	    <li class="list-group-item "><span class="negrito">Km Atual:</span> <?=$func['kmatual']; ?></li>
	    <li class="list-group-item"><span class="negrito">Km a rodar:</span> <?=$func['kmarodar']?></li>
	  </ul>
	</div>

		<hr>



			<!-- MODAL  DE CADASTRO DE VALE -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    
			    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align: center">Vale Combustivel</h4>
			      </div>


			    <div class="modal-body">  

				<form action="<?php BASE_URL?>servicos/cadastroVale" method="POST">
						 <div class="form-group">
						 	
						<label for="nome">Nº VALE</label>
						<input class="form-control" type="name" name="vale" placeholder="OF"><br>
						<label>Valor Total</label>
						<input class="form-control" type="text" name="valor" placeholder="R$"><br>
						<label>Total de Litros</label>
						<input class="form-control" type="text" name="litros" placeholder="Litros"><br>
						<hr>
						<input class="form-control" type="date" name="data" value="<?= date("Y-m-d") ?>"><br>								
						<input class="form-control" type="text" name="idfuncionario" value="<?= $func['id'] ?>" style="visibility: hidden;">	
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




	<!--INICIO CADASTRO DE MOVIMENTO DE KM -->

		<form class="descer" method="POST" action="<?php BASE_URL ?>servicos/cadMovimento&id=<?=$func['id']?>">
		<div class="form-group">
			<div class="container">
				<div class="row">
					<table class="table">
						
						<div>
							<th>Abastecer</th>
						<th class="alinhamento">Vale</th>
						<th class="alinhamento">Dia</th>
						<th class="alinhamento">Km Inicial</th>
						<th class="alinhamento">Km Final</th>
						<th class="alinhamento">Km a Rodar</th>
						<th class="alinhamento">Km Rodados</th>
						<td></td>
					</div>
			

						<tbody>					

							<td> <a href="" data-toggle="modal" data-target="#myModal"> <img style ="margin-left: 25px;" class="imagem" src="<?=BASE_URL?>/assets/images/gasolina.jpg"></a></td>

							<td><input type="text" name="vale" class="form-control" style="width: 60px"></td>

							<td><input id="disabledTextInput" class="form-control" type="date" name="data" value="<?= date("Y-m-d") ?>"></td>

							<td><input class="form-control" id="kminicial" type="text" name="Kminicial" value="<?=$func['kmatual'] ?>"></td>
							<td><input class="form-control" id="kmfinal" type="text" name="Kmfinal"></td>
							<td><input class="form-control" id="" type="text" name="kmaRodar"  value="<?=$func['kmarodar'] ?>"> </td>
							<td><input class="form-control" id="kmrodado" type="text" name="KmRodados1"></td>
							<td><button type="submit" id="registrar" class="btn btn-primary" onmouseover="teste" >Registrar</button></td>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		</form>

	<!--FIM CADASTRO DE MOVIMENTO DE KM -->



		<hr>
	<!--INICIO DE MOVIMENTO DE KM -->
		<h1 class="teste-ul well well-lm" id="demo">Movimentação</h1>


		<div class="form-group">
			<div class="container">
		<div class="row">
		<table class="table">


			
						<thead>	
						<th class="alinhamento">Vale</th>	
						<th class="alinhamento">Dia</th>
						<th class="alinhamento">Km a Rodar</th>
						<th class="alinhamento">Km Inicial</th>
						<th class="alinhamento">Km Final</th>
						<th class="alinhamento">Km Rodado </th>
						
						</thead>
						<?php foreach ($servicos as $servico) {
						
							 ?>
						<tbody style="text-align: center; background-color: white; font-size: 21px;">	
								<td><button class="btn btn-defult" data-toggle="modal" data-target="#mostrarVale"><?=$servico['idvale'] ?><span></span></button></td>

								<td><input class="form-control sm" type="text" name="data" value="<?= date("d/m/Y", strtotime($servico['data']))?>">	</td>

								<td> <input class="form-control" type="" name="kmaRodar" value="<?= $servico['KmaRodar']	 ?>	" disabled> </td>

								<td><input class="form-control" type="" name="Kminicial" value="<?= $servico['Kminicial']	 ?>"> 	</td>

								<td><input class="form-control" type="" name="Kmfinal" value="<?= $servico['Kmfinal']	 ?>"> 	</td>

								<td><input class="form-control" name="KmRodados" value="<?= $servico['KmRodados'] ?>"> </td>
								
								
							
						
					</tbody>
					<?php 	} ?>
					</div>
					</table>
				</div>
			</div>
		</div>
	<!--FIM DE MOVIMENTO DE KM -->
	</div>
	</div>


				



		<div id="mostrarVale" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    
			    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align: center">Vale Combustivel</h4>
			      </div>


			    <div class="modal-body">  

				<form action="<?php BASE_URL?>servicos/cadastroVale" method="POST">
						 <div class="form-group">
						 	
						<label for="nome">Nº VALE</label>
						<input class="form-control" type="name" name="vale" value="<?=$func['nome'] ?>"><br>
						<label>Valor Total</label>
						<input class="form-control" type="text" name="valor" placeholder="R$"><br>
						<label>Total de Litros</label>
						<input class="form-control" type="text" name="litros" placeholder="Litros"><br>
						<hr>
						<input class="form-control" type="date" name="data" value="<?= date("Y-m-d") ?>"><br>								
						<input class="form-control" type="text" name="idfuncionario" value="<?= $func['id'] ?>" style="visibility: hidden;">	
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

			