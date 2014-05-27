<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:57:26
         compiled from ".\templates\categoria\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178045384eb2650e459-42949242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa5a9e0517c19daee8a3990c50a60105058f2259' => 
    array (
      0 => '.\\templates\\categoria\\editar.tpl',
      1 => 1401220637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178045384eb2650e459-42949242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384eb2657d523_16971407',
  'variables' => 
  array (
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384eb2657d523_16971407')) {function content_5384eb2657d523_16971407($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Edição de categoria</h1>
	
	<form action="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" method="post">
	    
	    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nome'];?>
" />
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ><?php echo $_smarty_tpl->tpl_vars['categoria']->value['descricao'];?>
</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
    <?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
