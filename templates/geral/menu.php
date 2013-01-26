<?php link_cadastrar('+ Cliente', 'clientes'); ?> |
<?php link_cadastrar('+ Técnico','tecnicos'); ?> |
<?php link_cadastrar('+ Material','materiais'); ?> |
<?php link_cadastrar('+ Serviço','servicos'); ?> |
<?php link_listar('Listar Clientes', 'clientes') ?> |
<?php link_listar('Listar Técnicos', 'tecnicos') ?> |
<?php link_listar('Listar Material', 'materiais') ?> |
<?php link_listar('Listar Serviços', 'servicos') ?>
<br />
<p>Bem-vindo <?= $_SESSION['usuario_atual'] ?> (<?php link_logout() ?>).</p>