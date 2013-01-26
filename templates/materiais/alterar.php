<?php 
	requerer_autenticacao();
	$material = buscar_por_id('materiais', $_GET['id']);
?>

<h2>Alterar Cliente</h2>


<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
	<table>
		<tr>
			<td><label for='nome'>Nome</label></td>
			<td><input name='nome' size='35' required value='<?= $material['nome'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='codigo'>Código</label></td>
			<td><input name='codigo' size='35' required value='<?= $material['codigo'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='quantidade'>Quantidade</label></td>
			<td><input name='quantidade' size='35' required value='<?= $material['quantidade'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='descricao'>Descrição</label></td>
			<td><input name='descricao' size='35' required value='<?= $material['descricao'] ?>' /></td>
		</tr>
	</table>
	<input name='id' value='<?= $material['id'] ?>' type='hidden' />
	<button type='submit'>Salvar</button>
</form>


<?php
	if (count($_POST) > 0){
		$dados = array(
			'nome' => $_POST['nome'],
			'codigo' => $_POST['codigo'],
			'quantidade' => $_POST['quantidade'],
			'descricao' => $_POST['descricao']
		);
		update($dados, $_POST['id'], 'materiais');
		redirecionar_para('materiais','listar');	}
?>