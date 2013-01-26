<?php requerer_autenticacao(); ?>

<h2>Cadastrar Cliente</h2>

<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
	<table>
		<tr>
			<td><label for='nome'>Nome</label></td>
			<td><input name='nome' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='razao_social'>Razão Social</label></td>
			<td><input name='razao_social' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='cnpj'>CNPJ</label></td>
			<td><input name='cnpj' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='endereco'>Endereço</label></td>
			<td><input name='endereco' size='35' required /></td>
		</tr>
		<tr><!-- TODO: trocar por menuselect -->
			<td><label for='status'>Status</label></td>
			<td><input name='status' size='35' required /></td>
		</tr>

	</table>
	<button type='submit'>Salvar</button>
</form>


<?php
	if (count($_POST) > 0){
		$dados = array(
			'nome' => $_POST['nome'],
			'razao_social' => $_POST['razao_social'],
			'cnpj' => $_POST['cnpj'],
			'endereco' => $_POST['endereco'],
			'status' => $_POST['status']
		);		
		insert($dados, 'clientes');
		redirecionar_para('clientes','listar');
	}
?>