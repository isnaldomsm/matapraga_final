<?php 	requerer_autenticacao(); ?>
<h2>Cadastrar Aluno</h2>

<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
	<table>
		<tr>
			<td><label for='nome'>Nome</label></td>
			<td><input name='nome' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='codigo'>Código</label></td>
			<td><input name='codigo' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='quantidade'>Quantidade</label></td>
			<td><input name='quantidade' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='descricao'>Descrição</label></td>
			<td><input name='descricao' size='35' required /></td>
		</tr>
	</table>
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
		insert($dados, 'materiais');
		redirecionar_para('materiais','listar');
	}
?>