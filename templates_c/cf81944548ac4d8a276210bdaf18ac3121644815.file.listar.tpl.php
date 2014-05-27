<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:34:52
         compiled from ".\templates\categoria\listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271155384e58fbc9467-14966275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf81944548ac4d8a276210bdaf18ac3121644815' => 
    array (
      0 => '.\\templates\\categoria\\listar.tpl',
      1 => 1401219289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271155384e58fbc9467-14966275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384e58fc4c7d1_50408630',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384e58fc4c7d1_50408630')) {function content_5384e58fc4c7d1_50408630($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Categorias</h1>
<a href="/categoria/cadastrar">Novo categoria</a>
<table id="categorias" width="100%" border="1">
    <tr>
	<th>Nome da categoria</th>
	<th>Descrição da categoria</th>
	<th>Ações</th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars["categoria"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["categoria"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["categoria"]->key => $_smarty_tpl->tpl_vars["categoria"]->value) {
$_smarty_tpl->tpl_vars["categoria"]->_loop = true;
?>
    <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['descricao'];?>
</td>
	<td>
	    <a href="/categoria/editar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
">Editar</a>
	    <a href="/categoria/excluir/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
">Excluir</a>
	</td>
	
    </tr>
    <?php } ?>

</table>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
