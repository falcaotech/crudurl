<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 17:12:02
         compiled from ".\templates\fabricante\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270215384f192d7d308-81281572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c049a7aae3e65bc21cce55eacea2b13ab0f8d8c0' => 
    array (
      0 => '.\\templates\\fabricante\\editar.tpl',
      1 => 1401214890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270215384f192d7d308-81281572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fabricante' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384f192decca5_77656260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384f192decca5_77656260')) {function content_5384f192decca5_77656260($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Edição de fabricante</h1>
	
	<form action="editar_fabricante.php?id=<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['id'];?>
" method="post">
	    
	    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['id'];?>
" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['nome'];?>
" />
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ><?php echo $_smarty_tpl->tpl_vars['fabricante']->value['descricao'];?>
</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	
    <?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
