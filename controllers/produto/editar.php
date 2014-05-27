<?php

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
    
    // Pega os dados do registro que será editado
    if (isset($parametros[0])) {
		$id = $parametros[0];
    } else {
		header("Location:/produto/listar");
    }
    // Comando para selecionar os dados no BD
    $comando = "SELECT * FROM produto WHERE id='$id'";
    // Executa a consulta
    $consulta = mysqli_query($link, $comando);
    // Pega os dados do registro
    $produto = mysqli_fetch_assoc($consulta);
    //envia a variável categorias para o templates
    $tpl->assign('produto', $produto);
    
    //verifica se foi passada a variável 'nome' pelo $_POST
    if (isset($_POST["nome"])) {
	
	//recebe as variáveis
	$id			= $_POST['id'];
	$nome		= $_POST['nome'];
	$descricao	= $_POST['descricao'];
	$categoria_id	= $_POST['categoria_id'];
	$fabricante_id	= $_POST['fabricante_id'];
	
	//monta o comando de atualização no BD
	$comando = "UPDATE
			produto
		    SET
			nome='$nome',
			descricao='$descricao', 
			categoria_id='$categoria_id',
			fabricante_id='$fabricante_id'
		    WHERE
			id='$id'";
	
	//executa e verifica se o comando foi realizado com sucesso
	if (mysqli_query($link, $comando)) {
	    //se foi cadastrado com sucesso
	    header("Location:/produto/listar");
	} else {
	    //se deu erro
	    echo '<p>Erro ao editar.</p>';
	    echo '<a href="javascript:history.back()">Voltar</a>';
	    die();
	}
    }
    
    
?>