<?php 
	requerer_autenticacao();
	$cliente = buscar_por_id('clientes', $_GET['id']);
?>

<h2>Alterar Cliente</h2>


<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>

	<table>
		<tr>
			<td><label for='nome'>Nome</label></td>
			<td><input name='nome' size='35' required value='<?= $cliente['nome'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='razao_social'>Razão Social</label></td>
			<td><input name='razao_social' size='35' required value='<?= $cliente['razao_social'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='cnpj'>CNPJ</label></td>
			<td><input name='cnpj' size='35' required value='<?= $cliente['cnpj'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='endereco'>Endereço</label></td>
			<td><input name='endereco' size='35' required value='<?= $cliente['endereco'] ?>' /></td>
		</tr>
		<tr><!-- TODO: trocar por menuselect -->
			<td><label for='status'>Status</label></td>
			<td><input name='status' size='35' required value='<?= $cliente['status'] ?>' /></td>
		</tr>
	</table>
	<input name='id' value='<?= $cliente['id'] ?>' type='hidden' />
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
		update($dados, $_POST['id'], 'clientes');
		redirecionar_para('clientes','listar');
	}
?>