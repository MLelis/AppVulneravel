<?php
	$categorias = new Categorias();
	$categorias->Set("conexao",$conexao);
	$categorias->Set("post",$_POST);
    $todosCategorias = $categorias->listarTodasCategorias();

include('views/'.'categorias.pesquisar.php');