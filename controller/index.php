<?php


$noticias = new Noticias();
$noticias->Set("conexao",$conexao);
$retornaNoticias = $noticias->listarTodasNoticias();
// var_dump($retornaNoticias);exit;


include('views/'.'index.php');