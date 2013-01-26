<?php
	requerer_autenticacao();
	delete($_GET['id'], 'tecnicos');
	redirecionar_para('tecnicos','listar');	
?>