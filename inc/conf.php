<?php

header('Content-Type: text/html; charset=utf-8');

 /**
 * Example Application

 * @package Example-application
 */

require 'libs/smarty/Smarty.class.php';
$tpl = new Smarty;

require_once 'libs/FriendlyURL.class.php'; //URL Amigável
//Cria uma nova instância da URL Amigável
$request = new FriendlyURL();

require_once 'conexao.php'; 

//$tpl->force_compile = true;
//$tpl->debugging = false;
//$tpl->caching = true;
//$tpl->cache_lifetime = 120;