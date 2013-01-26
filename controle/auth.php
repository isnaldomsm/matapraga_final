<?php 
	function requerer_autenticacao(){
		if(!$_SESSION['usuario_atual']){
			ob_clean();
			header('LOCATION: /'.BASE.'/login.php');
		}
	}

	function autenticar($dados){
		$usuario = buscar_usuario($dados['login'], $dados['senha']);
		if($usuario){
			$_SESSION['usuario_atual'] = $usuario['login'];
			$_SESSION['usuario_tipo'] =  $usuario['tipo'];
			ob_clean();
			header('LOCATION: /'.BASE.'/index.php');
		}
	}
?>