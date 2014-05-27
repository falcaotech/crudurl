<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 17:15:35
         compiled from ".\templates\fabricante\cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219425384f0fcaba7e1-00002079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc80eb0a50584aef3531ee4ab4d653e55e16530' => 
    array (
      0 => '.\\templates\\fabricante\\cadastrar.tpl',
      1 => 1401221732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219425384f0fcaba7e1-00002079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384f0fcb0a5c8_77979462',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384f0fcb0a5c8_77979462')) {function content_5384f0fcb0a5c8_77979462($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Novo fabricante</h1>
	
	<form action="/fabricante/cadastrar" method="post">
	    
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
