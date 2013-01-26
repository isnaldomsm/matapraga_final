<?php
	requerer_autenticacao();
	delete($_GET['id'], 'servicos');
	redirecionar_para('servicos','listar');
?>
