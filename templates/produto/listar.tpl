{include file="includes/header.tpl"}

<h1>Produtos</h1>
<a href="/produto/cadastrar">Novo produto</a>
<table id="produtos" width="100%" border="1">
    <tr>
	<th>Nome</th>
	<th>Descrição</th>
	<th>Categoria</th>
	<th>Fabricante</th>
	<th>Ações</th>
    </tr>
    
    {foreach from=$produtos item="produto"}
    <tr>
	<td>{$produto['nome']}</td>
	<td>{$produto['descricao']}</td>
	<td>{$produto['categoria_nome']}</td>
	<td>{$produto['fabricante_nome']}</td>
	<td>
	    <a href="/produto/editar/{$produto['id']}">Editar</a>
	    <a href="/produto/excluir/{$produto['id']}">Excluir</a>
	</td>
    </tr>
    {foreachelse}
	<tr>
	    <td colspan="5">Nenhum produto cadastrado.</td>
	</tr>
    {/foreach}
</table>

{include file="includes/footer.tpl"}