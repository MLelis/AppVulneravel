<?php
	$noticias = new Noticias();
	$noticias->Set("conexao",$conexao);
	$noticias->Set("post",$_POST);
    $todasNoticias = $noticias->listarTodasNoticias();

    $categorias = new Categorias();
	$categorias->Set("conexao",$conexao);
	$categorias->Set("post",$_POST);
    $todosCategorias = $categorias->listarTodasCategorias();

include('views/'.'noticias.pesquisar.php');