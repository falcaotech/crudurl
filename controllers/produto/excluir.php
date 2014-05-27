<?php
    //verifica se foi passada a variável 'id' pelo $_GET
    if (isset($parametros[0])) {
		//recebe a variável id vinda por GET
		$id = $parametros[0];	
		//monta o comando de remoção no BD
		$comando = "DELETE FROM produto WHERE id = '$id'";	
		//executa e verifica se o comando foi realizado com sucesso
		if (mysqli_query($link, $comando)) {
			//se foi cadastrado com sucesso
			header("Location:/produto/listar");	    
		} else {
			//se deu erro
			echo '<p>Erro ao excluir.</p>';
			echo '<a href="javascript:history.back()">Voltar</a>';
			die();
		}
    } else {
		echo '<p>Id não fornecida.</p>';
		echo '<a href="/produto/listar">Voltar</a>';
		die();
    }
?>
