<?php requerer_autenticacao(); ?>
<h2>Lista de Materiais</h2>

<?php 
	$materiais = select_all('materiais');
	if(count($materiais) == 0):
?>
	<p>Não Existem Materiais Cadastrados.</p>
<?php else: ?>
<table class='lista'>
	<thead>
	<tr>
		<th>Nome</th>
		<th>Codigo</th>
		<th>Quantidade</th>
		<th>Descrição</th>
		<th></th>
		<th></th>		
	</tr>
	</thead>
	<tbody>
		<?php foreach ($materiais as $material): ?>
		<tr>
			<td> <?= $material['nome']; ?> </td>
			<td> <?= $material['codigo'] ?> </td>
			<td> <?= $material['quantidade'] ?> </td>
			<td> <?= $material['descricao'] ?> </td>
			<td> <?= link_alterar('materiais', $material['id']) ?> </td>
			<td> <?= link_remover('materiais', $material['id']) ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>