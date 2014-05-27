<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 16:18:14
         compiled from ".\templates\includes\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103415384e4f6098026-40357426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546a32bcfbb138d8d869a8a597e33eacaa062f6a' => 
    array (
      0 => '.\\templates\\includes\\header.tpl',
      1 => 1401217529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103415384e4f6098026-40357426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384e4f60a4703_90657647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384e4f60a4703_90657647')) {function content_5384e4f60a4703_90657647($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <!--favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<style>
	    body {
		background:#EEE;
	    }
	</style>
    </head>
    <body>
	<nav>
	    <ul>
		<li><a href="/produto/listar">Produtos</a></li>
		<li><a href="/categoria/listar">Categorias</a></li>
		<li><a href="/fabricante/listar">Fabricantes</a></li>
		
	    </ul>
	</nav><?php }} ?>
