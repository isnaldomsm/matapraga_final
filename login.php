<?php include_once('controle/globais.php'); ?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<link rel="stylesheet" type="text/css" href="/<?php echo BASE?>/estaticos/estilo.css">
        <title>Sistema Web MataPraga</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method='POST' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
            <table>
                <tr>
                    <td><label for='login'>Login</label></td>
                    <td><input name='login' size='20' required /></td>
                </tr>
                <tr>
                    <td><label for='senha'>Senha</label></td>
                    <td><input name='senha' size='20' type='password' required /></td>
                </tr>
            </table>
            <button type='submit'>Entrar</button>
        </form>

    <?php
        $dados = array(
            'login' => $_POST['login'], 
            'senha' => $_POST['senha']
        );
        autenticar($dados);
    ?>
    </body>
</html>

