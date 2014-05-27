
{include file="includes/header.tpl"}
	
	<h1>Edição de fabricante</h1>
	
	<form action="editar_fabricante.php?id={$fabricante.id}" method="post">
	    
	    <input type="hidden" name="id" value="{$fabricante.id}" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="{$fabricante.nome}" />
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" >{$fabricante.descricao}</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	
    {include file="includes/footer.tpl"}
