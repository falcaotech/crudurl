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
    
    // Pega os dados do registro que será editado
    if (isset($parametros[0])) {
		$id = $parametros[0];
    } else {
		header("Location:/categoria/listar");
    }
    // Comando para selecionar os dados no BD
    $comando = "SELECT * FROM categoria WHERE id='$id'";
    // Executa a consulta
    $consulta = mysqli_query($link, $comando);
    // Pega os dados do registro
    $categoria = mysqli_fetch_assoc($consulta);
    //envia a variável categorias para o templates
    $tpl->assign('categoria', $categoria);
    
    //verifica se foi passada a variável 'nome' pelo $_POST
    if (isset($_POST["nome"])) {
	
	//recebe as variáveis
	$id		= $_POST['id'];
	$nome		= $_POST['nome'];
	$descricao	= $_POST['descricao'];
	
	//monta o comando de atualização no BD
	$comando = "UPDATE
			categoria
		    SET
			nome='$nome',
			descricao='$descricao'
		    WHERE
			id='$id'";
	
	//executa e verifica se o comando foi realizado com sucesso
	if (mysqli_query($link, $comando)) {
	    //se foi cadastrado com sucesso
	    header("Location:/categoria/listar");
	} else {
	    //se deu erro
	    echo '<p>Erro ao editar.</p>';
	    echo '<a href="javascript:history.back()">Voltar</a>';
	    die();
	}
    }
    
    
?>