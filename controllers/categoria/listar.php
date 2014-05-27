<?php

$consulta = mysqli_query($link, "SELECT * FROM categoria");
//cria um array para guardar as categorias
$categoria = array();

//laço para popular o array das categorias
while($categoria = mysqli_fetch_assoc($consulta)){
    //adiciona a categoria da vez ao array categorias
    $categorias[] = $categoria;
}

//envia o array categorias para o template
$tpl->assign("categorias", $categorias);
//envia o título da página
$tpl->assign("titulo", "Página categorias - Listagem de categorias");