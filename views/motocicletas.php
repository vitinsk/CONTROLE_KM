<?php echo $menssagem ?>

<h1>Cadastro de Motocicletas</h1>

<form action="<?php BASE_URL?>Motocicletas/cadastrar" method="POST">
	<label>Modelo: </label>
	<input type="text" name="modelo" placeholder="modelo"><br>
	<label>Placa: </label>
	<input type="text" name="placa" placeholder="placa"><br>
	<label>Funcionario: </label>
	<select id="idfuncionario" name="idfuncionario">
	<?php 
		foreach ($nomes as $fun) {
			echo "<option value=".$fun['id'].">".$fun['nome']."</option>";
		}
	 ?>
	</select>
		<br>
		<label>KM POR LITRO: </label>
	<input type="text" name="km_x_litro" placeholder="km_x_litro"><br>
	<button type="submit">Gravar</button>
</form>