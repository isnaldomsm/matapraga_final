<?php
    include_once('globais.php');

    function montar_include($pasta, $arquivo) {
        return TEMPLATES.'/'.$pasta.'/'.$arquivo.'.php';
    }

    function mostrar_conteudo() {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('?', $uri); //Separando URI dos Parametros Get
        $uri = $uri[0]; //Apenas URI (ignorando Parametros Get)
        $uri = rtrim($uri, '/'); //Removendo última barra da URI
        $partes = explode('/', $uri);

        if(count($partes) >= 5) { //Tenha mais de 5 partes
            $arquivo = array_pop($partes); //Último elemento
            $pasta = array_pop($partes); //Penúltimo elemento
        } else {
            $pasta = 'clientes';
            $arquivo = 'listar';        
        }    
        $caminho = montar_include($pasta, $arquivo);
        include_once($caminho);
    }

    function link_para($texto, $pasta, $arquivo, $query=''){
        if($query) 
            $query = '?'.$query;
        echo '<a href=\'/'.BASE.'/index.php/'.$pasta.'/'.$arquivo.'/'.$query.'\'>'.$texto.'</a>';
    }

    function link_alterar($objeto, $id) {
        $acao = 'alterar';
        link_para($acao, $objeto, $acao, 'id='.$id);
    }

    function link_remover($objeto, $id) {
        $acao = 'remover';
        link_para($acao, $objeto, $acao, 'id='.$id);   
    }

    function link_cadastrar($texto, $objeto) {
        link_para($texto, $objeto, 'cadastrar');
    }

    function link_listar($texto, $objeto) {
        link_para($texto, $objeto, 'listar');
    }

    function redirecionar_para($pasta, $arquivo) {
        ob_clean();
        header('LOCATION: /'.BASE.'/index.php/'.$pasta.'/'.$arquivo.'/');        
    }

    function link_logout(){
        echo '<a href=\'/'.BASE.'/logout.php\'>sair</a>';
    }

?>




