
<h1>Cadastro de Funcionarios</h1>

<form action="<?php BASE_URL?>Funcionarios/cadastrar" method="POST">
	<label>Nome: </label>
	<input type="text" name="nome" placeholder="Nome"><br>
	<label>Telefone: </label>
	<input type="text" name="telefone" placeholder="telefone"><br>
	<label>CPF: </label>
	<input type="text" name="cpf" placeholder="cpf"><br>
	<button type="submit">Gravar</button>
</form>