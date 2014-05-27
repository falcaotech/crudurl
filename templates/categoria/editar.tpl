
{include file="includes/header.tpl"}
	
	<h1>Edição de categoria</h1>
	
	<form action="editar.php?id={$categoria.id}" method="post">
	    
	    <input type="hidden" name="id" value="{$categoria.id}" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="{$categoria.nome}" />
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" >{$categoria.descricao}</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
    {include file="includes/footer.tpl"}
