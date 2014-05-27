{include file="includes/header.tpl"}
	
	<h1>Novo produto</h1>
	
	<form action="/produto/cadastrar" method="post">
	    
	    <label for="nome" style="display: inline-block; width: 75px;">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="categoria_id" style="display: inline-block; width: 75px;">Categoria</label>
	    <select name="categoria_id" id="nome" value="<?php echo $produto['nome']; ?>">
		<option></option>
		{foreach from=$categorias item='item'}
		    <option value="{$item['id']}">{$item['nome']}</option>
		{/foreach}
	    </select>
	    
	    <br />
	    
	    <label for="fabricante_id" style="display: inline-block; width: 75px;">Fabricante</label>
	    <select name="fabricante_id" id="nome" value="<?php echo $produto['nome']; ?>">
		<option></option>
		{foreach from=$fabricantes item='item'}
		    <option value="{$item['id']}">{$item['nome']}</option>
		{/foreach}
	    </select>
	    
	    <br />
	    
	    <label for="descricao" style="display: inline-block; width: 75px;">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
{include file="includes/footer.tpl"}