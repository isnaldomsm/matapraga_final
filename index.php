<?php include_once('controle/rotas.php'); ?>

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<link rel="stylesheet" type="text/css" href="/<?php echo BASE?>/estaticos/estilo.css">
        <title>Sistema Web MataPraga</title>
    </head>
    <body>
        <?php 
            include_once(TEMPLATES.'/geral/menu.php');
        	mostrar_conteudo();
        ?>
    </body>
</html>

