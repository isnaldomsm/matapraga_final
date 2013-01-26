<?php 
	requerer_autenticacao();
	$cliente = buscar_por_id('clientes', $_GET['id']);
?>

<h2>Alterar Cliente</h2>


<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
	<table>
		<tr>
			<td><label for='nome'>Nome</label></td>
			<td><input name='nome' size='35' required value='<?= $tecnico['nome'] ?>' /></td>
		</tr>
		<tr>
			<td><label for='email'>Email</label></td>
			<td><input name='email' size='35' required value='<?= $tecnico['email'] ?>' /></td>
		</tr>
		<tr><!-- TODO: trocar por Checkbox -->
			<td><label for='disponibilidade'>Disponibilidade</label></td>
			<td><input name='disponibilidade' size='35' required value='<?= $tecnico['disponibilidade'] ?>' /></td>
		</tr>
	</table>
	<input name='id' value='<?= $materiais['id'] ?>' type='hidden' />
	<button type='submit'>Salvar</button>
</form>


<?php
	if (count($_POST) > 0){
		$dados = array(
			'nome' => $_POST['nome'],
			'email' => $_POST['email'],
			'disponibilidade' => $_POST['disponibilidade'],
		);		
		update($dados, $_POST['id'], 'tecnicos');
		redirecionar_para('tecnicos','listar');	}
?>