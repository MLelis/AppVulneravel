<?php


$categorias = new Categorias();
$categorias->Set("conexao",$conexao);
$totalCategorias = $categorias->totalCategorias();

$noticias = new Noticias();
$noticias->Set("conexao",$conexao);
$totalNoticias = $noticias->totalNoticias();

include('views/'.'index.php');