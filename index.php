<?php
	
	//Importa os arquivos de configuração
	require_once 'inc/conf.php';
	
	//Pega os parâmetros da URL
	$controle	= $request->controller;
	$acao		= $request->action;
	$parametros	= $request->params;
	
	//Exemplo de URL: http://crudurl.dev/produto/editar/id/1/cat/2/tam/g
	//echo "<pre>";
	//echo "Controle: ". $controle."<br>";
	//echo "Acao: ". $acao."<br>";
	//print_r($parametros);
	//exit;

	//se o controler for vazio, define seu valor como inicio
	if ($controle == "index") $controle = "produto";	
	if ($acao == "index") $acao = "listar";	
	
	//envia o valor do controle para o template
	$tpl->assign("controle", $controle);
	//envia o valor da ação para o template
	$tpl->assign("acao", $acao);
	
	//Configura o arquivo de base 
	if(strpos ($_SERVER['SERVER_NAME'], "crudurl.dev" ) !== false) {	
	    $tpl->assign("base", "http://crudurl.dev");
	} else {
	    //Configuração do servidor online
	}
	
	// Define o Charset da página HTML
	header('Content-Type: text/html; charset=UTF-8');
	
	// Define o caminho do controle
	$arquivoController = "controllers/" . $controle . "/" . $acao . ".php";
	
	// Verifica se o arquivo do controle existe
	if(file_exists($arquivoController)){
	    //Verifica se existe o arquivo do controller
	    include($arquivoController);
	    //Exibe o template
	    $tpl->display( $controle . "/" . $acao . '.tpl');
	} else {
	    //Se não existir, exibe a página de erro
	    $tpl->display('404.tpl');
	}
?>