
{include file="includes/header.tpl"}
	
	<h1>Edição de produto</h1>
	
	<form action="editar.php?id={$produto.id}" method="post">
	    
	    <input type="hidden" name="id" value="{$produto.id}" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="{$produto.nome}" />
	    
	    <br />
	    
	    <label for="categoria_id" style="display: inline-block; width: 75px;">Categoria</label>
	    <select name="categoria_id" id="nome" value="<?php echo $produto['nome']; ?>">
		<option></option>
		{foreach from=$categorias item='item'}
		    <option value="{$item.id}"  {if $item.id == $produto.categoria_id}selected{/if}>{$item.nome}</option>
		{/foreach}
	    </select>
	    
	    <br />
	    
	    <label for="fabricante_id" style="display: inline-block; width: 75px;">Fabricante</label>
	    <select name="fabricante_id" id="nome" value="<?php echo $produto['nome']; ?>">
		<option></option>
		{foreach from=$fabricantes item='item'}
		    <option value="{$item.id}"  {if $item.id == $produto.fabricante_id}selected{/if}>{$item.nome}</option>
		{/foreach}
	    </select>
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" >{$produto.descricao}</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
    {include file="includes/footer.tpl"}
