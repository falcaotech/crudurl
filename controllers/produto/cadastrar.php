<?php

    //verifica se foi passada a variável 'nome' pelo $_POST
    if (isset($_POST["nome"])) {
		//recebe as variáveis
		$nome	    = $_POST['nome'];
		$descricao  = $_POST['descricao'];
		$categoria_id  = $_POST['categoria_id'];
		$fabricante_id = $_POST['fabricante_id'];
		//monta o comando de inserção no BD
		$comando = "INSERT INTO produto (nome, descricao, categoria_id, fabricante_id) VALUES ('$nome', '$descricao', '$categoria_id', '$fabricante_id')";
//		echo $comando;
//		exit;
		//executa e verifica se o comando foi realizado com sucesso
		if (mysqli_query($link, $comando)) {
			//se foi cadastrado com sucesso
			header("Location:/");	    
		} else {
			//se deu erro
			echo '<p>Erro ao cadastrar.</p>';
			echo '<a href="javascript:history.back()">Voltar</a>';
			die();
		}
    }
   
     //seleciona as categorias cadastradas no banco
    $comando = "SELECT * FROM categoria";
    //executa a consulta
    $consulta = mysqli_query($link, $comando);
    //cria um array para as categorias
    $categorias = array();
    //laço para popular o array dos produtos
    while($categoria = mysqli_fetch_assoc($consulta)){
	//adiciona o produto da vez ao array produtos 
	$categorias[] = $categoria;
    }
     //envia a variável categorias para o templates
    $tpl->assign('categorias', $categorias);
    
    
    //seleciona os fabricantes cadastrados no banco
    $comando = "SELECT * FROM fabricante";
     //executa a consulta
    $consulta = mysqli_query($link, $comando);
    //cria um array para os fabricantes
    $fabricantes = array();
    //laço para popular o array dos fabricantes
    while($fabricante = mysqli_fetch_assoc($consulta)){
	//adiciona o fabricante da vez ao array fabricantes 
	$fabricantes[] = $fabricante;
    }
     //envia a variável fabricantes para o template
    $tpl->assign('fabricantes', $fabricantes);

    //envia o título da página
    $tpl->assign("titulo", "Cadastro de produtos");