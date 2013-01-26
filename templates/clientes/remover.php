<?php
	requerer_autenticacao();
	delete($_GET['id'], 'clientes');
	redirecionar_para('clientes','listar');
?>
