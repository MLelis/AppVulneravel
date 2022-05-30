<?php

$url = strip_tags($_SERVER["REQUEST_URI"]); // USAR ESSE OU O OUTRO
$get_array = explode("?",$url); 
$url = explode("/",$get_array[0]);
array_shift($url);
$urlreservada = array();

//MENU

$urlreservada["home"] = "index.php";
$urlreservada["login"] = 'login.php';
$urlreservada["categorias-cadastrar"] = 'categorias.cadastrar.php';
$urlreservada["categorias-pesquisar"] = 'categorias.pesquisar.php';
$urlreservada["noticias-cadastrar"] = 'noticias.cadastrar.php';
$urlreservada["noticias-pesquisar"] = 'noticias.pesquisar.php';
$urlreservada["usuarios-pesquisar"] = 'usuarios.pesquisar.php';
$urlreservada["usuarios-cadastrar"] = 'usuarios.cadastrar.php';




