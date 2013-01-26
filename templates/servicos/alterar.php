<?php 
	requerer_autenticacao();
	$servico = buscar_por_id('servicos', $_GET['id']);
	$cliente_servico = buscar_por_id('clientes', $servico['cliente_id']);
	$tecnico_servico = buscar_por_id('tecnicos', $servico['tecnico_id']);
	$clientes = select_all('clientes'); 
	$tecnicos = select_all('tecnicos');	
?>

<h2>Alterar Serviço</h2>


<form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
	<table>
		<tr>
			<td><label for='cliente_id'>Cliente</label></td>
			<td>
			<select name='cliente_id'>
			<?php 
				foreach($clientes as $cliente):
					$selected = ($tecnico['id'] == $tecnico_servico['id']) ? 'selected' : '';
			?>
				<option value='<?= $cliente['id'] ?>' <?= $selected ?>><?= $cliente['nome'] ?></option>
				<?php endforeach; ?>
			</select>
			</td>
		</tr>
		<tr>
			<td><label for='tecnico_id'>Tecnico</label></td>
			<td>
			<select name='tecnico_id'>
			<?php 
				foreach($tecnicos as $tecnico):	
					$selected = ($tecnico['id'] == $tecnico_servico['id']) ? 'selected' : '';
			?>
				<option value='<?= $tecnico['id'] ?>' <?= $selected ?>><?= $tecnico['nome'] ?></option>
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
	<input name='id' value='<?= $servico['id'] ?>' type='hidden' />
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
		redirecionar_para('servicos','listar');
	}
?>