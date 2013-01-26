<?php requerer_autenticacao(); ?>
<h2>Lista de Clientes</h2>

<?php 
	$clientes = select_all('clientes');
	if(count($clientes) == 0):
?>
	<p>Não Existem clientes Cadastrados.</p>
<?php else: ?>
<table class='lista'>
	<thead>
	<tr>
		<th>Nome</th>
		<th>Razão Social</th>
		<th>CNPJ</th>
		<th>Endereço</th>
		<th>Última Visita</th>
		<th>Próxima Visita</th>
		<th>Status</th>
		<th></th>
		<th></th>		
	</tr>
	</thead>
	<tbody>
		<?php foreach ($clientes as $cliente): ?>
		<tr>
			<td> <?= $cliente['nome']; ?> </td>
			<td> <?= $cliente['razao_social'] ?> </td>
			<td> <?= $cliente['cnpj'] ?> </td>
			<td> <?= $cliente['endereco'] ?> </td>
			<td> <?= $cliente['data_ultima_visita'] ?> </td>
			<td> <?= $cliente['data_proxima_visita'] ?> </td>
			<td> <?= $cliente['status'] ?> </td>
			<td> <?= link_alterar('clientes', $cliente['id']) ?> </td>
			<td> <?= link_remover('clientes', $cliente['id']) ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>