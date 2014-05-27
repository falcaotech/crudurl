<?php

//Seleciona os elementos no banco de dados
$consulta = mysqli_query($link, "SELECT * FROM fabricante");
//cria um array para guardar os fabricantes
$fabricante = array();

//laço para popular o array dos fabricantes
while($fabricante = mysqli_fetch_assoc($consulta)){
    //adiciona a categoria da vez ao array fabricantes
    $fabricantes[] = $fabricante;
}

//envia o array fabricantes para o template
$tpl->assign("fabricantes", $fabricantes);
//envia o título da página
$tpl->assign("titulo", "Página fabricantes - Listagem de fabricantes");