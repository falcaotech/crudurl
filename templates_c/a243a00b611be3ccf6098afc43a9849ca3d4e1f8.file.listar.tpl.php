<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 17:12:42
         compiled from ".\templates\fabricante\listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254165384e590c6b028-82885697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a243a00b611be3ccf6098afc43a9849ca3d4e1f8' => 
    array (
      0 => '.\\templates\\fabricante\\listar.tpl',
      1 => 1401221560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254165384e590c6b028-82885697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384e590d0d0e3_74332251',
  'variables' => 
  array (
    'fabricantes' => 0,
    'fabricante' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384e590d0d0e3_74332251')) {function content_5384e590d0d0e3_74332251($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Fabricantes</h1>
<a href="/fabricante/cadastrar">Novo fabricante</a>
<table id="fabricantes" width="100%" border="1">
    <tr>
	<th>Nome do fabricante</th>
	<th>Descrição do fabricante</th>
	<th>Ações</th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars["fabricante"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["fabricante"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fabricantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["fabricante"]->key => $_smarty_tpl->tpl_vars["fabricante"]->value) {
$_smarty_tpl->tpl_vars["fabricante"]->_loop = true;
?>
    <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['fabricante']->value['nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['fabricante']->value['descricao'];?>
</td>
	<td>
	    <a href="/fabricante/editar/<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['id'];?>
">Editar</a>
	    <a href="/fabricante/excluir/<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['id'];?>
">Excluir</a>
	</td>
	
    </tr>
    <?php } ?>

</table>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
