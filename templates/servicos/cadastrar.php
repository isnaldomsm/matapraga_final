<?php 
	requerer_autenticacao();
	$clientes = select_all('clientes'); 
	$tecnicos = select_all('tecnicos');
?>

<h2>Cadastrar Serviço</h2>

<?php if(!$clientes): ?>
<p>É necessário <?php link_cadastrar('Cadastrar Clientes','clientes') ?> antes de cadastrar um serviço.</p>

<?php endif; ?>

<?php if(!$tecnicos): ?>
<p>É necessário <?php link_cadastrar('Cadastrar Técnicos','tecnicos') ?> antes de cadastrar um serviço.</p>
<?php endif; ?>

<?php if($tecnicos && $clientes): ?>
<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
	<table>
		<tr>
			<td><label for='cliente_id'>Cliente</label></td>
			<td>
			<select name='cliente_id'>
				<?php foreach($clientes as $cliente): ?>
				<option value='<?= $cliente['id'] ?>'><?= $cliente['nome'] ?></option>
				<?php endforeach; ?>
			</select>
			</td>
		</tr>
		<tr>
			<td><label for='tecnico_id'>Tecnico</label></td>
			<td>
			<select name='tecnico_id'>
				<?php foreach($tecnicos as $tecnico): ?>
				<option value='<?= $tecnico['id'] ?>'><?= $tecnico['nome'] ?></option>
				<?php endforeach; ?>
			</select>
			</td>
		</tr>
		<tr>
			<td><label for='data_execucao'>Execução</label></td>
			<td><input name='data_execucao' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='garantia'>Garantia</label></td>
			<td><input name='garantia' size='35' required /></td>
		</tr>
		<tr><!-- TODO: trocar por checkbox -->
			<td><label for='tipos'>Tipos</label></td>
			<td><input name='tipos' size='35' required /></td>
		</tr>
		<tr>
			<td><label for='observacoes'>Observações</label></td>
			<td><textarea name='observacoes' cols='25'></textarea></td>
		</tr>
	</table>
	<button type='submit'>Salvar</button>
</form>
<?php endif; ?>


<?php
	if (count($_POST) > 0){
		$dados = array(
			'cliente_id' => $_POST['cliente_id'],
			'tecnico_id' => $_POST['tecnico_id'],
			'data_execucao' => $_POST['data_execucao'],
			'garantia' => $_POST['garantia'],
			'status' => 'agendado',
			'tipos' => $_POST['tipos'],
			'observacoes' => $_POST['observacoes']
		);		
		insert($dados, 'servicos');
		redirecionar_para('servicos','listar');
	}
?>