<?php requerer_autenticacao(); ?>
<h2>Lista de Técnicos</h2>

<?php 
	$tecnicos = select_all('tecnicos');
	if(count($tecnicos) == 0):
?>
	<p>Não Existem Técnicos Cadastrados.</p>
<?php else: ?>
<table class='lista'>
	<thead>
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Disponibilidade</th>
		<th></th>
		<th></th>		
	</tr>
	</thead>
	<tbody>
		<?php foreach ($tecnicos as $tecnico): ?>
		<tr>
			<td> <?= $tecnico['nome']; ?> </td>
			<td> <?= $tecnico['email'] ?> </td>
			<td> <?= $tecnico['disponibilidade'] ?> </td>
			<td> <?= link_alterar('tecnicos', $tecnico['id']) ?> </td>
			<td> <?= link_remover('tecnicos', $tecnico['id']) ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>