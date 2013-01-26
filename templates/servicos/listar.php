<?php requerer_autenticacao(); ?>
<h2>Lista de Clientes</h2>

<?php 
	$servicos = select_all('servicos');
	if(count($servicos) == 0):
?>
	<p>Não Existem Serviços Cadastrados.</p>
<?php else: ?>
<table class='lista'>
	<thead>
	<tr>
		<th>Execução</th>
		<th>Garantia</th>
		<th>Status</th>
		<th>Tipos</th>
		<th>Observações</th>
		<th></th>
		<th></th>		
	</tr>
	</thead>
	<tbody>
		<?php foreach ($servicos as $servico): ?>
		<tr>
			<td> <?= $servico['data_execucao']; ?> </td>
			<td> <?= $servico['garantia'] ?> </td>
			<td> <?= $servico['status'] ?> </td>
			<td> <?= $servico['tipos'] ?> </td>
			<td> <?= $observacoes['observacoes'] ?> </td>
			<td> <?= link_alterar('servicos', $servico['id']) ?> </td>
			<td> <?= link_remover('servicos', $servico['id']) ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>