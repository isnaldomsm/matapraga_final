<?php
	requerer_autenticacao();
	delete($_GET['id'], 'materiais');
	redirecionar_para('materiais','listar');
?>