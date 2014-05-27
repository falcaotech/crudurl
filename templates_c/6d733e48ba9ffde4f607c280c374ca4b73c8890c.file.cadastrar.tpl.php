<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:20:53
         compiled from ".\templates\produto\cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260815384e5952bc199-67549356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d733e48ba9ffde4f607c280c374ca4b73c8890c' => 
    array (
      0 => '.\\templates\\produto\\cadastrar.tpl',
      1 => 1401217585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260815384e5952bc199-67549356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'item' => 0,
    'fabricantes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384e59534ec38_67978551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384e59534ec38_67978551')) {function content_5384e59534ec38_67978551($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Novo produto</h1>
	
	<form action="/produto/cadastrar" method="post">
	    
	    <label for="nome" style="display: inline-block; width: 75px;">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="categoria_id" style="display: inline-block; width: 75px;">Categoria</label>
	    <select name="categoria_id" id="nome" value="<<?php ?>?php echo $produto['nome']; ?<?php ?>>">
		<option></option>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
		<?php } ?>
	    </select>
	    
	    <br />
	    
	    <label for="fabricante_id" style="display: inline-block; width: 75px;">Fabricante</label>
	    <select name="fabricante_id" id="nome" value="<<?php ?>?php echo $produto['nome']; ?<?php ?>>">
		<option></option>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fabricantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
		<?php } ?>
	    </select>
	    
	    <br />
	    
	    <label for="descricao" style="display: inline-block; width: 75px;">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
