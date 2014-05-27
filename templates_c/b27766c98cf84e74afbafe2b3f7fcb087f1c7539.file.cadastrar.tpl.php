<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:37:48
         compiled from ".\templates\categoria\cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22705384e8e3164690-55792882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27766c98cf84e74afbafe2b3f7fcb087f1c7539' => 
    array (
      0 => '.\\templates\\categoria\\cadastrar.tpl',
      1 => 1401219455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22705384e8e3164690-55792882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384e8e31b1ba4_74330442',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384e8e31b1ba4_74330442')) {function content_5384e8e31b1ba4_74330442($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Nova categoria</h1>
	
	<form action="/categoria/cadastrar" method="post">
	    
	    <label for="nome" style="display: inline-block; width: 75px;">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="descricao" style="display: inline-block; width: 75px;">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="/">Voltar</a>
	
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
