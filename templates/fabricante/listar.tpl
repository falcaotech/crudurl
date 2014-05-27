{include file="includes/header.tpl"}

<h1>Fabricantes</h1>
<a href="/fabricante/cadastrar">Novo fabricante</a>
<table id="fabricantes" width="100%" border="1">
    <tr>
	<th>Nome do fabricante</th>
	<th>Descrição do fabricante</th>
	<th>Ações</th>
    </tr>

    {foreach from=$fabricantes item="fabricante"}
    <tr>
	<td>{$fabricante['nome']}</td>
	<td>{$fabricante['descricao']}</td>
	<td>
	    <a href="/fabricante/editar/{$fabricante['id']}">Editar</a>
	    <a href="/fabricante/excluir/{$fabricante['id']}">Excluir</a>
	</td>
	
    </tr>
    {/foreach}

</table>

{include file="includes/footer.tpl"}