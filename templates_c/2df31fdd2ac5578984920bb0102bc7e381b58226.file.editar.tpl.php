<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:48:51
         compiled from ".\templates\produto\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240755384ec230aadd3-53264034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df31fdd2ac5578984920bb0102bc7e381b58226' => 
    array (
      0 => '.\\templates\\produto\\editar.tpl',
      1 => 1401220072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240755384ec230aadd3-53264034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'produto' => 0,
    'categorias' => 0,
    'item' => 0,
    'fabricantes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384ec23198c98_01107487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384ec23198c98_01107487')) {function content_5384ec23198c98_01107487($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Edição de produto</h1>
	
	<form action="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
" method="post">
	    
	    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
" />
	    
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
"  <?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['produto']->value['categoria_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
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
"  <?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['produto']->value['fabricante_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</option>
		<?php } ?>
	    </select>
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ><?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>
</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
    <?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
