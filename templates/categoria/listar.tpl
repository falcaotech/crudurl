{include file="includes/header.tpl"}

<h1>Categorias</h1>
<a href="/categoria/cadastrar">Novo categoria</a>
<table id="categorias" width="100%" border="1">
    <tr>
	<th>Nome da categoria</th>
	<th>Descrição da categoria</th>
	<th>Ações</th>
    </tr>

    {foreach from=$categorias item="categoria"}
    <tr>
	<td>{$categoria['nome']}</td>
	<td>{$categoria['descricao']}</td>
	<td>
	    <a href="/categoria/editar/{$categoria['id']}">Editar</a>
	    <a href="/categoria/excluir/{$categoria['id']}">Excluir</a>
	</td>
	
    </tr>
    {/foreach}

</table>

{include file="includes/footer.tpl"}