<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:18:13
         compiled from ".\templates\produto\listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198045384e4f5eee680-68712523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91cb816bad48c3bc48760878956e699f2cd3ac76' => 
    array (
      0 => '.\\templates\\produto\\listar.tpl',
      1 => 1401217929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198045384e4f5eee680-68712523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384e4f60400c6_71428596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384e4f60400c6_71428596')) {function content_5384e4f60400c6_71428596($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
    
    <?php  $_smarty_tpl->tpl_vars["produto"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["produto"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["produto"]->key => $_smarty_tpl->tpl_vars["produto"]->value) {
$_smarty_tpl->tpl_vars["produto"]->_loop = true;
?>
    <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['categoria_nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['fabricante_nome'];?>
</td>
	<td>
	    <a href="/produto/editar/<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
">Editar</a>
	    <a href="/produto/excluir/<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
">Excluir</a>
	</td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["produto"]->_loop) {
?>
	<tr>
	    <td colspan="5">Nenhum produto cadastrado.</td>
	</tr>
    <?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
