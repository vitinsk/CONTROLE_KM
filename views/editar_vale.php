   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php 
sleep(1);
foreach ($vales as $vale) {
	
}
 ?>
				
						<div class="form-group">						
						<label for="nome">Nº VALE</label>
						<input class="form-control" type="name" name="vale" value="<?=$vale['vale'] ?>"><br>
						<label>Valor Total</label>
						<input class="form-control" type="text" name="valor" value="<?=$vale['valor'] ?>"><br>
						<label>Total de Litros</label>
						<input class="form-control" type="text" name="litros" value="<?=$vale['litros'] ?>"><br>
						<hr>
						<input class="form-control" type="date" name="data" value="<?=$vale['data'] ?>""><br>

						<input class="form-control" type="text" name="idfuncionario" value="<?= $vale['id'] ?>" style="visibility: hidden;">	
						</div>


			